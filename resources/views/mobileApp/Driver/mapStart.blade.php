<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Driving Map</title>
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

        /* Placeholder for the map */
        .map-placeholder {
            background-color: #f0f0f0;
            height: 400px;
            width: 100%;
            border-radius: 20px;
            position: relative;
            overflow: hidden;
        }

        /* Style for the markers (e.g., green, yellow, blue) */
        .map-marker {
            position: absolute;
            width: 20px;
            height: 20px;
            border-radius: 50%;
            background-color: #00aaff;
        }
    </style>
</head>
<body class="bg-gray-100 h-screen flex flex-col items-center justify-start p-4 relative">

    <!-- Mobile and Tablet Only Content -->
    <div class="mobile-tablet-only w-full max-w-lg mx-auto">

        <!-- Back button -->
      <div class="flex items-center justify-between mb-4">
      <div class="flex items-center"> <svg class="w-6 h-6 text-gray-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7"></path></svg>
            <a href="#" class="ml-2 text-lg font-semibold text-gray-500">Previous</a> </div>
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

        <!-- Map Placeholder -->
        <div class="map-placeholder mb-6">
            <!-- Map would go here, leaving this as a placeholder -->
            <div class="absolute inset-0">
                <!-- Placeholder for the actual map -->
                <p class="text-gray-400 text-center mt-32">Map Placeholder</p>
            </div>
        </div>

        <!-- Route Information -->
        <div class="bg-white rounded-lg p-4 shadow-md">
            <div class="flex items-start justify-between">
                <!-- Start and End Locations -->
                <div>
                    <div class="flex items-center mb-4">
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
                <div class="text-right">
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

        <!-- Start Driving Button -->
        <div class="mt-8">
          <a href="/end-live"> <button class="w-full bg-gray-700 text-white text-lg font-semibold py-3 rounded-lg hover:bg-red-600 transition duration-200">
                Start Driving
            </button></a>
        </div>
    </div>

    <!-- Not Accessible Message for Desktop -->
    <div class="not-accessible hidden text-center">
        <h1 class="text-3xl font-bold text-red-600">This website is not accessible on desktop. Please use a mobile or tablet device.</h1>
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
