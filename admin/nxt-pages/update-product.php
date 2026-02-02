<base href="../">
<?php include("../header.php"); ?>

<main class="grow content py-8 bg-gray-50 min-h-screen">
  <div class="container mx-auto max-w-7xl">
    <div class="bg-white rounded-xl shadow-md p-8">
      <form id="updateProductForm" class="space-y-10">

        <div>
          <h2 class="text-2xl font-semibold text-gray-800">Update Product</h2>
          <p class="text-sm text-gray-500 mt-1">Modify product details and manage variations</p>
        </div>

        <!-- BASIC INFORMATION SECTION -->
        <div class="border rounded-lg p-6">
          <h3 class="text-lg font-medium text-gray-700 mb-6">Basic Information</h3>

          <input type="hidden" name="slug" id="productSlug" />

          <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div>
              <label class="label">Product Name</label>
              <input type="text" id="productName" name="name" class="input input-bordered w-full" required />
            </div>

            <div>
              <label class="label">AID</label>
              <input type="text" id="productAid" name="aid" class="input input-bordered w-full" required />
            </div>

            <div>
              <label class="label">Brand ID</label>
              <input type="number" id="brandId" name="brand" class="input input-bordered w-full" required />
            </div>

            <div>
              <label class="label">Category ID</label>
              <input type="number" id="categoryId" name="category" class="input input-bordered w-full" required />
            </div>

            <div>
              <label class="label">Gender</label>
              <input type="text" id="gender" name="gender" class="input input-bordered w-full" />
            </div>

            <div>
              <label class="label">Keyword</label>
              <input type="text" id="keyword" name="keyword" class="input input-bordered w-full" />
            </div>

            <div class="md:col-span-3">
              <label class="label">Description</label>
              <textarea id="description" name="description" class="textarea textarea-bordered w-full h-24"></textarea>
            </div>

            <div class="md:col-span-3">
              <label class="label">Specification</label>
              <textarea id="specification" name="specification" class="textarea textarea-bordered w-full h-24"></textarea>
            </div>
          </div>
        </div>

        <!-- VARIATIONS SECTION -->
        <div class="border rounded-lg p-6">
          <div class="flex justify-between items-center mb-6">
            <h3 class="text-lg font-medium text-gray-700">Product Variations</h3>
            <button type="button" id="addVariationBtn" class="px-4 py-2 bg-blue-600 text-white text-sm rounded-lg hover:bg-blue-700 transition">
              + Add Variation
            </button>
          </div>
          <div id="variationContainer" class="grid md:grid-cols-2 gap-6"></div>
        </div>

        <!-- SUBMIT BUTTON -->
        <div class="flex justify-end gap-3">
          <button type="button" id="cancelBtn" class="px-6 py-2 border border-gray-300 text-gray-700 rounded-lg hover:bg-gray-50 transition">
            Cancel
          </button>
          <button type="submit" id="saveBtn" class="px-6 py-2 bg-green-600 text-white rounded-lg hover:bg-green-700 transition">
            Save Changes
          </button>
        </div>

      </form>
    </div>
  </div>
</main>

<script>
  // ===================== CONFIGURATION =====================
  const CONFIG = {
    baseUrl: '<?= $baseUrl ?>',
    api: {
      getProduct: '/api/products/get-product-byslug/',
      uploadImages: '/api/admin/upload/variation-images',
      deleteImage: '/api/admin/delete-image/',
      deleteVariation: '/api/admin/products/variation-delete/',
      updateProduct: '/api/admin/products/update'
    },
    selectors: {
      form: '#updateProductForm',
      slug: '#productSlug',
      name: '#productName',
      aid: '#productAid',
      brand: '#brandId',
      category: '#categoryId',
      gender: '#gender',
      keyword: '#keyword',
      description: '#description',
      specification: '#specification',
      variationContainer: '#variationContainer',
      addVariationBtn: '#addVariationBtn',
      saveBtn: '#saveBtn',
      cancelBtn: '#cancelBtn'
    }
  };

  // ===================== UTILITY FUNCTIONS =====================
  const Utils = {
    getAuthToken: () => localStorage.getItem('auth_token'),

    getUrlParam: (param) => new URLSearchParams(window.location.search).get(param),

    showNotification: (message, type = 'info') => {
      if (window.Swal) {
        Swal.fire({
          icon: type,
          title: type === 'success' ? 'Success' : type === 'error' ? 'Error' : 'Info',
          text: message,
          timer: 3000
        });
      } else {
        alert(message);
      }
    },

    showConfirm: async (title, text) => {
      if (!window.Swal) {
        return confirm(text);
      }
      const result = await Swal.fire({
        title,
        text,
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#EF4444',
        cancelButtonColor: '#6B7280',
        confirmButtonText: 'Yes, Delete'
      });
      return result.isConfirmed;
    },

    generateTempId: () => `temp_${Date.now()}_${Math.random().toString(36).substr(2, 9)}`
  };

  // ===================== API SERVICE =====================
  const ApiService = {
    async request(endpoint, options = {}) {
      const { method = 'GET', body = null, headers = {} } = options;
      const token = Utils.getAuthToken();

      if (!token) {
        throw new Error('Authentication token not found');
      }

      const defaultHeaders = {
        'Authorization': `Bearer ${token}`,
        'Content-Type': 'application/json',
        ...headers
      };

      const config = {
        method,
        headers: defaultHeaders
      };

      if (body && method !== 'GET') {
        config.body = typeof body === 'string' ? body : JSON.stringify(body);
      }

      const response = await fetch(`${CONFIG.baseUrl}${endpoint}`, config);

      if (!response.ok) {
        throw new Error(`HTTP ${response.status}: ${response.statusText}`);
      }

      return response.json();
    },

    async getProduct(slug) {
      return this.request(CONFIG.api.getProduct + slug, { method: 'POST' });
    },

    async uploadVariationImages(aid, uid, formData) {
      const token = Utils.getAuthToken();
      const response = await fetch(`${CONFIG.baseUrl}${CONFIG.api.uploadImages}`, {
        method: 'POST',
        headers: {
          'Authorization': `Bearer ${token}`
        },
        body: formData
      });
      return response.json();
    },

    async deleteImage(imageId) {
      return this.request(CONFIG.api.deleteImage + imageId, { method: 'DELETE' });
    },

    async deleteVariation(uid) {
      return this.request(CONFIG.api.deleteVariation + uid, { method: 'DELETE' });
    }
  };

  // ===================== DOM HELPERS =====================
  const DOM = {
    getElement: (selector) => document.querySelector(selector),
    getElements: (selector) => document.querySelectorAll(selector),

    setFieldValue: (selector, value) => {
      const el = DOM.getElement(selector);
      if (el) el.value = value || '';
    },

    getFieldValue: (selector) => {
      const el = DOM.getElement(selector);
      return el ? el.value : '';
    },

    createVariationCard: (variant, index) => {
      const imagesHTML = variant.images.map(img => `
        <div class="relative group">
          <img src="${img.url}" class="w-24 h-24 object-cover rounded border" alt="Variant image" />
          <button type="button" class="absolute top-1 right-1 bg-red-600 text-white rounded-full text-xs px-1 py-0.5 hidden group-hover:block"
            data-action="deleteImage" data-image-id="${img.id}" data-variant-uid="${variant.uid}">✕</button>
        </div>
      `).join('');

      const div = document.createElement('div');
      div.className = 'border p-4 rounded bg-white shadow variation-card';
      div.dataset.uid = variant.uid;

      div.innerHTML = `
        <div class="flex justify-between items-center mb-4">
          <h4 class="font-medium text-gray-700">Variant #${index + 1}</h4>
          <button type="button" class="text-red-500 hover:text-red-700 text-sm" data-action="deleteVariation" data-uid="${variant.uid}">
            Delete
          </button>
        </div>

        <input type="hidden" name="uid[]" value="${variant.uid}" />

        <div class="grid grid-cols-2 gap-4 mb-4">
          <input type="number" name="regular_price[]" value="${variant.regular_price}" class="input input-bordered w-full" placeholder="Regular Price" required />
          <input type="number" name="sell_price[]" value="${variant.sell_price}" class="input input-bordered w-full" placeholder="Sale Price" required />
          <input type="text" name="size[]" value="${variant.size}" class="input input-bordered w-full" placeholder="Size" />
          <input type="text" name="color[]" value="${variant.color}" class="input input-bordered w-full" placeholder="Color" />
          <input type="number" name="stock[]" value="${variant.stock}" class="input input-bordered w-full col-span-2" placeholder="Stock" required />
        </div>

        <div class="mt-4">
          <div class="flex flex-wrap gap-3 mb-3">
            ${imagesHTML || '<span class="text-gray-400 text-sm">No images uploaded</span>'}
          </div>

          <button type="button" class="px-3 py-1 text-sm bg-gray-200 rounded hover:bg-gray-300" data-action="uploadImage" data-uid="${variant.uid}">
            + Add Image
          </button>

          <input type="file" class="hidden variant-file-input" data-uid="${variant.uid}" multiple accept="image/*" />
        </div>
      `;

      return div;
    },

    createNewVariationCard: (tempId) => {
      const div = document.createElement('div');
      div.className = 'border p-4 rounded bg-white shadow variation-card';
      div.dataset.uid = tempId;

      div.innerHTML = `
        <label class="block text-sm font-medium mb-4">New Variant</label>

        <input type="hidden" name="uid[]" value="${tempId}" />
        <input type="hidden" name="aid[]" value="" />

        <div class="grid grid-cols-2 gap-4 mb-4">
          <input type="number" name="regular_price[]" class="input input-bordered w-full" placeholder="Regular Price" required />
          <input type="number" name="sell_price[]" class="input input-bordered w-full" placeholder="Sale Price" required />
          <input type="text" name="size[]" class="input input-bordered w-full" placeholder="Size" />
          <input type="text" name="color[]" class="input input-bordered w-full" placeholder="Color" />
          <input type="number" name="stock[]" class="input input-bordered w-full col-span-2" placeholder="Stock" required />
        </div>

        <div class="flex flex-wrap gap-3 mb-3 text-gray-500 text-sm">
          No images yet
        </div>

        <div class="flex gap-3">
          <button type="button" class="btn btn-sm bg-blue-500 text-white rounded" data-action="uploadImage" data-uid="${tempId}">
            + Add Image
          </button>
          <button type="button" class="btn btn-sm bg-red-500 text-white rounded" data-action="deleteVariation" data-uid="${tempId}">
            Delete Variation
          </button>
          <input type="file" class="hidden variant-file-input" data-uid="${tempId}" multiple accept="image/*" />
        </div>
      `;

      return div;
    }
  };

  // ===================== EVENT HANDLERS =====================
  const EventHandlers = {
    async handleImageUpload(e, aid, uid) {
      const files = e.target.files;
      if (!files.length) return;

      const formData = new FormData();
      formData.append('aid', aid);
      formData.append('uid', uid);

      Array.from(files).forEach(file => {
        formData.append('file[]', file);
      });

      try {
        const result = await ApiService.uploadVariationImages(aid, uid, formData);

        if (result.success) {
          Utils.showNotification('Image(s) uploaded successfully', 'success');
          location.reload();
        } else {
          Utils.showNotification('Failed to upload: ' + result.message, 'error');
        }
      } catch (err) {
        Utils.showNotification('Error uploading: ' + err.message, 'error');
      }

      e.target.value = '';
    },

    async handleDeleteImage(imageId, uid) {
      const confirmed = await Utils.showConfirm('Delete Image', 'Are you sure you want to delete this image?');
      if (!confirmed) return;

      try {
        const result = await ApiService.deleteImage(imageId);

        if (result.success) {
          Utils.showNotification('Image deleted successfully', 'success');
          location.reload();
        } else {
          Utils.showNotification('Failed to delete image', 'error');
        }
      } catch (err) {
        Utils.showNotification('Error: ' + err.message, 'error');
      }
    },

    async handleDeleteVariation(uid) {
      const confirmed = await Utils.showConfirm('Delete Variation', `Delete this variation?`);
      if (!confirmed) return;

      try {
        const result = await ApiService.deleteVariation(uid);

        if (result.success) {
          Utils.showNotification('Variation deleted successfully', 'success');

          const card = DOM.getElement(`.variation-card[data-uid="${uid}"]`);
          if (card) card.remove();
        } else {
          Utils.showNotification('Failed to delete variation', 'error');
        }
      } catch (err) {
        Utils.showNotification('Error: ' + err.message, 'error');
      }
    },

    handleAddVariation() {
      const container = DOM.getElement(CONFIG.selectors.variationContainer);
      const tempId = Utils.generateTempId();
      const card = DOM.createNewVariationCard(tempId);
      container.appendChild(card);
    },

    async handleFormSubmit(e) {
      e.preventDefault();

      const form = e.target;
      const formData = new FormData(form);
      const data = Object.fromEntries(formData);

      // Combine array fields
      const variations = [];
      const uids = formData.getAll('uid[]');
      const regularPrices = formData.getAll('regular_price[]');
      const sellPrices = formData.getAll('sell_price[]');
      const sizes = formData.getAll('size[]');
      const colors = formData.getAll('color[]');
      const stocks = formData.getAll('stock[]');

      uids.forEach((uid, index) => {
        variations.push({
          uid,
          regular_price: regularPrices[index],
          sell_price: sellPrices[index],
          size: sizes[index],
          color: colors[index],
          stock: stocks[index]
        });
      });

      const payload = {
        slug: data.slug,
        name: data.name,
        aid: data.aid,
        brand: data.brand,
        category: data.category,
        gender: data.gender,
        keyword: data.keyword,
        description: data.description,
        specification: data.specification,
        variations
      };

      try {
        const saveBtn = DOM.getElement(CONFIG.selectors.saveBtn);
        saveBtn.disabled = true;
        saveBtn.textContent = 'Saving...';

        const result = await ApiService.request(CONFIG.api.updateProduct, {
          method: 'POST',
          body: payload
        });

        if (result.success) {
          Utils.showNotification('Product updated successfully', 'success');
          setTimeout(() => window.history.back(), 2000);
        } else {
          Utils.showNotification('Failed to update product: ' + result.message, 'error');
        }
      } catch (err) {
        Utils.showNotification('Error: ' + err.message, 'error');
      } finally {
        const saveBtn = DOM.getElement(CONFIG.selectors.saveBtn);
        saveBtn.disabled = false;
        saveBtn.textContent = 'Save Changes';
      }
    }
  };

  // ===================== EVENT DELEGATION =====================
  document.addEventListener('click', (e) => {
    const action = e.target.dataset.action;

    if (action === 'deleteImage') {
      const imageId = e.target.dataset.imageId;
      const uid = e.target.dataset.variantUid;
      EventHandlers.handleDeleteImage(imageId, uid);
    }

    if (action === 'deleteVariation') {
      e.preventDefault();
      const uid = e.target.dataset.uid;
      EventHandlers.handleDeleteVariation(uid);
    }

    if (action === 'uploadImage') {
      e.preventDefault();
      const uid = e.target.dataset.uid;
      const fileInput = DOM.getElement(`.variant-file-input[data-uid="${uid}"]`);
      fileInput?.click();
    }
  });

  document.addEventListener('change', (e) => {
    if (e.target.classList.contains('variant-file-input')) {
      const uid = e.target.dataset.uid;
      const aid = DOM.getElement(`.variation-card[data-uid="${uid}"] input[name="aid[]"]`)?.value || '';
      EventHandlers.handleImageUpload(e, aid, uid);
    }
  });

  // ===================== INITIALIZATION =====================
  async function initializeForm() {
    const productSlug = Utils.getUrlParam('name');

    if (!productSlug) {
      Utils.showNotification('Product slug is missing in URL', 'error');
      return;
    }

    try {
      const { data: product, success, message } = await ApiService.getProduct(productSlug);

      if (!success) {
        Utils.showNotification('Failed to fetch product: ' + message, 'error');
        return;
      }

      // Populate form fields
      DOM.setFieldValue(CONFIG.selectors.slug, product.slug);
      DOM.setFieldValue(CONFIG.selectors.name, product.name);
      DOM.setFieldValue(CONFIG.selectors.aid, product.aid);
      DOM.setFieldValue(CONFIG.selectors.brand, product.brand?.id);
      DOM.setFieldValue(CONFIG.selectors.category, product.category?.id);
      DOM.setFieldValue(CONFIG.selectors.gender, product.gender);
      DOM.setFieldValue(CONFIG.selectors.keyword, product.keyword);
      DOM.setFieldValue(CONFIG.selectors.description, product.description);
      DOM.setFieldValue(CONFIG.selectors.specification, product.specification);

      // Render variations
      const container = DOM.getElement(CONFIG.selectors.variationContainer);
      container.innerHTML = '';

      product.variations?.forEach((variant, index) => {
        const card = DOM.createVariationCard(variant, index);
        container.appendChild(card);
      });

      // Attach event listeners
      DOM.getElement(CONFIG.selectors.addVariationBtn).addEventListener('click', EventHandlers.handleAddVariation);
      DOM.getElement(CONFIG.selectors.form).addEventListener('submit', EventHandlers.handleFormSubmit);
      DOM.getElement(CONFIG.selectors.cancelBtn).addEventListener('click', () => window.history.back());

    } catch (err) {
      Utils.showNotification('Error: ' + err.message, 'error');
    }
  }

  // Initialize on page load
  document.addEventListener('DOMContentLoaded', initializeForm);
</script>

<?php include("../footer.php"); ?>
