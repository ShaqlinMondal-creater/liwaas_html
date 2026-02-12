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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

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

                            <!-- Attempts + Timer -->
                            <div class="flex justify-between items-center text-sm text-white/80 mt-2">
                                <span id="attemptInfo">Attempts left: 5</span>
                                <span id="otpTimer">07:00</span>
                            </div>

                            <!-- Resend -->
                            <p id="resendOtp"
                            class="text-sm text-white/60 cursor-not-allowed mt-2">
                            Resend OTP (10s)
                            </p>

                        </div>

                        <!-- PASSWORD SECTION (HIDDEN) -->
                        <div id="password-section" class="hidden space-y-4">
                            <div>
                                <label class="block text-sm font-medium text-white mb-1">
                                    New Password
                                </label>

                                <div class="relative">
                                    <input type="password" id="newPassword"
                                        class="w-full px-4 py-3 pr-12 rounded-lg bg-white/10 border border-white/20
                                                text-white focus:outline-none focus:ring-2 focus:ring-white/50">

                                    <button type="button"
                                            class="absolute inset-y-0 right-0 pr-3 flex items-center"
                                            onclick="togglePassword('newPassword', this)">
                                        <svg class="h-5 w-5 text-white/60 hover:text-white transition"
                                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M2.458 12C3.732 7.943 7.523 5 12 5
                                                    c4.478 0 8.268 2.943 9.542 7
                                                    -1.274 4.057-5.064 7-9.542 7
                                                    -4.477 0-8.268-2.943-9.542-7z"/>
                                        </svg>
                                    </button>
                                </div>
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-white mb-1">
                                    Confirm Password
                                </label>

                                <div class="relative">
                                    <input type="password" id="confirmPassword"
                                        class="w-full px-4 py-3 pr-12 rounded-lg bg-white/10 border border-white/20
                                                text-white focus:outline-none focus:ring-2 focus:ring-white/50">

                                    <button type="button"
                                            class="absolute inset-y-0 right-0 pr-3 flex items-center"
                                            onclick="togglePassword('confirmPassword', this)">
                                        <svg class="h-5 w-5 text-white/60 hover:text-white transition"
                                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M2.458 12C3.732 7.943 7.523 5 12 5
                                                    c4.478 0 8.268 2.943 9.542 7
                                                    -1.274 4.057-5.064 7-9.542 7
                                                    -4.477 0-8.268-2.943-9.542-7z"/>
                                        </svg>
                                    </button>
                                </div>
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
const mainBtn = document.getElementById('mainBtn');

let currentStep = 1;
let savedOTP = '';
let attemptsLeft = 5;
let otpInterval;
let resendInterval;

/* ================= BUTTON CONTROL ================= */
function disableBtn() {
    mainBtn.disabled = true;
    mainBtn.classList.add("opacity-60", "cursor-not-allowed");
}

function enableBtn() {
    mainBtn.disabled = false;
    mainBtn.classList.remove("opacity-60", "cursor-not-allowed");
}

/* ================= OTP TIMER (7 MINUTES) ================= */
function startOtpTimer() {

    let timeLeft = 7 * 60;

    clearInterval(otpInterval);

    otpInterval = setInterval(() => {

        let minutes = Math.floor(timeLeft / 60);
        let seconds = timeLeft % 60;

        document.getElementById("otpTimer").textContent =
            `${String(minutes).padStart(2, '0')}:${String(seconds).padStart(2, '0')}`;

        if (timeLeft <= 0) {
            clearInterval(otpInterval);
            document.getElementById("otpTimer").textContent = "Expired";
        }

        timeLeft--;

    }, 1000);
}

/* ================= RESEND COOLDOWN (10 SEC) ================= */
function startResendCooldown() {

    const resendBtn = document.getElementById("resendOtp");

    resendBtn.style.pointerEvents = "none";
    resendBtn.classList.add("cursor-not-allowed");

    let timeLeft = 10;
    resendBtn.textContent = `Resend OTP (${timeLeft}s)`;

    clearInterval(resendInterval);

    resendInterval = setInterval(() => {

        timeLeft--;
        resendBtn.textContent = `Resend OTP (${timeLeft}s)`;

        if (timeLeft <= 0) {
            clearInterval(resendInterval);
            resendBtn.textContent = "Resend OTP";
            resendBtn.style.pointerEvents = "auto";
            resendBtn.classList.remove("cursor-not-allowed");
        }

    }, 1000);
}

/* ================= FORM SUBMIT ================= */
form.addEventListener('submit', async (e) => {
    e.preventDefault();
    disableBtn();

    const email = emailInput.value.trim();

    try {

        /* ===== STEP 1: SEND OTP ===== */
        if (currentStep === 1) {

            const res = await fetch(`${baseUrl}/forgot-password`, {
                method: "POST",
                headers: { "Content-Type": "application/json" },
                body: JSON.stringify({ email })
            });

            const result = await res.json();

            if (result.success) {

                emailInput.setAttribute("readonly", true);
                emailInput.classList.add("opacity-60");

                otpSection.classList.remove('hidden');

                attemptsLeft = 5;
                document.getElementById("attemptInfo").textContent =
                    `Attempts left: ${attemptsLeft}`;

                startOtpTimer();
                startResendCooldown();

                mainBtn.textContent = "Verify OTP";
                currentStep = 2;

                Swal.fire({
                    icon: 'success',
                    title: result.message,
                    timer: 1500,
                    showConfirmButton: false,
                    background: 'rgba(30,30,30,0.95)',
                    color: '#fff'
                });

            } else {
                Swal.fire({
                    icon: 'error',
                    title: result.message,
                    timer: 1800,
                    showConfirmButton: false,
                    background: 'rgba(30,30,30,0.95)',
                    color: '#fff'
                });
            }

            enableBtn();
        }

        /* ===== STEP 2: VERIFY OTP ===== */
        else if (currentStep === 2) {

            const otp = [...document.querySelectorAll('.otp-box')]
                .map(i => i.value).join('');

            if (otp.length !== 6) {
                Swal.fire({
                    icon: 'warning',
                    title: 'Enter complete OTP',
                    timer: 1500,
                    showConfirmButton: false,
                    background: 'rgba(30,30,30,0.95)',
                    color: '#fff'
                });
                enableBtn();
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

                clearInterval(otpInterval);

                passwordSection.classList.remove('hidden');
                mainBtn.textContent = "Reset Password";
                currentStep = 3;

            } else {

                attemptsLeft--;
                document.getElementById("attemptInfo").textContent =
                    `Attempts left: ${attemptsLeft}`;

                if (attemptsLeft <= 0) {
                    Swal.fire({
                        icon: 'error',
                        title: 'Maximum attempts reached',
                        timer: 1800,
                        showConfirmButton: false,
                        background: 'rgba(30,30,30,0.95)',
                        color: '#fff'
                    });

                    mainBtn.disabled = true;
                    return;
                }

                Swal.fire({
                    icon: 'error',
                    title: result.message,
                    timer: 1800,
                    showConfirmButton: false,
                    background: 'rgba(30,30,30,0.95)',
                    color: '#fff'
                });

                document.querySelectorAll('.otp-box').forEach(box => box.value = '');
                document.querySelector('.otp-box').focus();
            }

            enableBtn();
        }

        /* ===== STEP 3: RESET PASSWORD ===== */
        else if (currentStep === 3) {

            const password = document.getElementById('newPassword').value;
            const confirmPassword = document.getElementById('confirmPassword').value;

            if (password !== confirmPassword) {
                Swal.fire({
                    icon: 'error',
                    title: 'Passwords do not match',
                    timer: 1500,
                    showConfirmButton: false,
                    background: 'rgba(30,30,30,0.95)',
                    color: '#fff'
                });
                enableBtn();
                return;
            }

            if (password.length < 6) {
                Swal.fire({
                    icon: 'warning',
                    title: 'Password must be at least 6 characters',
                    timer: 1500,
                    showConfirmButton: false,
                    background: 'rgba(30,30,30,0.95)',
                    color: '#fff'
                });
                enableBtn();
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

                Swal.fire({
                    icon: 'success',
                    title: 'Password reset successful',
                    timer: 2000,
                    showConfirmButton: false,
                    background: 'rgba(30,30,30,0.95)',
                    color: '#fff'
                }).then(() => {
                    window.location.href = "sign-in";
                });

            } else {

                Swal.fire({
                    icon: 'error',
                    title: result.message,
                    timer: 1800,
                    showConfirmButton: false,
                    background: 'rgba(30,30,30,0.95)',
                    color: '#fff'
                });

                enableBtn();
            }
        }

    } catch (error) {

        Swal.fire({
            icon: 'error',
            title: 'Something went wrong',
            timer: 1800,
            showConfirmButton: false,
            background: 'rgba(30,30,30,0.95)',
            color: '#fff'
        });

        enableBtn();
    }
});

/* ================= RESEND CLICK ================= */
document.getElementById("resendOtp").addEventListener("click", async () => {

    if (attemptsLeft <= 0) return;

    const email = emailInput.value.trim();

    const res = await fetch(`${baseUrl}/forgot-password`, {
        method: "POST",
        headers: { "Content-Type": "application/json" },
        body: JSON.stringify({ email })
    });

    const result = await res.json();

    if (result.success) {

        attemptsLeft = 5;
        document.getElementById("attemptInfo").textContent =
            `Attempts left: ${attemptsLeft}`;

        startOtpTimer();
        startResendCooldown();

        Swal.fire({
            icon: 'success',
            title: 'OTP Resent',
            timer: 1500,
            showConfirmButton: false,
            background: 'rgba(30,30,30,0.95)',
            color: '#fff'
        });
    }
});
/* ================= OTP UX ================= */
document.querySelectorAll('.otp-box').forEach((box, index, boxes) => {

    box.addEventListener('input', () => {
        box.value = box.value.replace(/[^0-9]/g, '');

        if (box.value && index < boxes.length - 1) {
            boxes[index + 1].focus();
        }
    });

    box.addEventListener('keydown', (e) => {
        if (e.key === "Backspace" && !box.value && index > 0) {
            boxes[index - 1].focus();
        }
    });

    box.addEventListener('paste', (e) => {
        e.preventDefault();
        const pasteData = e.clipboardData.getData('text').replace(/\D/g, '');

        if (pasteData.length === 6) {
            boxes.forEach((b, i) => {
                b.value = pasteData[i] || '';
            });
        }
    });

});
/* ================= TOGGLE PASSWORD ================= */
function togglePassword(fieldId, btn) {

    const input = document.getElementById(fieldId);

    if (input.type === "password") {
        input.type = "text";
        btn.innerHTML = `
            <svg class="h-5 w-5 text-white"
                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M13.875 18.825A10.05 10.05 0 0112 19
                       c-4.478 0-8.268-2.943-9.542-7
                       a9.956 9.956 0 012.293-3.95M6.223 6.223
                       A9.956 9.956 0 0112 5
                       c4.478 0 8.268 2.943 9.542 7
                       a9.956 9.956 0 01-4.293 5.774M15 12
                       a3 3 0 11-6 0 3 3 0 016 0z"/>
            </svg>
        `;
    } else {
        input.type = "password";
        btn.innerHTML = `
            <svg class="h-5 w-5 text-white/60"
                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M2.458 12C3.732 7.943 7.523 5 12 5
                       c4.478 0 8.268 2.943 9.542 7
                       -1.274 4.057-5.064 7-9.542 7
                       -4.477 0-8.268-2.943-9.542-7z"/>
            </svg>
        `;
    }
}

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
