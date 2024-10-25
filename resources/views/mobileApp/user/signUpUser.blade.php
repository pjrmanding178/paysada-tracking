<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/phonesize.css')}}">
    <title>Sign Up</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 h-screen flex items-center justify-center px-4">

<div class="flex items-center mb-4 mt-10 absolute left-3 top-3 ">
            <svg class="w-6 h-6 text-gray-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7"></path></svg>
            <a href="#" class="ml-2 text-lg font-semibold text-gray-500">Previous</a>
        </div>
     <!-- Mobile and Tablet Only Content -->
     <div class="mobile-tablet-only text-center w-full max-w-screen-lg p-4 content-wrapper flex justify-center mt-60">
    
    <!-- Sign Up Form -->
    <div class="bg-white p-8 rounded-lg shadow-md max-w-md w-full">
        <!-- Back Button -->
      

        <!-- Sign Up Heading -->
        <h1 class="text-3xl font-bold text-center mb-6">Sign Up</h1>
        
        <!-- Form Fields -->
        <form action="{{ route('register.post') }}" method="POST">
    @csrf
            <!-- Email Field -->
            <div class="mb-4">
                <label class="block text-left text-gray-700 font-semibold mb-2" for="email">Email</label>
                <input required id="email" type="email" placeholder="Enter your email" class="w-full px-4 py-3 rounded-lg border focus:outline-none focus:ring-2 focus:ring-purple-500">
            </div>

            <!-- Password Field -->
            <div class="mb-4">
                <label class="block text-left text-gray-700 font-semibold mb-2" for="password">Password</label>
                <input  required="password" type="password" placeholder="Enter your password" class="w-full px-4 py-3 rounded-lg border focus:outline-none focus:ring-2 focus:ring-purple-500">
            </div>

            <!-- Confirm Password Field -->
            <div class="mb-4">
                <label class="block text-left text-gray-700 font-semibold mb-2" for="confirm-password">Re - enter password</label>
                <input  required="confirm-password" type="password" placeholder="Re-enter password" class="w-full px-4 py-3 rounded-lg border focus:outline-none focus:ring-2 focus:ring-purple-500">
            </div>

            <!-- Username Field -->
            <div class="mb-4">
                <label class="block text-left text-gray-700 font-semibold mb-2" for="username">Username</label>
                <input required id="username" type="text" placeholder="Enter your username" class="w-full px-4 py-3 rounded-lg border focus:outline-none focus:ring-2 focus:ring-purple-500">
            </div>

            <!-- Terms and Conditions -->
            <div class="mb-6 flex items-center">
                <input required id="terms" type="checkbox" class="w-4 h-4 text-purple-600 border-gray-300 rounded focus:ring-purple-500">
                <label for="terms" class="ml-2 text-sm text-gray-500">Agree to the <a href="#" class="text-blue-600 underline">Terms and Conditions</a>.</label>
            </div>

            <!-- Sign Up Button -->
            <div class="mb-6">
              <a href="signInUser.html">  <button type="submit" class="w-full bg-gray-700 text-white text-lg font-semibold py-3 rounded-lg hover:bg-red-600 transition duration-200">
                    Sign Up
                </button></a>
            </div>
            @if ($errors->has('registration'))
        <p>{{ $errors->first('registration') }}</p>
    @endif
</form>
    </div>

</body>
</html>
