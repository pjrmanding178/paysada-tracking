<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paysada - Jeepney Fare Collection & Tracking Platform</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"/>
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
        /* Custom styles to position the route info box */
        #route-info {
            
            position: absolute;
            bottom: 20px;
            right: 30px; /* Slightly more margin to the right */
            width: 350px; /* Set desired width */
            max-height: 300px; /* Set maximum height to ensure scrolling */
            overflow-y: auto; /* Enables vertical scrolling */
            overflow-x: hidden; /* Prevents horizontal scrolling */
            z-index: 1000;
        }
        #route-info:hover {
    cursor: pointer; /* Changes cursor when hovering */
}

        #map {
            height: calc(100vh - 64px); /* Adjust height to fill the page */
            width: 100%;
            z-index: 1;
          
        }

        .route-box {
            padding: 2px 10px; /* Consistent padding inside boxes */
            margin-bottom: 6px; /* Maintains margin between boxes */
           
        }
    </style>
</head>
<body class="bg-gray-100">
    <!-- Header Section -->
    <header class="flex justify-between items-center p-6 border-b">
        <div class="text-2xl font-bold text-red-600">
            Paysada
            <p class="text-sm text-gray-500">Jeepney Fare Collection & Tracking Platform</p>
        </div>
        <nav class="space-x-6">
            <a href="/admin" class="text-gray-700 hover:text-red-600">Live</a>
            <a href="/admin-user" class="text-gray-700 hover:text-red-600">Users</a>
            <a href="/admin-drivers" class="text-gray-700 hover:text-red-600">Drivers</a>
            <a href="/admin-transactions" class="text-gray-700 hover:text-red-600">Transactions</a>
        </nav>
        <button class="text-gray-700 hover:text-red-600" onclick="toggleSidebar()" id="menuButton">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
            </svg>
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

    </header>

    <!-- Main Content -->
    <main id="map">
        <!-- Map Section (Placeholder Image) -->

        
        <!-- Route Details Section (Floating Box) -->
        <div id="route-info" class="bg-white shadow-md rounded-md p-4 0">
            <!-- Route Information Entry -->
            <div class="route-box border p-2 rounded-md shadow-sm">
                <div class="flex justify-between items-center">
                    <span class="font-semibold text-sm">Dasol - Alaminos</span>
                    <span class="text-gray-500 text-xs">Plate No. AFK5834</span>
                </div>
                <div class="flex justify-between mt-1 text-xs">
                    <span class="text-gray-600">Travel Time: <span class="font-medium">46 min</span></span>
                    <span class="text-gray-600">Price: <span class="font-medium">10 PHP</span></span>
                </div>
            </div>
            <!-- Additional route entries -->
            <div class="route-box border p-2 rounded-md shadow-sm">
                <div class="flex justify-between items-center">
                    <span class="font-semibold text-sm">Dasol - Alaminos</span>
                    <span class="text-gray-500 text-xs">Plate No. AFK5834</span>
                </div>
                <div class="flex justify-between mt-1 text-xs">
                    <span class="text-gray-600">Travel Time: <span class="font-medium">46 min</span></span>
                    <span class="text-gray-600">Price: <span class="font-medium">10 PHP</span></span>
                </div>
            </div>
            <div class="route-box border p-2 rounded-md shadow-sm">
                <div class="flex justify-between items-center">
                    <span class="font-semibold text-sm">Dasol - Alaminos</span>
                    <span class="text-gray-500 text-xs">Plate No. AFK5834</span>
                </div>
                <div class="flex justify-between mt-1 text-xs">
                    <span class="text-gray-600">Travel Time: <span class="font-medium">46 min</span></span>
                    <span class="text-gray-600">Price: <span class="font-medium">10 PHP</span></span>
                </div>
            </div>
            <!-- Repeat as needed for more routes -->
            <div class="route-box border p-2 rounded-md shadow-sm">
              <div class="flex justify-between items-center">
                  <span class="font-semibold text-sm">Dasol - Alaminos</span>
                  <span class="text-gray-500 text-xs">Plate No. AFK5834</span>
              </div>
              <div class="flex justify-between mt-1 text-xs">
                  <span class="text-gray-600">Travel Time: <span class="font-medium">46 min</span></span>
                  <span class="text-gray-600">Price: <span class="font-medium">10 PHP</span></span>
              </div>
          </div>

          <div class="route-box border p-2 rounded-md shadow-sm">
            <div class="flex justify-between items-center">
                <span class="font-semibold text-sm">Dasol - Alaminos</span>
                <span class="text-gray-500 text-xs">Plate No. AFK5834</span>
            </div>
            <div class="flex justify-between mt-1 text-xs">
                <span class="text-gray-600">Travel Time: <span class="font-medium">46 min</span></span>
                <span class="text-gray-600">Price: <span class="font-medium">10 PHP</span></span>
            </div>
        </div>

        <div class="route-box border p-2 rounded-md shadow-sm">
          <div class="flex justify-between items-center">
              <span class="font-semibold text-sm">Dasol - Alaminos</span>
              <span class="text-gray-500 text-xs">Plate No. AFK5834</span>
          </div>
          <div class="flex justify-between mt-1 text-xs">
              <span class="text-gray-600">Travel Time: <span class="font-medium">46 min</span></span>
              <span class="text-gray-600">Price: <span class="font-medium">10 PHP</span></span>
          </div>
      </div>
      <div class="route-box border p-2 rounded-md shadow-sm">
        <div class="flex justify-between items-center">
            <span class="font-semibold text-sm">Dasol - Alaminos</span>
            <span class="text-gray-500 text-xs">Plate No. AFK5834</span>
        </div>
        <div class="flex justify-between mt-1 text-xs">
            <span class="text-gray-600">Travel Time: <span class="font-medium">46 min</span></span>
            <span class="text-gray-600">Price: <span class="font-medium">10 PHP</span></span>
        </div>
    </div>
    <div class="route-box border p-2 rounded-md shadow-sm">
      <div class="flex justify-between items-center">
          <span class="font-semibold text-sm">Dasol - Alaminos</span>
          <span class="text-gray-500 text-xs">Plate No. AFK5834</span>
      </div>
      <div class="flex justify-between mt-1 text-xs">
          <span class="text-gray-600">Travel Time: <span class="font-medium">46 min</span></span>
          <span class="text-gray-600">Price: <span class="font-medium">10 PHP</span></span>
      </div>
  </div>
        </div>
    </main>
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>

    <script>
        var map = L.map('map').setView([14.0860746, 100.608406], 6);
        var osm = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        });
        osm.addTo(map);

        if(!navigator.geolocation){
            console.log("Your browser doesn't support geolocation feature!")
        }else{
navigator.geolocation.getCurrentPosition(getPosition);
        }
function getPosition(position){
    var lat = position.coords.latitude
    var long = position.coords.longitude
    var accuracy = position.coords.accuracy
    
    var  marker = L.marker([lat, long]).addTo(map)  

    console.log("Your connection is : Lat: " + lat + " Long " + long + " Accuracy " + accuracy)
}
    </script>
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
<script>
        // Add mouse wheel event listener for smooth scrolling
        const routeInfo = document.getElementById('route-info');

        // Prevent zooming on the map when scrolling the route info
        routeInfo.addEventListener('wheel', (event) => {
            // Prevent default scrolling behavior only when the mouse is over the route info div
            if (event.target === routeInfo) {
                event.preventDefault(); // Prevent default scrolling
                routeInfo.scrollTop += event.deltaY; // Scroll by the amount of the wheel movement
            }
        });
    </script>
</body>
</html>