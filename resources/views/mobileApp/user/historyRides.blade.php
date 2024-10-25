<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/phonesize.css')}}">
    <title>Past Rides</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
      #sidebar {
    transition: transform 0.3s ease-in-out, opacity 0.3s ease-in-out;
    transform: translateX(100%);
    opacity: 0;
    display: none;
    z-index: 1000;
    transition: transform 0.5s ease-in-out;
    display: block;
}

#sidebar.show {
    transform: translateX(0);
    opacity: 1;
    
   
}
#closeButton {
    z-index: 1100; 
}
</style>
</head>
<body class="bg-gray-100 p-4">
     <!-- Mobile and Tablet Only Content -->
     <div class="mobile-tablet-only text-center w-full max-w-screen-lg p-4 content-wrapper">
    <!-- Header Section -->
    <div class="flex justify-between items-center mb-4">
        <div class="flex items-center">
            <svg class="w-6 h-6 text-gray-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7"></path></svg>
            <a href="#" class="ml-2 text-lg font-semibold text-gray-500">Past Rides</a>
        </div>
        <button onclick="toggleSidebar()" id="menuButton" class="focus:outline-none">
                <svg class="w-8 h-8 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"></path></svg>
            </button>
            <div id="sidebar" class="fixed top-0 right-0 w-64 h-full bg-white shadow-lg hidden">
    <button onclick="toggleSidebar()" id="closeButton" class="focus:outline-none absolute top-0 right-0 p-2">
        <svg class="w-6 h-6 text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path></svg>
    </button>
    <div class="p-5">
        <h3 class="text-lg font-semibold">Menu</h3>
        <ul class="mt-4">
            <li><a href="/sign-in-user" class="text-red-500">Log Out</a></li>
        </ul>
    </div>
</div>
    </div>

    <!-- Past Rides List -->
    <div class="space-y-4">
        <!-- Ride 1 -->
        <div class="bg-white rounded-lg shadow-md p-4 flex items-center">
            <img src="https://via.placeholder.com/100x100" class="w-24 h-16 rounded-lg object-cover mr-4" alt="Map">
            <div class="flex-1">
                <h3 class="font-bold text-gray-500">Alaminos - Dasol</h3>
                <p class="text-sm text-gray-500">April 9, 2024</p>
                <div class="flex items-center mt-2">
                    <div class="mr-4">
                        <p class="text-gray-500 text-sm">Travel Time</p>
                        <p class="text-lg font-bold text-gray-900">46 min</p>
                    </div>
                    <div>
                        <p class="text-gray-500 text-sm">Price</p>
                        <p class="text-lg font-bold text-gray-900">10 PHP</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Ride 2 -->
        <div class="bg-white rounded-lg shadow-md p-4 flex items-center">
            <img src="https://via.placeholder.com/100x100" class="w-24 h-16 rounded-lg object-cover mr-4" alt="Map">
            <div class="flex-1">
                <h3 class="font-bold text-gray-500">Dasol - Alaminos</h3>
                <p class="text-sm text-gray-500">Feb 14, 08:30</p>
                <div class="flex items-center mt-2">
                    <div class="mr-4">
                        <p class="text-gray-500 text-sm">Travel Time</p>
                        <p class="text-lg font-bold text-gray-900">57 min</p>
                    </div>
                    <div>
                        <p class="text-gray-500 text-sm">Price</p>
                        <p class="text-lg font-bold text-gray-900">15 PHP</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Ride 3 -->
        <div class="bg-white rounded-lg shadow-md p-4 flex items-center">
            <img src="https://via.placeholder.com/100x100" class="w-24 h-16 rounded-lg object-cover mr-4" alt="Map">
            <div class="flex-1">
                <h3 class="font-bold text-gray-500">Alaminos - Dasol</h3>
                <p class="text-sm text-gray-500">Feb 12, 15:30</p>
                <div class="flex items-center mt-2">
                    <div class="mr-4">
                        <p class="text-gray-500 text-sm">Travel Time</p>
                        <p class="text-lg font-bold text-gray-900">46 min</p>
                    </div>
                    <div>
                        <p class="text-gray-500 text-sm">Price</p>
                        <p class="text-lg font-bold text-gray-900">15 PHP</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
function toggleSidebar() {
    const sidebar = document.getElementById('sidebar');
    if (sidebar.classList.contains('show')) {
        sidebar.classList.remove('show');
        setTimeout(() => sidebar.style.display = 'none', 300); // Match the transition time
    } else {
        sidebar.style.display = 'block';
        sidebar.classList.add('show');
    }
}



</script>
</body>
</html>
