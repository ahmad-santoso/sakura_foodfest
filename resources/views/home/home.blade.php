<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Sakura-FoodFest</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

<body class="bg-gray-100 h-screen">

    <div class="flex">
        
        <!-- Navbar -->
        <nav class="bg-white w-80 h-screen shadow-md fixed">
            <div class="p-4">
                <h1 class="text-xl font-semibold mb-4 text-center">Sakura-FoodFest</h1>
                <div class="flex flex-col items-center mb-4">
                    <div class="w-40 h-40 rounded-full overflow-hidden mb-1">
                        <img src="{{ asset('assets/imageprofile.png') }}" alt="Avatar" class="w-full h-full object-cover transition duration-300 ease-in-out transform hover:scale-105">
                    </div>
                    <div class="mb-2">
                        <p class="text-gray-600">{{ auth()->user()->name }}</p>
                        <p class="text-gray-500">Level: {{ session('level') }}</p>
                    </div>
                    
                    <div class="flex flex-col space-y-2 mt-4">
                        <!-- Dashboard -->
                        <a href="{{ route('home') }}" class="text-blue-500 hover:underline">Dashboard</a>
                        <!-- Sales Summary -->
                        <a href="{{ route('ringkasan-penjualan') }}" class="text-blue-500 hover:underline">Sales Summary</a>
                        <!-- List Of Best-Selling Menus -->
                        <a href="{{ route('daftarmenu-terlaris') }}" target="_self" class="text-blue-500 hover:underline">List Of Best-Selling Menus</a>
                        <!-- Reservation Table -->
                        <a href="{{ route('table-reservasi') }}" class="text-blue-500 hover:underline">Reservation Table</a>
                        <!-- Product Data -->
                        <a href="{{ route('index') }}" class="text-blue-500 hover:underline">Product Data</a>
                    </div>
                </div>
                <div>
                    <a href="{{ route('logout') }}" class="block w-full p-2 bg-red-500 text-white rounded-md text-center hover:bg-red-600 transition duration-300 ease-in-out">Logout</a>
                </div>
            </div>
        </nav>

        <!-- Content -->
        <div class="flex-1 ml-80 p-8">
            <div class="bg-white p-8 rounded-lg shadow-md">

                <h1 class="text-3xl mb-6 text-center font-semibold">Welcome to Sakura-FoodFest Dashboard</h1>

                <!-- Dashboard Content -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">

                    <!-- Card for Total Menu -->
                    <div class="p-6 bg-blue-100 rounded-lg shadow-md hover:bg-blue-200 transition duration-300 ease-in-out">
                        <h2 class="text-xl mb-4 font-semibold">Total Menu</h2>
                        <p class="text-3xl font-bold">50</p>
                    </div>

                    <!-- Card for Total Orders -->
                    <div class="p-6 bg-green-100 rounded-lg shadow-md hover:bg-green-200 transition duration-300 ease-in-out">
                        <h2 class="text-xl mb-4 font-semibold">Total Orders</h2>
                        <p class="text-3xl font-bold">200</p>
                    </div>

                    <!-- Card for Total Customers -->
                    <div class="p-6 bg-yellow-100 rounded-lg shadow-md hover:bg-yellow-200 transition duration-300 ease-in-out">
                        <h2 class="text-xl mb-4 font-semibold">Total Customers</h2>
                        <p class="text-3xl font-bold">150</p>
                    </div>

                    <!-- Card for Revenue -->
                    <div class="p-6 bg-red-100 rounded-lg shadow-md hover:bg-red-200 transition duration-300 ease-in-out">
                        <h2 class="text-xl mb-4 font-semibold">Total Revenue</h2>
                        <p class="text-3xl font-bold">Rp. 6,000,000</p>
                    </div>

                </div>

                <!-- Charts -->
                <div class="mt-8">

                    <!-- Chart for Monthly Revenue -->
                    <div class="bg-white p-6 rounded-lg shadow-md">
                        <h2 class="text-xl mb-4 font-semibold">Monthly Revenue</h2>
                        <canvas id="monthlyRevenueChart"></canvas>
                    </div>

                    <!-- Chart for Monthly Orders -->
                    <div class="bg-white p-6 mt-8 rounded-lg shadow-md">
                        <h2 class="text-xl mb-4 font-semibold">Monthly Orders</h2>
                        <canvas id="monthlyOrdersChart"></canvas>
                    </div>

                </div>

                <!-- Recent Orders Table -->
                <div class="mt-8">
                    <div class="bg-white p-6 rounded-lg shadow-md">
                        <h2 class="text-2xl mb-4 font-semibold">Recent Orders</h2>
                        <table class="min-w-full">
                            <thead>
                                <tr>
                                    <th class="px-4 py-2">Order ID</th>
                                    <th class="px-4 py-2">Customer Name</th>
                                    <th class="px-4 py-2">Total Amount</th>
                                    <th class="px-4 py-2">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="border px-4 py-2">1</td>
                                    <td class="border px-4 py-2">Mogan</td>
                                    <td class="border px-4 py-2">Rp. 300,000</td>
                                    <td class="border px-4 py-2">Completed</td>
                                </tr>
                                <tr>
                                    <td class="border px-4 py-2">2</td>
                                    <td class="border px-4 py-2">Cilo</td>
                                    <td class="border px-4 py-2">Rp. 250,000</td>
                                    <td class="border px-4 py-2">Completed</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>

    </div>

    <script>
        // Monthly Revenue Chart
        var ctx = document.getElementById('monthlyRevenueChart').getContext('2d');
        var monthlyRevenueChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
                datasets: [{
                    label: 'Monthly Revenue',
                    data: [5000, 5500, 6000, 5800, 6200, 6500],
                    backgroundColor: 'rgba(75, 192, 192, 0.2)',
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });

        // Monthly Orders Chart
        var ctx2 = document.getElementById('monthlyOrdersChart').getContext('2d');
        var monthlyOrdersChart = new Chart(ctx2, {
            type: 'bar',
            data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
                datasets: [{
                    label: 'Monthly Orders',
                    data: [50, 55, 60, 58, 62, 65],
                    backgroundColor: 'rgba(255, 99, 132, 0.2)',
                    borderColor: 'rgba(255, 99, 132, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>

</body>

</html>
