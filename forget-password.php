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
    <div class="relative z-10 w-full min-h-screen flex items-center justify-center px-0 lg:px-16">
        <div class="w-full max-w-9xl grid grid-cols-1 lg:grid-cols-10 gap-10 items-center">

            <!-- ================= LEFT (60%) ================= -->
            <div class="lg:col-span-5 flex flex-col justify-center space-y-6 text-center lg:text-left px-4 lg:pr-12">
                <div class="mx-auto lg:mx-0 h-24 w-24 rounded-full overflow-hidden border-2 border-white/40 shadow-lg">
                    <img src="assets/brand/li.jpg" class="w-full h-full object-cover" alt="Liwaas">
                </div>

                <h2 class="text-4xl lg:text-5xl font-bold text-white">
                    Forgot Password?
                </h2>

                <p class="text-lg text-left text-white/80 max-w-md mx-auto lg:mx-0">
                    Don’t worry. We’ll help you reset your password securely and get you back to Liwaas.
                </p>
            </div>

            <!-- ================= RIGHT (40%) ================= -->
            <div class="lg:col-span-5 flex flex-col justify-center text-center lg:text-left space-y-6 px-4 lg:pr-12 mt-2 mb-1">
                <div class="glass-effect rounded-2xl p-8 shadow-2xl">

                    <!-- <form id="forgotForm" class="space-y-5">

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

                    </form> -->

                    <form id="forgotForm" class="space-y-5">

                        <!-- EMAIL FIELD -->
                        <div id="email-section">
                            <label class="block text-sm font-medium text-white mb-1">
                                Email Address
                            </label>
                            <input type="email" id="email" required
                                class="w-full px-4 py-3 rounded-lg bg-white/10 border border-white/20
                                        text-white placeholder-white/60 focus:outline-none focus:ring-2
                                        focus:ring-white/50"
                                placeholder="Enter your registered email">
                        </div>

                        <!-- OTP SECTION (HIDDEN) -->
                        <div id="otp-section" class="hidden space-y-4">
                            <label class="block text-sm font-medium text-white">
                                Enter 6 Digit OTP
                            </label>

                            <div class="flex justify-between gap-2">
                                <input maxlength="1" class="otp-box" />
                                <input maxlength="1" class="otp-box" />
                                <input maxlength="1" class="otp-box" />
                                <input maxlength="1" class="otp-box" />
                                <input maxlength="1" class="otp-box" />
                                <input maxlength="1" class="otp-box" />
                            </div>
                        </div>

                        <!-- PASSWORD SECTION (HIDDEN) -->
                        <div id="password-section" class="hidden space-y-4">
                            <div>
                                <label class="block text-sm font-medium text-white mb-1">
                                    New Password
                                </label>
                                <input type="password" id="newPassword"
                                    class="w-full px-4 py-3 rounded-lg bg-white/10 border border-white/20
                                            text-white focus:outline-none focus:ring-2 focus:ring-white/50">
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-white mb-1">
                                    Confirm Password
                                </label>
                                <input type="password" id="confirmPassword"
                                    class="w-full px-4 py-3 rounded-lg bg-white/10 border border-white/20
                                            text-white focus:outline-none focus:ring-2 focus:ring-white/50">
                            </div>
                        </div>

                        <button type="submit"
                                id="mainBtn"
                                class="w-full py-3 rounded-lg bg-white text-indigo-600 font-medium
                                    hover:bg-gray-100 transition transform hover:scale-105">
                            Send OTP
                        </button>
                    </form>
                </div>
            </div>

        </div>
    </div>

    <!-- JS -->
    <script>
        const baseUrl = "<?php echo $baseUrl; ?>/api";

        const form = document.getElementById('forgotForm');
        const emailInput = document.getElementById('email');
        const otpSection = document.getElementById('otp-section');
        const passwordSection = document.getElementById('password-section');
        const emailSection = document.getElementById('email-section');
        const mainBtn = document.getElementById('mainBtn');

        let currentStep = 1;
        let savedOTP = '';

        form.addEventListener('submit', async (e) => {
            e.preventDefault();

            const email = emailInput.value.trim();

            if (currentStep === 1) {
                // SEND OTP
                const res = await fetch(`${baseUrl}/forgot-password`, {
                    method: "POST",
                    headers: { "Content-Type": "application/json" },
                    body: JSON.stringify({ email })
                });

                const result = await res.json();

                if (result.success) {
                    otpSection.classList.remove('hidden');
                    mainBtn.textContent = "Verify OTP";
                    currentStep = 2;
                } else {
                    alert(result.message);
                }
            }

            else if (currentStep === 2) {
                const otp = [...document.querySelectorAll('.otp-box')]
                    .map(i => i.value).join('');

                if (otp.length !== 6) {
                    alert("Enter complete OTP");
                    return;
                }

                const res = await fetch(`${baseUrl}/verify-otp`, {
                    method: "POST",
                    headers: { "Content-Type": "application/json" },
                    body: JSON.stringify({ email, otp })
                });

                const result = await res.json();

                if (result.success) {
                    savedOTP = otp;
                    passwordSection.classList.remove('hidden');
                    mainBtn.textContent = "Reset Password";
                    currentStep = 3;
                } else {
                    alert(result.message);
                }
            }

            else if (currentStep === 3) {
                const password = document.getElementById('newPassword').value;
                const confirmPassword = document.getElementById('confirmPassword').value;

                if (password !== confirmPassword) {
                    alert("Passwords do not match");
                    return;
                }

                const res = await fetch(`${baseUrl}/reset-password`, {
                    method: "POST",
                    headers: { "Content-Type": "application/json" },
                    body: JSON.stringify({
                        email,
                        otp: savedOTP,
                        password,
                        password_confirmation: confirmPassword
                    })
                });

                const result = await res.json();

                if (result.success) {
                    alert("Password reset successful");
                    setTimeout(() => {
                        window.location.href = "sign-in.php";
                    }, 2000);
                } else {
                    alert(result.message);
                }
            }
        });

        // OTP Auto Focus
        document.querySelectorAll('.otp-box').forEach((box, index, boxes) => {
            box.addEventListener('input', () => {
                if (box.value && index < boxes.length - 1) {
                    boxes[index + 1].focus();
                }
            });

            box.addEventListener('keydown', (e) => {
                if (e.key === "Backspace" && !box.value && index > 0) {
                    boxes[index - 1].focus();
                }
            });
        });
    </script>

    <style>
    .otp-box {
        width: 45px;
        height: 50px;
        text-align: center;
        font-size: 20px;
        border-radius: 8px;
        border: 1px solid rgba(255,255,255,0.3);
        background: rgba(255,255,255,0.1);
        color: white;
    }
    </style>

</body>
</html>
