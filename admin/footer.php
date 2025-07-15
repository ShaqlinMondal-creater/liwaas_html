<footer class="footer">
     <!-- Container -->
     <div class="container-fixed">
          <div class="flex flex-col md:flex-row justify-center md:justify-between items-center gap-3 py-5">
               <div class="flex order-2 md:order-1 gap-2 font-normal text-2sm">
                    <span class="text-gray-500">
                         2025©
                    </span>
                    <a class="text-gray-600 hover:text-primary" href="https://keenthemes.com">
                         liwaas.com
                    </a>
               </div>
               <nav class="flex order-1 md:order-2 gap-4 font-normal text-2sm text-gray-600">
                    <a class="hover:text-primary" href="https://keenthemes.com/metronic/tailwind/docs">
                         Docs
                    </a>
                    <a class="hover:text-primary" href="https://1.envato.market/Vm7VRE">
                         Purchase
                    </a>
                    <a class="hover:text-primary"
                         href="https://keenthemes.com/metronic/tailwind/docs/getting-started/license">
                         FAQ
                    </a>
                    <a class="hover:text-primary" href="https://devs.keenthemes.com">
                         Support
                    </a>
                    <a class="hover:text-primary"
                         href="https://keenthemes.com/metronic/tailwind/docs/getting-started/license">
                         License
                    </a>
               </nav>
          </div>
     </div>
     <!-- End of Container -->
</footer>
<!-- End of Footer -->
</div>
<!-- End of Wrapper -->
</div>
<!-- End of Main -->
<?php include("inc/modal.php"); ?>
<!-- End of Page -->

<!-- Logout Logic -->
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const logoutBtn = document.getElementById('logoutBtn');

        if (logoutBtn) {
            logoutBtn.addEventListener('click', async (e) => {
                e.preventDefault();

                const token = localStorage.getItem('auth_token');
                if (!token) return window.location.href = 'sign-in.php';

                try {
                    const response = await fetch('<?= $baseUrl ?>/api/logout', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'Authorization': `Bearer ${token}`
                        }
                    });

                    const result = await response.json();

                    if (result.success) {
                        localStorage.clear();
                        window.location.href = '../sign-in.php';
                    } else {
                        alert(result.message || 'Logout failed.');
                    }
                } catch (error) {
                    console.error('Logout error:', error);
                    alert('An error occurred during logout.');
                }
            });
        }
    });
</script>
<!-- Scripts -->
<script src="assets/js/core.bundle.js">
</script>
<script src="assets/vendors/apexcharts/apexcharts.min.js">
</script>
<script src="assets/js/widgets/general.js">
</script>
<script src="assets/js/layouts/demo1.js">
</script>
<!-- End of Scripts -->
</body>

</html>