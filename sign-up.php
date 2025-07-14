
<!DOCTYPE html>
<html class="h-full" data-theme="true" data-theme-mode="light" dir="ltr" lang="en">

<head>
    <title>Aqeeq Sign-Up</title>
    <meta charset="utf-8" />
    <meta content="follow, index" name="robots" />
    <meta content="admin/assets/media/app/og-image.png" property="og:image" />
    <link href="admin/assets/media/app/apple-touch-icon.png" rel="apple-touch-icon" sizes="180x180" />
    <link href="admin/assets/media/app/favicon-32x32.png" rel="icon" sizes="32x32" type="image/png" />
    <link href="admin/assets/media/app/favicon-16x16.png" rel="icon" sizes="16x16" type="image/png" />
    <link href="admin/assets/media/app/favicon.ico" rel="shortcut icon" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet" />
    <link href="admin/assets/vendors/apexcharts/apexcharts.css" rel="stylesheet" />
    <link href="admin/assets/vendors/keenicons/styles.bundle.css" rel="stylesheet" />
    <link href="admin/assets/css/styles.css" rel="stylesheet" />
</head>

<body class="antialiased flex h-full text-base text-gray-700 dark:bg-coal-500">
    <script>
        const defaultThemeMode = 'light';
        let themeMode;
        if (document.documentElement) {
            if (localStorage.getItem('theme')) {
                themeMode = localStorage.getItem('theme');
            } else if (document.documentElement.hasAttribute('data-theme-mode')) {
                themeMode = document.documentElement.getAttribute('data-theme-mode');
            } else {
                themeMode = defaultThemeMode;
            }
            if (themeMode === 'system') {
                themeMode = window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light';
            }
            document.documentElement.classList.add(themeMode);
        }
    </script>

    <style>
        .branded-bg {
            background-image: url('admin/assets/media/images/2600x1600/1.png');
        }

        .dark .branded-bg {
            background-image: url('admin/assets/media/images/2600x1600/1-dark.png');
        }
    </style>

    <div class="grid lg:grid-cols-2 grow">
        <div class="flex justify-center items-center p-8 lg:p-10 order-2 lg:order-1">
            <div class="card max-w-[380px] w-full">
                <form class="card-body flex flex-col gap-5 p-10" id="sign_up_form" method="post">
                    <div class="text-center mb-2.5">
                        <h3 class="text-lg font-medium text-gray-900 leading-none mb-2.5">Sign up</h3>
                        <div class="flex items-center justify-center">
                            <span class="text-2sm text-gray-700 me-1.5">Already have an Account?</span>
                            <a class="text-2sm link" href="sign-in.php">Sign In</a>
                        </div>
                    </div>

                    <div class="flex flex-col gap-1">
                        <label class="form-label text-gray-900">Full Name</label>
                        <input id="name" name="name" class="input" placeholder="Full Name" type="text" required />
                    </div>

                    <div class="flex flex-col gap-1">
                        <label class="form-label font-normal text-gray-900">Address</label>
                        <input id="address" name="address" class="input" placeholder="Address" type="text" required />
                    </div>
                    
                    <div class="flex flex-col gap-1">
                        <label class="form-label text-gray-900">Email</label>
                        <input id="email" name="email" class="input" placeholder="email@email.com" type="email"
                            required />
                    </div>

                    <div class="flex flex-col gap-1">
                        <label class="form-label text-gray-900">Mobile Number</label>
                        <input id="mobile" name="mobile" class="input" placeholder="1234567890" type="text" required />
                    </div>

                    <div class="flex flex-col gap-1">
                        <label class="form-label font-normal text-gray-900">Password</label>
                        <div class="input" data-toggle-password="true">
                            <input id="password" name="password" placeholder="Enter Password" type="password"
                                required />
                            <button class="btn btn-icon" data-toggle-password-trigger="true" type="button">
                                <i class="ki-filled ki-eye text-gray-500 toggle-password-active:hidden"></i>
                                <i class="ki-filled ki-eye-slash text-gray-500 hidden toggle-password-active:block"></i>
                            </button>
                        </div>
                    </div>

                    <label class="checkbox-group">
                        <input class="checkbox checkbox-sm" name="terms" type="checkbox" required />
                        <span class="checkbox-label">
                            I accept <a class="text-2sm link" href="#">Terms & Conditions</a>
                        </span>
                    </label>

                    <button type="submit" class="btn btn-primary flex justify-center grow">Sign Up</button>
                </form>
            </div>
        </div>

        <div
            class="lg:rounded-xl lg:border lg:border-gray-200 lg:m-5 order-1 lg:order-2 bg-top xxl:bg-center xl:bg-cover bg-no-repeat branded-bg">
            <div class="flex flex-col p-8 lg:p-16 gap-4">
                <a href="html/demo1.html">
                    <img class="h-[28px] max-w-none" src="admin/assets/media/app/mini-logo.svg" />
                </a>
                <div class="flex flex-col gap-3">
                    <h3 class="text-2xl font-semibold text-gray-900">Secure Access Portal</h3>
                    <div class="text-base font-medium text-gray-600">
                        A robust authentication gateway ensuring<br />
                        secure <span class="text-gray-900 font-semibold">efficient user access</span>
                        to the Metronic Dashboard interface.
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Signup Script -->
    <script>
        document.getElementById('sign_up_form').addEventListener('submit', async function (event) {
            event.preventDefault();

            const name = document.getElementById('name').value;
            const email = document.getElementById('email').value;
            const mobile = document.getElementById('mobile').value;
            const password = document.getElementById('password').value;
            const address_line_1 = document.getElementById('address').value;

            const apiUrl = 'http://192.168.0.101:8000/api/register';

            const requestBody = {
                name,
                email,
                mobile,
                password,
                address_line_1,
                role: "customer",
                is_active: "true"
            };

            try {
                const response = await fetch(apiUrl, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json'
                    },
                    body: JSON.stringify(requestBody)
                });

                const result = await response.json();

                if (result.success) {
                    const { id, email, role } = result.data;

                    // Optional: store if needed
                    // localStorage.setItem('user_id', id);
                    // localStorage.setItem('email', email);
                    // localStorage.setItem('role', role);

                    // alert("Registration successful!");
                    window.location.href = 'sign-in.php';
                } else {
                    alert(result.message || 'Registration failed. Please try again.');
                }
            } catch (error) {
                console.error('Error during registration:', error);
                alert('An error occurred. Please try again later.');
            }
        });
    </script>


    <script src="admin/assets/js/core.bundle.js"></script>
    <script src="admin/assets/vendors/apexcharts/apexcharts.min.js"></script>
</body>

</html>