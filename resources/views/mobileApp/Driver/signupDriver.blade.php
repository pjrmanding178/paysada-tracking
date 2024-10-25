<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Driver's Account</title>
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

        /* Adjust layout */
        .content-wrapper {
            margin: 1rem 1rem 1.5rem 1rem; /* Margin for top, left, right, and bottom */
        }
    </style>
</head>
<body class="bg-gray-100 h-screen flex items-start justify-center relative">

    <!-- Mobile and Tablet Only Content -->
    <div class="mobile-tablet-only text-center w-full max-w-md">
        <!-- Back button -->
        <div class="back-button mb-10">
            <a href="#" class="flex items-center space-x-2 text-lg font-semibold text-purple-700">
                <svg class="w-6 h-6 text-gray-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7"></path></svg>
                <span class="text-gray-500 ">Previous</span>
            </a>
        </div>
<div class="p-6 content-wrapper bg-white rounded-lg shadow-md mt-20">
        <!-- Page Title -->
        <h1 class="text-2xl font-bold mt-8 mb-6">Create Driver’s Account</h1>

        <!-- Form Section -->
        <form>
            <!-- Full Name Field -->
            <div class="mb-4">
                <label class="block text-left text-gray-700 font-semibold mb-2" for="full-name">Full Name</label>
                <input id="full-name" type="text" placeholder="Enter your Full Name" class="w-full px-4 py-3 rounded-lg border focus:outline-none focus:ring-2 focus:ring-purple-500">
            </div>

            <!-- Email Field -->
            <div class="mb-4">
                <label class="block text-left text-gray-700 font-semibold mb-2" for="email">Email</label>
                <input id="email" type="email" placeholder="Enter your email" class="w-full px-4 py-3 rounded-lg border focus:outline-none focus:ring-2 focus:ring-purple-500">
            </div>

            <!-- Password Field -->
            <div class="mb-4">
                <label class="block text-left text-gray-700 font-semibold mb-2" for="password">Create Password</label>
                <input id="password" type="password" placeholder="Create password" class="w-full px-4 py-3 rounded-lg border focus:outline-none focus:ring-2 focus:ring-purple-500">
            </div>

            <!-- Re-enter Password Field -->
            <div class="mb-4">
                <label class="block text-left text-gray-700 font-semibold mb-2" for="re-password">Re-enter Password</label>
                <input id="re-password" type="password" placeholder="Re-enter your password" class="w-full px-4 py-3 rounded-lg border focus:outline-none focus:ring-2 focus:ring-purple-500">
            </div>

            <!-- Terms and Conditions Checkbox -->
            <div class="flex items-center mb-6">
                <input id="terms" type="checkbox" class="h-4 w-4 text-purple-600 focus:ring-purple-500 border-gray-300 rounded">
                <label for="terms" class="ml-2 text-gray-700 text-sm">Agree to the <a href="#" class="text-blue-600 underline">Terms and Conditions</a></label>
            </div>

            <!-- Sign Up Button -->
            <div class="mt-4">
                <button type="submit" class="w-full bg-blue-900 text-white text-lg font-semibold py-3 rounded-lg hover:bg-blue-800 transition duration-200">
                    Sign Up
                </button>
            </div>
        </form>
    </div>

    <!-- Not Accessible Message for Desktop -->
    <div class="not-accessible hidden text-center">
        <h1 class="text-3xl font-bold text-red-600">This website is not accessible on desktop. Please use a mobile or tablet device.</h1>
    </div>
    </div>
</body>
</html>
