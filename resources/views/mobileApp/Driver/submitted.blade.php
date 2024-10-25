<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submission Confirmation</title>
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

        /* Make sure Previous button is close to the left edge */
        .back-button {
            position: absolute;
            left: 10px;
            top: 8px;
        }

    </style>
</head>
<body class="bg-gray-100 h-screen flex items-start justify-center relative">

    <!-- Mobile and Tablet Only Content -->
    <div class="mobile-tablet-only text-center w-full max-w-md mx-auto p-6">
        <!-- Back button -->
        <div class="back-button">
            <a href="#" class="flex items-center space-x-2 text-lg font-semibold text-purple-700">
                <svg class="w-6 h-6 text-gray-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7"></path></svg>
                <span class="text-gray-500">Previous</span>
            </a>
        </div>
<div class="mt-12 text-center w-full max-w-md mx-auto p-6 content-wrapper bg-white rounded-lg shadow-md">
        <!-- Page Title -->
        <h1 class="text-3xl font-bold mt-12 mb-4">Submitted!</h1>

        <!-- Subtitle -->
        <p class="text-lg text-gray-500 mb-10">You can now log in your driver's account, stay safe and enjoy your ride!</p>

        <!-- Confirm Button -->
        <div class="mt-4">
            <button type="submit" class="w-full bg-gray-700 text-white text-lg font-semibold py-3 rounded-lg hover:bg-red-600 transition duration-200">
                Confirm
            </button>
        </div>
    </div>
    </div>
    <!-- Not Accessible Message for Desktop -->
    <div class="not-accessible hidden text-center">
        <h1 class="text-3xl font-bold text-red-600">This website is not accessible on desktop. Please use a mobile or tablet device.</h1>
    </div>

</body>
</html>
