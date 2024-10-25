<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trip Detail</title>
    <link rel="stylesheet" href="{{asset('css/phonesize.css')}}">
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
        /* Placeholder for the map */
        .map-placeholder {
            background-color: #f0f0f0;
            height: 200px;
            width: 100%;
            border-radius: 20px;
            position: relative;
            overflow: hidden;
        }
    </style>
</head>
<body class="bg-gray-100 p-4">
     <!-- Mobile and Tablet Only Content -->
     <div class="mobile-tablet-only text-center w-full max-w-screen-lg p-4 content-wrapper">
    <!-- Header Section -->
    <div class="flex justify-between items-center mb-4">
        <div class="flex items-center">
            <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7"></path></svg>
            <a href="#" class="ml-2 text-lg font-semibold text-gray-500">Trip Detail</a>
        </div>
        <button onclick="toggleSidebar()" id="menuButton" class="focus:outline-none">
                <svg class="w-8 h-8 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"></path></svg>
            </button>
        </div>
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

    <!-- Map Placeholder -->
    <div class="map-placeholder mb-6">
        <!-- Placeholder for the actual map -->
        <p class="text-gray-400 text-center mt-16">Map Placeholder</p>
    </div>

    <!-- Trip Info Section -->
    <div class="bg-white rounded-lg p-4 shadow-md mb-6">
        <div class="flex justify-between">
            <!-- Trip Details -->
            <div>
                <div class="flex items-center mb-2">
                    <div class="w-4 h-4 bg-green-500 rounded-full mr-2"></div>
                    <div>
                        <h3 class="font-bold text-gray-500">AlaminosCity</h3>
                        <p class="text-sm text-gray-500">Feb 12, 15:30</p>
                    </div>
                </div>
                <div class="flex items-center">
                    <div class="w-4 h-4 bg-blue-500 rounded-full mr-2"></div>
                    <div>
                        <h3 class="font-bold text-gray-500">Dasol</h3>
                        <p class="text-sm text-gray-500">Feb 12, 16:16</p>
                    </div>
                </div>
            </div>
            <!-- Travel Time and Price -->
            <div class="text-right mr-5">
                <div class="flex items-center mb-2">
         
                    <div>
                        <p class="text-sm text-gray-500">Travel Time</p>
                        <p class="font-bold text-2xl text-gray-800">46 min</p>
                    </div>
                </div>
                <div class="flex items-center">
                   
                    <div>
                        <p class="text-sm text-gray-500">Price</p>
                        <p class="font-bold text-2xl text-gray-800">15 PHP</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Jeepney Info Section -->
    <div class="bg-white rounded-lg p-4 shadow-md mb-6 flex items-center">
        <img src="https://i.imgur.com/nDyfOjq.png" class="w-28 h-24 object-contain mr-4" alt="Jeepney">
        <div class="flex-1">
            <h3 class="font-bold text-gray-500">Jeepney 1</h3>
            <p class="text-sm text-gray-500">Plate No. AFK123</p>
            <div class="mt-2">
                <div class="flex items-center">
                
                    <div>
                        <p class="text-sm text-gray-500">Real-time price</p>
                        <p class="font-bold text-2xl text-gray-800">10.00 PHP</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- See Full Map Button -->
    <div class="mt-8">
        <button class="w-full bg-blue-900 text-white text-lg font-semibold py-3 rounded-lg hover:bg-blue-800 transition duration-200">
            See Full Map
        </button>
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
