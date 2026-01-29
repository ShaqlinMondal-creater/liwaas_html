<!DOCTYPE html>
<html lang="en">
    <?php
        $config = include('admin/configs/config.php');
        $baseUrl = $config['API_BASE_URL'];
    ?>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sign In - Liwaas Crafted for You</title>
        <meta content="assets/brand/fav_icon.png" property="og:image" />
        <link href="assets/brand/fav_icon.png" rel="apple-touch-icon" sizes="180x180" />
        <link href="assets/brand/fav_icon.png" rel="icon" sizes="32x32" type="image/png" />
        <link href="assets/brand/fav_icon.png" rel="icon" sizes="16x16" type="image/png" />
        <link href="assets/brand/fav_icon.png" rel="shortcut icon" />
        <script src="https://cdn.tailwindcss.com"></script>
        <link href="https://fonts.cdnfonts.com/css/shadeerah-demo" rel="stylesheet" />
        <style>
            body { font-family: 'Shadeerah Demo', sans-serif !important; }
                        
            .glass-effect {
                backdrop-filter: blur(16px);
                background: rgba(255, 255, 255, 0.1);
                /* border: 1px solid rgba(255, 255, 255, 0.2); */
            }
        </style>
    </head>

    <body class="relative min-h-screen flex items-center justify-center bg-cover bg-center" style="background-image: url('assets/brand/liwaas_logo_Black.jpg');">
        <!-- Background Blur Overlay -->
        <div class="absolute inset-0 bg-black/50 backdrop-blur-sm z-0"></div>

        <!-- Main Content -->
        <div class="relative z-10 min-h-screen flex items-center justify-center px-6 lg:px-16">
            <div class="w-full max-w-9xl grid grid-cols-1 lg:grid-cols-10 gap-10 items-center">

                <!-- ================= LEFT SECTION (WIDE) ================= -->
                <div class="lg:col-span-5 flex flex-col justify-center text-center lg:text-left space-y-6 px-4 lg:pr-12">
                    <div class="mx-auto lg:mx-0 h-24 w-24 rounded-full overflow-hidden shadow-lg border-2 border-white/40">
                        <img src="assets/brand/li.jpg" alt="Liwaas Logo" class="w-full h-full object-cover" />
                    </div>

                    <h2 class="text-4xl lg:text-5xl font-bold text-white">
                        Welcome Back
                    </h2>

                    <p class="text-lg text-white/80 max-w-md mx-auto lg:mx-0">
                        Sign in to your Liwaas account
                    </p>
                </div>

                <!-- ================= RIGHT SECTION (SMALL) ================= -->
                <div class="lg:col-span-5 flex flex-col justify-center text-center lg:text-left space-y-6 px-4 lg:pr-12 mt-2 mb-1">
                    <!-- Sign In Form -->
                    <div class="glass-effect rounded-2xl p-8 shadow-2xl">
                        <form id="sign_in_form" class="space-y-6" method="POST">
                            <div>
                                <label for="email" class="block text-sm font-medium text-white mb-2">Email Address</label>
                                <input id="email" name="email" type="email" autocomplete="email" required 
                                    class="w-full px-4 py-3 bg-white/10 border border-white/20 rounded-lg text-white placeholder-white/60 focus:outline-none focus:ring-2 focus:ring-white/50 focus:border-transparent transition-all"
                                    placeholder="Enter your email">
                            </div>

                            <div>
                                <label for="password" class="block text-sm font-medium text-white mb-2">Password</label>
                                <div class="relative">
                                    <input id="password" name="password" type="password" autocomplete="current-password" required 
                                        class="w-full px-4 py-3 bg-white/10 border border-white/20 rounded-lg text-white placeholder-white/60 focus:outline-none focus:ring-2 focus:ring-white/50 focus:border-transparent transition-all pr-12"
                                        placeholder="Enter your password">
                                    <button type="button" class="absolute inset-y-0 right-0 pr-3 flex items-center" onclick="togglePassword()">
                                        <svg id="eye-icon" class="h-5 w-5 text-white/60 hover:text-white transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                        </svg>
                                    </button>
                                </div>
                            </div>

                            <div class="flex items-center justify-between">
                                <div class="flex items-center">
                                    <input id="remember-me" name="remember-me" type="checkbox" 
                                        class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-white/20 rounded bg-white/10">
                                    <label for="remember-me" class="ml-2 block text-sm text-white/80">Remember me</label>
                                </div>
                                <div class="text-sm">
                                    <a href="#" class="text-white/80 hover:text-white transition-colors">Forgot password?</a>
                                </div>
                            </div>

                            <div>
                                <button type="submit" 
                                        class="group relative w-full flex justify-center py-3 px-4 border border-transparent text-sm font-medium rounded-lg text-indigo-600 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 transition-all duration-300 transform hover:scale-105">
                                    <span class="absolute left-0 inset-y-0 flex items-center pl-3">
                                        <svg class="h-5 w-5 text-indigo-500 group-hover:text-indigo-400" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd"></path>
                                        </svg>
                                    </span>
                                    Sign In
                                </button>
                            </div>

                            <!-- Divider -->
                            <div class="relative">
                                <div class="absolute inset-0 flex items-center">
                                    <div class="w-full border-t border-white/20"></div>
                                </div>
                                <div class="relative flex justify-center text-sm">
                                    <span class="px-2 bg-transparent text-white/60">Or continue with</span>
                                </div>
                            </div>

                            <!-- Social Login -->
                            <div class="grid grid-cols-2 gap-3">
                                <button type="button" class="w-full inline-flex justify-center py-2 px-4 border border-white/20 rounded-lg bg-white/10 text-sm font-medium text-white hover:bg-white/20 transition-all">
                                    <svg class="w-5 h-5" viewBox="0 0 24 24">
                                        <path fill="currentColor" d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z"/>
                                        <path fill="currentColor" d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z"/>
                                        <path fill="currentColor" d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z"/>
                                        <path fill="currentColor" d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z"/>
                                    </svg>
                                    <span class="ml-2">Google</span>
                                </button>
                                <button type="button" class="w-full inline-flex justify-center py-2 px-4 border border-white/20 rounded-lg bg-white/10 text-sm font-medium text-white hover:bg-white/20 transition-all">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                                    </svg>
                                    <span class="ml-2">Facebook</span>
                                </button>
                            </div>
                        </form>
                        <!-- Sign Up Link -->
                        <div class="text-center mt-6">
                            <p class="text-white/80">
                                Don't have an account? 
                                <a href="sign-up.php" class="font-medium text-white hover:text-white/80 transition-colors">Sign up here</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script>
            function togglePassword() {
                const passwordInput = document.getElementById('password');
                const eyeIcon = document.getElementById('eye-icon');
                if (passwordInput.type === 'password') {
                    passwordInput.type = 'text';
                    eyeIcon.innerHTML = `
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.878 9.878L3 3m6.878 6.878L21 21"></path>
                    `;
                } else {
                    passwordInput.type = 'password';
                    eyeIcon.innerHTML = `
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                    `;
                }
            }

            // Login Logic
            document.getElementById('sign_in_form').addEventListener('submit', async function (event) {
                event.preventDefault();

                const email = document.getElementById('email').value.trim();
                const password = document.getElementById('password').value.trim();
                const apiUrl = '<?php echo $baseUrl; ?>/api/login';

                try {
                    const response = await fetch(apiUrl, {
                        method: 'POST',
                        headers: { 'Content-Type': 'application/json' },
                        body: JSON.stringify({ email, password })
                    });

                    const result = await response.json();

                    if (result.success) {
                        const token = result.token;
                        const user = result.user;

                        localStorage.setItem('auth_token', token);
                        localStorage.setItem('user_id', user.id);
                        localStorage.setItem('user_email', user.email);
                        localStorage.setItem('user_name', user.name);
                        localStorage.setItem('user_role', user.role);

                        if (user.role === 'admin') {
                            window.location.href = 'admin/index.php';
                        } else if (user.role === 'customer') {
                            window.location.href = 'home.php';
                        } else {
                            alert("Invalid role. Redirecting to login.");
                            window.location.href = 'sign-in.php';
                        }
                    } else {
                        alert(result.message || 'Login failed. Please try again.');
                    }
                } catch (error) {
                    console.error('Login Error:', error);
                    alert('An error occurred. Please try again later.');
                }
            });
        </script>

    </body>
</html>