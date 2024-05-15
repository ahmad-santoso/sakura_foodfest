<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Of Best-Selling Menus</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
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

                <h2 class="text-xl mb-4 font-semibold text-center">List Of Best-Selling Menus</h2>

                <!-- Grid for Menu Cards -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
                    <!-- Additional Menu Cards -->
                    <div class="flex flex-col items-center justify-center bg-blue-50 p-4 rounded-lg shadow-md">
                        <h3 class="text-sm font-semibold mb-2">Oceanic Symphony Sashimi</h3>
                        <p class="text-sm text-gray-500">Sold 100 items</p>
                    </div>

                    <div class="flex flex-col items-center justify-center bg-blue-50 p-4 rounded-lg shadow-md">
                        <h3 class="text-sm font-semibold">Maguro Sashimi</h3>
                        <p class="text-sm text-gray-500">Sold 90 items</p>
                    </div>

                    <div class="flex flex-col items-center justify-center bg-blue-50 p-4 rounded-lg shadow-md">
                        <h3 class="text-sm font-semibold">Hamachi Sashimi</h3>
                        <p class="text-sm text-gray-500">Sold 80 items</p>
                    </div>

                    <div class="flex flex-col items-center justify-center bg-blue-50 p-4 rounded-lg shadow-md">
                        <h3 class="text-sm font-semibold">Kimchi Ramen</h3>
                        <p class="text-sm text-gray-500">Sold 75 items</p>
                    </div>

                    <div class="flex flex-col items-center justify-center bg-blue-50 p-4 rounded-lg shadow-md">
                        <h3 class="text-sm font-semibold">Pancake Durian</h3>
                        <p class="text-sm text-gray-500">Sold 70 items</p>
                    </div>

                    <div class="flex flex-col items-center justify-center bg-blue-50 p-4 rounded-lg shadow-md">
                        <h3 class="text-sm font-semibold">Spicy Ramen With Sashimi</h3>
                        <p class="text-sm text-gray-500">Sold 65 items</p>
                    </div>

                    <div class="flex flex-col items-center justify-center bg-blue-50 p-4 rounded-lg shadow-md">
                        <h3 class="text-sm font-semibold">Beef Dumplings</h3>
                        <p class="text-sm text-gray-500">Sold 60 items</p>
                    </div>

                    <div class="flex flex-col items-center justify-center bg-blue-50 p-4 rounded-lg shadow-md">
                        <h3 class="text-sm font-semibold">Classic Sake Sashimi</h3>
                        <p class="text-sm text-gray-500">Sold 55 items</p>
                    </div>

                    <div class="flex flex-col items-center justify-center bg-blue-50 p-4 rounded-lg shadow-md">
                        <h3 class="text-sm font-semibold">Soba Serenity</h3>
                        <p class="text-sm text-gray-500">Sold 50 items</p>
                    </div>

                    <div class="flex flex-col items-center justify-center bg-blue-50 p-4 rounded-lg shadow-md">
                        <h3 class="text-sm font-semibold">Tokyo Roll</h3>
                        <p class="text-sm text-gray-500">Sold 45 items</p>
                    </div>

                    <div class="flex flex-col items-center justify-center bg-blue-50 p-4 rounded-lg shadow-md">
                        <h3 class="text-sm font-semibold">Unagi Kabayaki Sauce</h3>
                        <p class="text-sm text-gray-500">Sold 40 items</p>
                    </div>

                    <div class="flex flex-col items-center justify-center bg-blue-50 p-4 rounded-lg shadow-md">
                        <h3 class="text-sm font-semibold">Boketto Bliss Sushi</h3>
                        <p class="text-sm text-gray-500">Sold 38 items</p>
                    </div>

                    <div class="flex flex-col items-center justify-center bg-blue-50 p-4 rounded-lg shadow-md">
                        <h3 class="text-sm font-semibold">Takoyaki Temptation</h3>
                        <p class="text-sm text-gray-500">Sold 35 items</p>
                    </div>

                    <div class="flex flex-col items-center justify-center bg-blue-50 p-4 rounded-lg shadow-md">
                        <h3 class="text-sm font-semibold">Ebi Katsu Don</h3>
                        <p class="text-sm text-gray-500">Sold 33 items</p>
                    </div>

                    <div class="flex flex-col items-center justify-center bg-blue-50 p-4 rounded-lg shadow-md">
                        <h3 class="text-sm font-semibold">Summer Hokkaido Ramen</h3>
                        <p class="text-sm text-gray-500">Sold 30 items</p>
                    </div>

                    <div class="flex flex-col items-center justify-center bg-blue-50 p-4 rounded-lg shadow-md">
                        <h3 class="text-sm font-semibold">Salmon Delight Sushi Roll</h3>
                        <p class="text-sm text-gray-500">Sold 28 items</p>
                    </div>

                    <div class="flex flex-col items-center justify-center bg-blue-50 p-4 rounded-lg shadow-md">
                        <h3 class="text-sm font-semibold">Sushi Roll</h3>
                        <p class="text-sm text-gray-500">Sold 26 items</p>
                    </div>

                    <div class="flex flex-col items-center justify-center bg-blue-50 p-4 rounded-lg shadow-md">
                        <h3 class="text-sm font-semibold">Dorayaki Delight</h3>
                        <p class="text-sm text-gray-500">Sold 24 items</p>
                    </div>

                    <div class="flex flex-col items-center justify-center bg-blue-50 p-4 rounded-lg shadow-md">
                        <h3 class="text-sm font-semibold">Tempura Crunch Sushi</h3>
                        <p class="text-sm text-gray-500">Sold 22 items</p>
                    </div>

                    <div class="flex flex-col items-center justify-center bg-blue-50 p-4 rounded-lg shadow-md">
                        <h3 class="text-sm font-semibold">Salmon Sushi</h3>
                        <p class="text-sm text-gray-500">Sold 20 items</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
