<base href="../">
<?php include("../../header.php"); ?>

<section class="bg-gray-50 py-16">
  <div class="max-w-5xl mx-auto px-4">
    <h1 class="text-4xl font-bold mb-6">Privacy Policy</h1>
    <p class="text-gray-600 mb-8">Last updated: <?php echo date("F d, Y"); ?></p>

    <div class="space-y-6 text-gray-700 leading-relaxed">

      <p>
        At <strong>Liwaas – Crafted for You</strong>, your privacy is extremely important to us. 
        This Privacy Policy explains how we collect, use, disclose, and safeguard your information 
        when you visit or make a purchase from our website.
      </p>

      <h2 class="text-2xl font-semibold mt-8">1. Information We Collect</h2>
      <p>We may collect the following information when you use our website:</p>
      <ul class="list-disc ml-6">
        <li>Personal details (name, email address, phone number, shipping address)</li>
        <li>Order information and purchase history</li>
        <li>Payment information (processed securely by third-party gateways)</li>
        <li>Device and browser information (IP address, cookies, usage data)</li>
      </ul>

      <h2 class="text-2xl font-semibold mt-8">2. How We Use Your Information</h2>
      <p>Your information is used to:</p>
      <ul class="list-disc ml-6">
        <li>Process and fulfill your orders</li>
        <li>Communicate with you regarding your orders or inquiries</li>
        <li>Improve our website and customer experience</li>
        <li>Send promotional emails (only if you opt in)</li>
        <li>Prevent fraud and ensure security</li>
      </ul>

      <h2 class="text-2xl font-semibold mt-8">3. Sharing of Information</h2>
      <p>
        We do not sell or rent your personal information. We may share your information with:
      </p>
      <ul class="list-disc ml-6">
        <li>Payment gateways and delivery partners to fulfill orders</li>
        <li>Service providers assisting in website operations</li>
        <li>Legal authorities when required by law</li>
      </ul>

      <h2 class="text-2xl font-semibold mt-8">4. Cookies</h2>
      <p>
        We use cookies to enhance your browsing experience and analyze site traffic. 
        You may disable cookies in your browser settings, but some features may not function properly.
      </p>

      <h2 class="text-2xl font-semibold mt-8">5. Data Security</h2>
      <p>
        We implement reasonable security measures to protect your personal data. 
        However, no method of transmission over the internet is 100% secure.
      </p>

      <h2 class="text-2xl font-semibold mt-8">6. Your Rights</h2>
      <p>
        You have the right to access, update, or request deletion of your personal data. 
        To do so, please contact us using the information below.
      </p>

      <h2 class="text-2xl font-semibold mt-8">7. Changes to This Policy</h2>
      <p>
        We may update this Privacy Policy from time to time. 
        Any changes will be posted on this page with an updated revision date.
      </p>

      <h2 class="text-2xl font-semibold mt-8">8. Contact Us</h2>
      <p>
        If you have any questions about this Privacy Policy, you can contact us at:
      </p>
      <p>
        <strong>Email:</strong> <?php echo $baseEmail ?? "support@liwaas.com"; ?><br>
        <strong>Address:</strong> <?php echo $baseAddress ?? "India"; ?>
      </p>

    </div>
  </div>
</section>

<?php include("../../footer.php"); ?>
