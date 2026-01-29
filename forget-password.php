<!DOCTYPE html>
<html lang="en">
<?php
    $config = include('admin/configs/config.php');
    $baseUrl = $config['API_BASE_URL'];
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password - Liwaas Crafted for You</title>

    <link rel="icon" href="assets/brand/fav_icon.png">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.cdnfonts.com/css/shadeerah-demo" rel="stylesheet" />

    <style>
        body { font-family: 'Shadeerah Demo', sans-serif !important; }
        .glass-effect {
            backdrop-filter: blur(16px);
            background: rgba(255, 255, 255, 0.1);
        }
    </style>
</head>

<body class="relative min-h-screen bg-cover bg-center flex items-center justify-center"
      style="background-image: url('assets/brand/liwaas_logo_Black.jpg');">

    <!-- Overlay -->
    <div class="absolute inset-0 bg-black/50 backdrop-blur-sm z-0"></div>

    <!-- Main -->
    <div class="relative z-10 w-full min-h-screen flex items-center justify-center px-6 lg:px-16">
        <div class="w-full max-w-9xl grid grid-cols-1 lg:grid-cols-10 gap-10 items-center">

            <!-- ================= LEFT (60%) ================= -->
            <div class="lg:col-span-5 flex flex-col justify-center space-y-6 text-center lg:text-left px-4 lg:pr-12">
                <div class="mx-auto lg:mx-0 h-24 w-24 rounded-full overflow-hidden border-2 border-white/40 shadow-lg">
                    <img src="assets/brand/li.jpg" class="w-full h-full object-cover" alt="Liwaas">
                </div>

                <h2 class="text-4xl lg:text-5xl font-bold text-white">
                    Forgot Password?
                </h2>

                <p class="text-lg text-white/80 max-w-md mx-auto lg:mx-0">
                    Don’t worry. We’ll help you reset your password securely and get you back to Liwaas.
                </p>
            </div>

            <!-- Divider -->
            <!-- <div class="hidden lg:block absolute left-[60%] top-1/2 -translate-y-1/2 h-2/3 w-px bg-white/10"></div> -->

            <!-- ================= RIGHT (40%) ================= -->
            <div class="lg:col-span-5 flex flex-col justify-center text-center lg:text-left space-y-6 px-4 lg:pr-12 mt-2 mb-1">
                <div class="glass-effect rounded-2xl p-8 shadow-2xl">

                    <form id="forgotForm" class="space-y-5">

                        <div>
                            <label class="block text-sm font-medium text-white mb-1">
                                Email Address
                            </label>
                            <input type="email" id="email" required
                                   class="w-full px-4 py-3 rounded-lg bg-white/10 border border-white/20
                                          text-white placeholder-white/60 focus:outline-none focus:ring-2
                                          focus:ring-white/50"
                                   placeholder="Enter your registered email">
                        </div>

                        <button type="submit"
                                class="w-full py-3 rounded-lg bg-white text-indigo-600 font-medium
                                       hover:bg-gray-100 transition transform hover:scale-105">
                            Send Reset Link
                        </button>

                        <div class="text-center text-sm text-white/70">
                            Remembered your password?
                            <a href="sign-in.php" class="text-white underline hover:text-white/80">
                                Sign in
                            </a>
                        </div>

                    </form>

                </div>
            </div>

        </div>
    </div>

    <!-- JS -->
    <script>
        document.getElementById('forgotForm').addEventListener('submit', async (e) => {
            e.preventDefault();

            const email = document.getElementById('email').value.trim();

            if (!email) {
                alert('Please enter your email');
                return;
            }

            try {
                const res = await fetch('<?php echo $baseUrl; ?>/api/forgot-password', {
                    method: 'POST',
                    headers: { 'Content-Type': 'application/json' },
                    body: JSON.stringify({ email })
                });

                const result = await res.json();

                if (result.success) {
                    alert('Password reset link sent to your email.');
                } else {
                    alert(result.message || 'Failed to send reset link.');
                }

            } catch (err) {
                console.error(err);
                alert('Something went wrong. Please try again.');
            }
        });
    </script>

</body>
</html>
