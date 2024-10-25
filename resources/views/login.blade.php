<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/phonesize.css')}}">
    <title>Sign In</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 h-screen flex items-center justify-center px-4">
     <!-- Mobile and Tablet Only Content -->
     <div class="mobile-tablet-only text-center w-full max-w-screen-lg p-4 content-wrapper">
    <!-- Sign In Form -->
     
    <div class="bg-white p-8 rounded-lg shadow-md w-full max-w-sm md:max-w-md lg:max-w-lg">
        <!-- Sign In Heading -->
        <h1 class="text-3xl font-bold text-center mb-6">Sign In</h1>
        
        <!-- Form Fields -->
        <form action="{{ route('login.post') }}" method="POST">
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
             <a href="user.html">  <button type="submit" class="w-full bg-blue-900 text-white text-lg font-semibold py-3 rounded-lg hover:bg-blue-800 transition duration-200">
                    Sign In
                </button></a>
            </div>

            <!-- Sign Up Link -->
            <p class="text-center text-gray-500">Don't have an account yet? <a href="signUpUser.html" class="text-blue-600 underline">Sign Up.</a></p>
        </form> 
    </div>

</body>
</html>
