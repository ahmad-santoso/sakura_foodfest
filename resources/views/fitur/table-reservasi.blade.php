<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservation Table</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

<body class="bg-gray-100 h-screen">

    <div class="flex">

        <!-- Navbar -->
        <nav class="bg-white w-80 h-screen shadow-md fixed">
            <div class="p-4">
                <h1 class="text-xl font-semibold mb-4">Sakura-FoodFest</h1>
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

                <h1 class="text-3xl mb-6 font-semibold text-center">Reservation Table</h1>

                <!-- Reservation Table -->
                <div class="overflow-x-auto">
                    <table class="min-w-full bg-white border rounded-lg">
                        <thead>
                            <tr class="bg-gray-200 text-gray-600 text-left">
                                <th class="py-2 px-4 text-sm text-center">Reservation</th>
                                <th class="py-2 px-4 text-sm text-center">Customer Name</th>
                                <th class="py-2 px-4 text-sm text-center">Phone Number</th>
                                <th class="py-2 px-4 text-sm text-center">Reservation Date</th>
                                <th class="py-2 px-4 text-sm text-center">Reservation Hours</th>
                                <th class="py-2 px-4 text-sm text-center">Number Of Guests</th>
                                <th class="py-2 px-4 text-sm text-center">Status</th>
                                <th class="py-2 px-4 text-sm text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Data Example -->
                            <tr class="border-b text-gray-600 hover:bg-gray-100">
                                <td class="py-2 px-4 text-sm text-center">R001</td>
                                <td class="py-2 px-4 text-sm text-center">Mogan</td>
                                <td class="py-2 px-4 text-sm text-center">089678956721</td>
                                <td class="py-2 px-4 text-sm text-center">2024-04-14</td>
                                <td class="py-2 px-4 text-sm text-center">19:00</td>
                                <td class="py-2 px-4 text-sm text-center">5</td>
                                <td class="py-2 px-4 text-sm text-center">Unconfirmed</td>
                                <td class="py-2 px-4 text-sm text-center">
                                    <button class="text-blue-500 hover:underline flex items-center space-x-2">
                                        <i class="fas fa-edit"></i> Edit
                                    </button>
                                    <button class="text-red-500 hover:underline flex items-center space-x-2">
                                        <i class="fas fa-trash-alt"></i> Delete
                                    </button>
                                </td>
                            </tr>
                            <tr class="border-b text-gray-600 hover:bg-gray-100">
                                <td class="py-2 px-4 text-sm text-center">R002</td>
                                <td class="py-2 px-4 text-sm text-center">Milo</td>
                                <td class="py-2 px-4 text-sm text-center">067584239834</td>
                                <td class="py-2 px-4 text-sm text-center">2024-04-19</td>
                                <td class="py-2 px-4 text-sm text-center">14:00</td>
                                <td class="py-2 px-4 text-sm text-center">7</td>
                                <td class="py-2 px-4 text-sm text-center">Uncomfirmed</td>
                                <td class="py-2 px-4 text-sm text-center">
                                    <button class="text-blue-500 hover:underline flex items-center space-x-2">
                                        <i class="fas fa-edit"></i> Edit
                                    </button>
                                    <button class="text-red-500 hover:underline flex items-center space-x-2">
                                        <i class="fas fa-trash-alt"></i> Delete
                                    </button>
                                </td>
                            </tr>
                            <tr class="border-b text-gray-600 hover:bg-gray-100">
                                <td class="py-2 px-4 text-sm text-center">R003</td>
                                <td class="py-2 px-4 text-sm text-center">Milo</td>
                                <td class="py-2 px-4 text-sm text-center">897869458351</td>
                                <td class="py-2 px-4 text-sm text-center">2024-04-20</td>
                                <td class="py-2 px-4 text-sm text-center">16:00</td>
                                <td class="py-2 px-4 text-sm text-center">6</td>
                                <td class="py-2 px-4 text-sm text-center">Uncomfirmed</td>
                                <td class="py-2 px-4 text-sm text-center">
                                    <button class="text-blue-500 hover:underline flex items-center space-x-2">
                                        <i class="fas fa-edit"></i> Edit
                                    </button>
                                    <button class="text-red-500 hover:underline flex items-center space-x-2">
                                        <i class="fas fa-trash-alt"></i> Delete
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>

</body>

</html>
