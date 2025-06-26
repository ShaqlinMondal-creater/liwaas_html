<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Pay with Razorpay</title>
    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

    <script>
        const RAZORPAY_KEY = "rzp_test_8WG68Pg2DZy2bj";  // ✅ Your test Razorpay key
        const AMOUNT = 164800; // in paise (₹500)
        const USER_ID = 7;    // ✅ Your Laravel user_id (pass from backend in production)
        const ORDER_ID = 42;  // ✅ Your Laravel order table ID
    </script>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">

<div class="bg-white p-8 rounded-lg shadow-md w-full max-w-md">
    <h2 class="text-2xl font-bold mb-4 text-center">Complete Your Payment</h2>
    <p class="text-center text-gray-600 mb-6">You're paying <span class="font-semibold">₹500</span></p>

    <!-- Razorpay Order ID -->
    <label for="razorpay_order_id" class="block text-gray-700 font-medium mb-2">Enter Razorpay Order ID:</label>
    <input type="text" id="razorpay_order_id" placeholder="e.g. order_LZ9FejXq2l2abc"
           class="w-full border border-gray-300 rounded-md px-4 py-2 mb-4 focus:outline-none focus:ring-2 focus:ring-indigo-500">

    <button id="pay-btn"
            class="w-full bg-indigo-600 text-white py-3 rounded-lg font-semibold hover:bg-indigo-700 transition">
        Pay Now
    </button>
</div>

<script>
    document.getElementById('pay-btn').onclick = function () {
        const razorpayOrderId = document.getElementById('razorpay_order_id').value.trim();

        if (!razorpayOrderId) {
            alert("Please enter a valid Razorpay Order ID.");
            return;
        }

        const options = {
            "key": RAZORPAY_KEY,
            "amount": AMOUNT,
            "currency": "INR",
            "name": "Your Company",
            "description": "Test Payment",
            "order_id": razorpayOrderId,
            "handler": function (response) {
                // ✅ Send payment info to backend for verification & storage
                fetch("http://localhost:8000/api/customer/payments/verify", {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json'
                    },
                    body: JSON.stringify({
                        razorpay_payment_id: response.razorpay_payment_id,
                        razorpay_order_id: response.razorpay_order_id,
                        razorpay_signature: response.razorpay_signature,
                        user_id: USER_ID,
                        order_id: ORDER_ID,
                        amount: AMOUNT / 100 // convert to ₹
                    })
                })
                    .then(res => res.json())
                    .then(data => {
                        if (data.success) {
                            alert("✅ Payment successful and recorded!");
                        } else {
                            alert("❌ Failed to save payment: " + data.message);
                        }
                    })
                    .catch(err => {
                        console.error(err);
                        alert("❌ Error sending payment data to server.");
                    });
            },
            "theme": {
                "color": "#4f46e5"
            }
        };

        const rzp = new Razorpay(options);
        rzp.open();
    };
</script>

</body>
</html>
