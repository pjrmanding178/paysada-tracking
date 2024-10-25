<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paysada - Jeepney Fare Collection</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
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
        /* Aligning legend items */
        .legend-list {
            display: flex;
            flex-direction: column;
            gap: 8px;
            margin-bottom: 70px; /* Custom margin at the bottom */
        }

        .legend-item {
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .legend-color {
            width: 16px;
            height: 16px;
        }
    </style>
</head>
<body class="bg-white font-sans">
    <!-- Header -->
    <header class="flex justify-between items-center p-6 border-b">
        <div class="text-2xl font-bold text-red-600">
            Paysada
            <p class="text-sm text-gray-500">Jeepney Fare Collection & Tracking Platform</p>
        </div>
        <nav class="space-x-6">
            <a href="/admin" class="text-gray-700 hover:text-red-600">Live</a>
            <a href="/admin-user" class="text-gray-700 hover:text-red-600">Users</a>
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

    <!-- Main Content -->
    <div class="pt-6 flex gap-10">
        <div class="mx-40">
            <h2 class="text-xl font-bold w-40">Transactions</h2>
            <h3 class="text-lg font-semibold mt-4 w-40">Pie Chart</h3>
            <div class="flex items-center justify-start mt-4 w-60">
                <!-- Larger Pie Chart divided into 4 sections -->
                <canvas id="transactionsPieChart" width="500" height="500"></canvas>
            </div>

            <!-- Custom Legend with bottom margin -->
            <ul class="legend-list mb-8">
                <li class="legend-item">
                    <span class="legend-color bg-red-500"></span>
                    Jan 1 - 10 (Week 1)
                </li>
                <li class="legend-item">
                    <span class="legend-color bg-green-500"></span>
                    Jan 11 - 20 (Week 2)
                </li>
                <li class="legend-item">
                    <span class="legend-color bg-blue-900"></span>
                    Jan 21 - 30 (Week 3)
                </li>
                <li class="legend-item">
                    <span class="legend-color bg-yellow-500"></span>
                    Jan 31 - Feb 7 (Week 4)
                </li>
            </ul>
        </div>

        <div class="ml-40 flex-grow mx-20">
            <h2 class="text-xl font-bold">Users</h2>
            <div class="border p-2 mt-4 h-20 flex justify-between">
                <div>
                    <p class="text-gray-700">pjrmanding178 - <span class="text-green-600">paid</span></p>
                    <p class="text-sm text-red-700">Dasol - Alaminos</p>
                </div>
                <div>
                    <p class="text-xs text-gray-500">Plate No. AFK5834</p>
                    <p class="text-lg font-bold text-gray-700 mt-2">+ 50 PHP</p>
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
    <script>
        // Data for the pie chart, divided into 4 sections
        const data = {
            labels: ['Jan 1 - 10 (Week 1)', 'Jan 11 - 20 (Week 2)', 'Jan 21 - 30 (Week 3)', 'Jan 31 - Feb 7 (Week 4)'],
            datasets: [{
                label: 'Transactions',
                data: [1005, 1005, 1005, 800],  // Data for each week, added a 4th week
                backgroundColor: ['#f87171', '#34d399', '#1e3a8a', '#fbbf24'],  // Colors for the slices
                hoverOffset: 4
            }]
        };

        // Config for the pie chart
        const config = {
            type: 'pie',
            data: data,
            options: {
                responsive: true,
                maintainAspectRatio: false,  // Keeps size adjustments
                plugins: {
                    legend: {
                        display: false, // Hide the default legend as we are using a custom one
                    },
                    tooltip: {
                        callbacks: {
                            label: function(tooltipItem) {
                                return tooltipItem.label + ': ' + tooltipItem.raw + ' PHP';
                            }
                        }
                    }
                }
            }
        };

        // Render the pie chart
        const transactionsPieChart = new Chart(
            document.getElementById('transactionsPieChart'),
            config
        );
    </script>
</body>
</html>
