<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paysada Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
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
<body class="">
    <div class="">
        
    <header class="flex justify-between items-center p-6 border-b">
        <div class="text-2xl font-bold text-red-600">
            Paysada
            <p class="text-sm text-gray-500">Jeepney Fare Collection & Tracking Platform</p>
        </div>
        <nav class="space-x-6">
            <a href="/admin" class="text-gray-700 hover:text-red-600">Live</a>
            <a href="admin-user" class="text-gray-700 hover:text-red-600">Users</a>
            <a href="admin-drivers" class="text-gray-700 hover:text-red-600">Drivers</a>
            <a href="admin-transactions" class="text-gray-700 hover:text-red-600">Transactions</a>
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
</div>
    </header>
        <hr class="border-t border-gray-400 mx-0 w-3/7 mb-4">
       
       
       <div class=" p-5 ">
            <h2 class="font-semibold text-lg mb-5">Drivers</h2>
            <!-- Example row -->
            <div class="grid grid-cols-3 gap-4 mb-4 border border-gray-400 p-2">
                <div>Dasol - Alaminos Plate No. AFK5834</div>
                <div>Travel Time: 46 mins</div>
                <div>Price: 10 PHP</div>
            </div>
            
        </div>
        <div class="flex space-x-2">
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Add</button>
            <button class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded">Edit</button>
            <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Delete</button>
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
