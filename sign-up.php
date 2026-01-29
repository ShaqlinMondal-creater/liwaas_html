<!DOCTYPE html>
<html lang="en">
    <?php
        $config = include('admin/configs/config.php');
        $baseUrl = $config['API_BASE_URL'];
    ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up - Liwaas Crafted for You</title>
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
        .strength-meter {
            height: 4px;
            border-radius: 2px;
            transition: all 0.3s ease;
        }
    </style>
</head>
<body class="relative min-h-screen flex items-center justify-center bg-cover bg-center" style="background-image: url('assets/brand/liwaas_logo_Black.jpg');">
    <!-- Background Blur Overlay -->
    <div class="absolute inset-0 bg-black/50 backdrop-blur-sm z-0"></div>

    <!-- Main Content -->
    <div class="relative z-10 min-h-screen flex items-center justify-center px-6 lg:px-16">
        <div class="w-full max-w-6xl grid grid-cols-1 lg:grid-cols-10 gap-10 items-center">
            <!-- ================= LEFT SECTION (WIDE) ================= -->
            <div class="lg:col-span-5 flex flex-col justify-center text-center lg:text-left space-y-6 px-4 lg:pr-12">
                <div class="mx-auto lg:mx-0 h-24 w-24 rounded-full overflow-hidden shadow-lg border-2 border-white/40">
                    <img src="assets/brand/li.jpg" alt="Liwaas Logo" class="w-full h-full object-cover" />
                </div>

                <h2 class="text-4xl lg:text-5xl font-bold text-white">
                    Create Account
                </h2>

                <p class="text-lg text-white/80 max-w-md mx-auto lg:mx-0">
                    Join Liwaas and start your fashion journey
                </p>
            </div>

            <div class="hidden lg:block absolute left-[60%] top-1/2 -translate-y-1/2 h-2/3 w-px bg-white/10"></div>
            
            <!-- Sign Up Form -->
            <!-- ================= RIGHT SECTION (SMALL) ================= -->
            <div class="lg:col-span-5 flex flex-col justify-center text-center lg:text-left space-y-6 px-4 lg:pr-12 mt-2 mb-1">
                <div class="glass-effect rounded-2xl p-8 shadow-2xl">
                    <form class="space-y-3 text-left" action="#" method="POST" id="signupForm">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label for="firstName" class="block text-sm font-medium text-white mb-1">First Name</label>
                                <input id="firstName" name="firstName" type="text" required 
                                    class="w-full px-4 py-3 bg-white/10 border border-white/20 rounded-lg text-white placeholder-white/60 focus:outline-none focus:ring-2 focus:ring-white/50 focus:border-transparent transition-all"
                                    placeholder="John">
                            </div>
                            <div>
                                <label for="lastName" class="block text-sm font-medium text-white mb-1">Last Name</label>
                                <input id="lastName" name="lastName" type="text" required 
                                    class="w-full px-4 py-3 bg-white/10 border border-white/20 rounded-lg text-white placeholder-white/60 focus:outline-none focus:ring-2 focus:ring-white/50 focus:border-transparent transition-all"
                                    placeholder="Doe">
                            </div>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <!-- Email -->
                            <div>
                                <label for="email" class="block text-sm font-medium text-white mb-1">Email Address</label>
                                <input id="email" name="email" type="email" required
                                    class="w-full px-4 py-3 bg-white/10 border border-white/20 rounded-lg text-white"
                                    placeholder="john@example.com">
                                <div id="emailError" class="text-red-300 text-sm mt-1 hidden">
                                    Please enter a valid email address
                                </div>
                            </div>

                            <!-- Phone -->
                            <div>
                                <label for="phone" class="block text-sm font-medium text-white mb-1">Phone Number</label>
                                <input id="phone" name="phone" type="tel" required 
                                    class="w-full px-4 py-3 bg-white/10 border border-white/20 rounded-lg text-white placeholder-white/60 focus:outline-none focus:ring-2 focus:ring-white/50 focus:border-transparent transition-all"
                                    placeholder="+91 98765 43210"
                                    maxlength="11"
                                    oninput="validateIndianMobile()">
                                <div id="phoneError" class="text-red-300 text-sm mt-1 hidden">
                                    Please enter a valid Indian mobile number (10 digits starting with 6-9)
                                </div>
                            </div>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label for="password" class="block text-sm font-medium text-white mb-1">Password</label>
                                <div class="relative">
                                    <input id="password" name="password" type="password" required 
                                        class="w-full px-4 py-3 bg-white/10 border border-white/20 rounded-lg text-white placeholder-white/60 focus:outline-none focus:ring-2 focus:ring-white/50 focus:border-transparent transition-all pr-12"
                                        placeholder="Create a strong password"
                                        oninput="checkPasswordStrength()">
                                    <button type="button" class="absolute inset-y-0 right-0 pr-3 flex items-center" onclick="togglePassword('password')">
                                        <svg id="password-eye-icon" class="h-5 w-5 text-white/60 hover:text-white transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                        </svg>
                                    </button>
                                </div>
                                <!-- Password Strength Meter -->
                                <div class="mt-2">
                                    <div class="flex space-x-1">
                                        <div id="strength-1" class="strength-meter flex-1 bg-white/20"></div>
                                        <div id="strength-2" class="strength-meter flex-1 bg-white/20"></div>
                                        <div id="strength-3" class="strength-meter flex-1 bg-white/20"></div>
                                        <div id="strength-4" class="strength-meter flex-1 bg-white/20"></div>
                                    </div>
                                    <p id="strength-text" class="text-xs text-white/60 mt-1">Password strength</p>
                                </div>
                            </div>
                            <div>
                                <label for="confirmPassword" class="block text-sm font-medium text-white mb-1">Confirm Password</label>
                                <div class="relative">
                                    <input id="confirmPassword" name="confirmPassword" type="password" required 
                                        class="w-full px-4 py-3 bg-white/10 border border-white/20 rounded-lg text-white placeholder-white/60 focus:outline-none focus:ring-2 focus:ring-white/50 focus:border-transparent transition-all pr-12"
                                        placeholder="Confirm your password"
                                        oninput="checkPasswordMatch()">
                                    <button type="button" class="absolute inset-y-0 right-0 pr-3 flex items-center" onclick="togglePassword('confirmPassword')">
                                        <svg id="confirm-eye-icon" class="h-5 w-5 text-white/60 hover:text-white transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                        </svg>
                                    </button>
                                </div>
                                <div id="passwordMatch" class="text-sm mt-1 hidden">
                                    <span id="matchText"></span>
                                </div>
                            </div>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-1 gap-4">
                            <div>
                                <label for="address" class="block text-sm font-medium text-white mb-1">Address <span class="text-white/60">(Optional)</span></label>
                                <textarea id="address" name="address" rows="1"
                                        class="w-full px-4 py-3 bg-white/10 border border-white/20 rounded-lg text-white placeholder-white/60 focus:outline-none focus:ring-2 focus:ring-white/50 focus:border-transparent transition-all resize-none"
                                        placeholder="Enter your complete address"></textarea>
                            </div>
                        </div>

                        <div class="flex items-center">
                            <input id="terms" name="terms" type="checkbox" required
                                class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-white/20 rounded bg-white/10">
                            <label for="terms" class="ml-2 block text-sm text-white/80">
                                I agree to the <a href="pages/terms.php" class="text-white hover:text-white/80 underline">Terms and Conditions</a> 
                                and <a href="pages/privacy.php" class="text-white hover:text-white/80 underline">Privacy Policy</a>
                            </label>
                        </div>

                        <div class="flex items-center">
                            <input id="newsletter" name="newsletter" type="checkbox"
                                class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-white/20 rounded bg-white/10">
                            <label for="newsletter" class="ml-2 block text-sm text-white/80">
                                Subscribe to our newsletter for updates and exclusive offers
                            </label>
                        </div>

                        <div>
                            <button type="submit" 
                                    class="group relative w-full flex justify-center py-3 px-4 border border-transparent text-sm font-medium rounded-lg text-indigo-600 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 transition-all duration-300 transform hover:scale-105">
                                <span class="absolute left-0 inset-y-0 flex items-center pl-3">
                                    <svg class="h-5 w-5 text-indigo-500 group-hover:text-indigo-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z"></path>
                                    </svg>
                                </span>
                                Create Account
                            </button>
                        </div>

                        <!-- Divider -->
                        <div class="relative">
                            <div class="absolute inset-0 flex items-center">
                                <div class="w-full border-t border-white/20"></div>
                            </div>
                            <div class="relative flex justify-center text-sm">
                                <span class="px-2 bg-transparent text-white/60">Or sign up with</span>
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

                    <!-- Sign In Link -->
                    <div class="text-center mt-6">
                        <p class="text-white/80">
                            Already have an account? 
                            <a href="sign-in.php" class="font-medium text-white hover:text-white/80 transition-colors">Sign in here</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function togglePassword(fieldId) {
            const passwordInput = document.getElementById(fieldId);
            const eyeIcon = document.getElementById(fieldId === 'password' ? 'password-eye-icon' : 'confirm-eye-icon');
            
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

        function checkPasswordStrength() {
            const password = document.getElementById('password').value;
            const strengthBars = [
                document.getElementById('strength-1'),
                document.getElementById('strength-2'),
                document.getElementById('strength-3'),
                document.getElementById('strength-4')
            ];
            const strengthText = document.getElementById('strength-text');

            // Reset all bars
            strengthBars.forEach(bar => {
                bar.className = 'strength-meter flex-1 bg-white/20';
            });

            if (password.length === 0) {
                strengthText.textContent = 'Password strength';
                return;
            }

            let strength = 0;
            
            // Check password criteria
            if (password.length >= 8) strength++;
            if (/[a-z]/.test(password)) strength++;
            if (/[A-Z]/.test(password)) strength++;
            if (/[0-9]/.test(password)) strength++;
            if (/[^A-Za-z0-9]/.test(password)) strength++;

            // Update strength bars and text
            const colors = ['bg-red-500', 'bg-orange-500', 'bg-yellow-500', 'bg-green-500'];
            const texts = ['Very Weak', 'Weak', 'Fair', 'Good', 'Strong'];

            for (let i = 0; i < Math.min(strength, 4); i++) {
                strengthBars[i].className = `strength-meter flex-1 ${colors[Math.min(strength - 1, 3)]}`;
            }

            strengthText.textContent = texts[Math.min(strength, 4)];
            strengthText.className = `text-xs mt-1 ${strength < 2 ? 'text-red-300' : strength < 4 ? 'text-yellow-300' : 'text-green-300'}`;
        }

        function checkPasswordMatch() {
            const password = document.getElementById('password').value;
            const confirmPassword = document.getElementById('confirmPassword').value;
            const matchDiv = document.getElementById('passwordMatch');
            const matchText = document.getElementById('matchText');

            if (confirmPassword.length === 0) {
                matchDiv.classList.add('hidden');
                return;
            }

            matchDiv.classList.remove('hidden');

            if (password === confirmPassword) {
                matchText.textContent = '✓ Passwords match';
                matchText.className = 'text-green-300';
            } else {
                matchText.textContent = '✗ Passwords do not match';
                matchText.className = 'text-red-300';
            }
        }
        
        // Format phone number on input
        document.getElementById('phone').addEventListener('input', function(e) {
            let value = e.target.value.replace(/\D/g, ''); // Only digits

            // Limit to 10 digits
            if (value.length > 10) value = value.slice(0, 10);

            // Add space after 5 digits
            if (value.length > 5) value = value.slice(0, 5) + ' ' + value.slice(5);

            e.target.value = value;
            validateIndianMobile();
        });

        // Validate Indian mobile format
        function validateIndianMobile() {
            const phone = document.getElementById('phone').value.replace(/\D/g, '');
            const phoneError = document.getElementById('phoneError');
            const phoneInput = document.getElementById('phone');

            const valid = /^[6-9]\d{9}$/.test(phone);

            if (!valid) {
                phoneError.classList.remove('hidden');
                phoneInput.classList.add('border-red-500');
            } else {
                phoneError.classList.add('hidden');
                phoneInput.classList.remove('border-red-500');
            }
        }

        // Email validation
        document.getElementById('email').addEventListener('blur', function() {
            const email = this.value;
            const emailError = document.getElementById('emailError');
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

            if (email && !emailRegex.test(email)) {
                emailError.classList.remove('hidden');
                this.classList.add('border-red-500');
            } else {
                emailError.classList.add('hidden');
                this.classList.remove('border-red-500');
            }
        });

        // Form submission
        document.getElementById('signupForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            const formData = new FormData(this);
            const password = formData.get('password');
            const confirmPassword = formData.get('confirmPassword');
            const phone = formData.get('phone').replace(/\D/g, ''); // Clean phone number
            const terms = formData.get('terms');

            // Indian mobile validation
            const indianMobileRegex = /^[6-9]\d{9}$/;
            if (!indianMobileRegex.test(phone)) {
                alert('Please enter a valid Indian mobile number (10 digits starting with 6-9)');
                return;
            }

            // Validation
            if (password !== confirmPassword) {
                alert('Passwords do not match');
                return;
            }

            if (!terms) {
                alert('Please accept the terms and conditions');
                return;
            }

            if (password.length < 8) {
                alert('Password must be at least 8 characters long');
                return;
            }

            // Add your registration logic here
            console.log('Registration attempt:', Object.fromEntries(formData));
            alert('Registration functionality would be implemented here');
        });
    </script>
    <script>
        async function registerUser(formData) {
            const apiUrl = '<?php echo $baseUrl; ?>/api/register';

            const body = {
                name: formData.get('firstName') + ' ' + formData.get('lastName'),
                email: formData.get('email'),
                mobile: formData.get('phone').replace(/\D/g, ''),
                password: formData.get('password'),
                address_line_1: formData.get('address'),
                role: "customer",
                is_active: "true"
            };

            try {
                const response = await fetch(apiUrl, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json'
                    },
                    body: JSON.stringify(body)
                });

                const result = await response.json();

                if (result.success) {
                    // Redirect to sign-in or show success
                    alert("Registration successful!");
                    window.location.href = 'sign-in.php';
                } else {
                    alert(result.message || "Registration failed. Please try again.");
                }
            } catch (error) {
                console.error("Registration error:", error);
                alert("An error occurred. Please try again.");
            }
        }

        document.getElementById('signupForm').addEventListener('submit', function (e) {
            e.preventDefault();

            const formData = new FormData(this);
            const password = formData.get('password');
            const confirmPassword = formData.get('confirmPassword');
            const phone = formData.get('phone').replace(/\D/g, '');
            const terms = formData.get('terms');

            const indianMobileRegex = /^[6-9]\d{9}$/;

            // Validations
            if (!indianMobileRegex.test(phone)) {
                alert('Please enter a valid Indian mobile number');
                return;
            }

            if (password !== confirmPassword) {
                alert('Passwords do not match');
                return;
            }

            if (!terms) {
                alert('Please accept the terms and conditions');
                return;
            }

            if (password.length < 8) {
                alert('Password must be at least 8 characters long');
                return;
            }

            registerUser(formData);
        });
    </script>

</body>
</html>