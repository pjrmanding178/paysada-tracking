<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    @vite('resources/css/app.css')
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
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
            top: 8px; /* Keep it tight to the top */
        }

        /* Adjust the layout */
        .content-wrapper {
            margin-top: 1rem; /* Smaller margin at the top */
            padding-bottom: 0rem; /* Completely remove padding at the bottom */
        }

        /* Remove excessive bottom margin on the button container */
        .buttons-container {
            margin-top: 0.75rem; /* Reduced top margin */
            margin-bottom: 0rem; /* Remove bottom margin */
        }

        /* Adjust bottom margin for final button */
        .sign-up-button {
            margin-bottom: 0rem; /* Remove bottom margin */
        }
    </style>
</head>
<body class="bg-gray-100 h-screen flex items-start justify-center relative">

    <!-- Mobile and Tablet Only Content -->
    <div class="mobile-tablet-only text-center w-full max-w-md p-4 content-wrapper">
        <!-- Back button -->
        <div class="back-button">
            <a href="#" class="flex items-center space-x-2 text-lg font-semibold text-purple-700">
                <svg class="w-6 h-6 text-gray-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7"></path></svg>
                <span>Previous</span>
            </a>
        </div>

        <!-- Sign Up title -->
        <h1 class="text-3xl font-bold mb-10">Sign Up</h1>

        <!-- Buttons for User and Driver -->
        <div class="space-y-4 buttons-container">
            <a href="{{route('signin.user')}}"><button class="w-full bg-blue-900 text-white text-xl font-semibold py-20 rounded-lg hover:bg-blue-800 transition duration-200">
                User<br>
                <span class="text-sm font-normal">Sign Up as a User</span>
            </button></a>
           <a href="{{route('driver.login')}}"> <button class="w-full bg-blue-900 text-white text-xl font-semibold py-20 rounded-lg hover:bg-blue-800 transition duration-200 mt-5">
                Driver<br>
                <span class="text-sm font-normal">Sign Up as a Driver</span>
            </button></a>
        </div>

    </div>

    <!-- Not Accessible Message for Desktop -->
    <div class="not-accessible hidden text-center">
        <h1 class="text-3xl font-bold text-red-600">This website is not accessible on desktop. Please use a mobile or tablet device.</h1>
    </div>

</body>
</html>
