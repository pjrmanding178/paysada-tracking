<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verify Email</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        /* Hide content for desktop screens larger than 1024px */
        @media (min-width: 1025px) {
            .mobile-tablet-only {
                display: none;
            }
            .not-accessible {
                display: block;
            }
        }

        /* Show content for mobile and tablets (up to 1024px) */
        @media (max-width: 1024px) {
            .not-accessible {
                display: none;
            }
        }

    </style>
</head>
<body class="bg-gray-100 h-screen flex flex-col items-center justify-start p-4 relative">

    <!-- Mobile and Tablet Only Content -->
    <div class="mobile-tablet-only w-full max-w-lg mx-auto">

        <!-- Back button -->
        <div class="flex items-center mb-4">
            <svg class="w-6 h-6 text-gray-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7"></path></svg>
            <a href="#" class="ml-2 text-lg font-semibold text-gray-500">Previous</a>
        </div>

        <!-- Page Title -->
        <h1 class="text-3xl font-bold mt-12 mb-4">Check your email!</h1>

        <!-- Instructions -->
        <p class="text-lg text-gray-500 mb-6">Please enter the 6-digits verification code that was sent. The code is valid for 30 minutes.</p>

        <!-- Verification Code Input -->
        <form>
            <div class="mb-6">
                <label class="block text-left text-gray-700 font-semibold mb-2" for="verification-code">Verification code</label>
                <input id="verification-code" type="text" placeholder="Please enter your verification code" class="w-full px-4 py-3 rounded-lg border focus:outline-none focus:ring-2 focus:ring-purple-500">
            </div>

            <!-- Verify Code Button -->
            <div class="mt-4">
                <button type="submit" class="w-full bg-gray-700 text-white text-lg font-semibold py-3 rounded-lg hover:bg-red-600 transition duration-200">
                    Verify Code
                </button>
            </div>
        </form>
    </div>

    <!-- Not Accessible Message for Desktop -->
    <div class="not-accessible hidden text-center">
        <h1 class="text-3xl font-bold text-red-600">This website is not accessible on desktop. Please use a mobile or tablet device.</h1>
    </div>

</body>
</html>
