<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/phonesize.css')}}">
    <title>Sign In</title>
    <script src="https://cdn.tailwindcss.com"></script>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 h-screen flex items-center justify-center px-4">
<div class="back-button">
            <a href="#" class="flex items-center space-x-2 text-lg font-semibold text-gray-500 absolute left-3 top-5">
                <svg class="w-6 h-6 text-gray-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7"></path></svg>
                <span class="text-gray-500">Previous</span>
            </a>
        </div>
     <!-- Mobile and Tablet Only Content -->
     <div class="mobile-tablet-only text-center w-full max-w-screen-lg p-4 content-wrapper h-screen flex items-center justify-center">
     
     <!-- Sign In Form -->
    <div class="bg-white p-8 rounded-lg shadow-md w-full max-w-sm md:max-w-md lg:max-w-lg">
   
        <!-- Sign In Heading -->
        <h1 class="text-3xl font-bold text-center mb-6">Sign In</h1>
        
        <!-- Form Fields -->
        <form action="/user" method="POST">
            @csrf
            <!-- Email Field -->
            <div class="mb-4">
                <label class="block text-left text-gray-700 font-semibold mb-2" for="email">Email</label>
                <input required id="email" type="email" placeholder="Enter your email" class="w-full px-4 py-3 rounded-lg border focus:outline-none focus:ring-2 focus:ring-purple-500">
            </div>

            <!-- Password Field -->
            <div class="mb-6">
                <label class="block text-left text-gray-700 font-semibold mb-2" for="password">Password</label>
                <input required id="password" type="password" placeholder="Enter your password" class="w-full px-4 py-3 rounded-lg border focus:outline-none focus:ring-2 focus:ring-purple-500">
            </div>

            <!-- Sign In Button -->
            <div class="mb-6">
            <button type="submit" class="w-full bg-gray-700 text-white text-lg font-semibold py-3 rounded-lg hover:bg-red-600 transition duration-200">  
                    Sign In
                </button>
            </div>

            <!-- Sign Up Link -->
            <p class="text-center text-gray-500">Don't have an account yet? <a href="{{route('register')}}" class="text-blue-600 underline">Sign Up.</a></p>
        </form> 
    </div>

</body>
</html>
