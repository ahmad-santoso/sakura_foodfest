<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Menu Terlaris</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100 h-screen">

    <div class="flex">

        <!-- Navbar -->
        <nav class="bg-white w-80 h-screen shadow-md">
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
                        <a href="{{ route('home') }}" class="text-blue-500 hover:underline">
                            Dashboard
                        </a>

                        <!-- Ringkasan Penjualan -->
                        <a href="{{ route('ringkasan-penjualan') }}" class="text-blue-500 hover:underline">
                            Ringkasan Penjualan
                        </a>

                        <!-- Daftar Menu Terlaris -->
                        <a href="{{ route('daftarmenu-terlaris') }}" target="_self" class="text-blue-500 hover:underline">
                            Daftar Menu Terlaris
                        </a>

                        <!-- Tabel Reservasi -->
                        <a href="{{ route('table-reservasi') }}" class="text-blue-500 hover:underline">
                            Tabel Reservasi
                        </a>
                    </div>
                </div>
                <div>
                    <a href="{{ route('logout') }}" class="block w-full p-2 bg-red-500 text-white rounded-md text-center hover:bg-red-600 transition duration-300 ease-in-out">Logout</a>
                </div>
            </div>
        </nav>

        <!-- Content -->
        <div class="flex-1 bg-gray-100 p-4">
            <div class="bg-white p-8 rounded-lg shadow-md">

                <h2 class="text-xl mb-4 font-semibold text-center">Daftar Menu Terlaris</h2>

                <!-- Grid for Menu Cards -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
                    <!-- Additional Menu Cards -->
                    <div class="flex flex-col items-center justify-center bg-blue-50 p-4 rounded-lg shadow-md">
                        <h3 class="text-lg font-semibold mb-2">Ramen Ayam</h3>
                        <p class="text-sm text-gray-500">Terjual 100 porsi</p>
                    </div>

                    <div class="flex flex-col items-center justify-center bg-blue-50 p-4 rounded-lg shadow-md">
                        <h3 class="text-lg font-semibold">Sushi Salmon</h3>
                        <p class="text-sm text-gray-500">Terjual 90 porsi</p>
                    </div>

                    <div class="flex flex-col items-center justify-center bg-blue-50 p-4 rounded-lg shadow-md">
                        <h3 class="text-lg font-semibold">Matcha Latte</h3>
                        <p class="text-sm text-gray-500">Terjual 80 gelas</p>
                    </div>

                    <div class="flex flex-col items-center justify-center bg-blue-50 p-4 rounded-lg shadow-md">
                        <h3 class="text-lg font-semibold">Nasi Goreng Spesial</h3>
                        <p class="text-sm text-gray-500">Terjual 75 porsi</p>
                    </div>

                    <div class="flex flex-col items-center justify-center bg-blue-50 p-4 rounded-lg shadow-md">
                        <h3 class="text-lg font-semibold">Pancake Durian</h3>
                        <p class="text-sm text-gray-500">Terjual 70 porsi</p>
                    </div>

                    <div class="flex flex-col items-center justify-center bg-blue-50 p-4 rounded-lg shadow-md">
                        <h3 class="text-lg font-semibold">Teh Tarik</h3>
                        <p class="text-sm text-gray-500">Terjual 65 gelas</p>
                    </div>

                    <div class="flex flex-col items-center justify-center bg-blue-50 p-4 rounded-lg shadow-md">
                        <h3 class="text-lg font-semibold">Burger Wagyu</h3>
                        <p class="text-sm text-gray-500">Terjual 60 porsi</p>
                    </div>

                    <div class="flex flex-col items-center justify-center bg-blue-50 p-4 rounded-lg shadow-md">
                        <h3 class="text-lg font-semibold">Pizza Margherita</h3>
                        <p class="text-sm text-gray-500">Terjual 55 porsi</p>
                    </div>

                    <div class="flex flex-col items-center justify-center bg-blue-50 p-4 rounded-lg shadow-md">
                        <h3 class="text-lg font-semibold">Es Kopi Susu</h3>
                        <p class="text-sm text-gray-500">Terjual 50 gelas</p>
                    </div>

                    <div class="flex flex-col items-center justify-center bg-blue-50 p-4 rounded-lg shadow-md">
                        <h3 class="text-lg font-semibold">Chicken Katsu</h3>
                        <p class="text-sm text-gray-500">Terjual 45 porsi</p>
                    </div>

                    <!-- More Jepanese Dishes -->
                    <div class="flex flex-col items-center justify-center bg-blue-50 p-4 rounded-lg shadow-md">
                        <h3 class="text-lg font-semibold">Gyoza</h3>
                        <p class="text-sm text-gray-500">Terjual 40 porsi</p>
                    </div>

                    <div class="flex flex-col items-center justify-center bg-blue-50 p-4 rounded-lg shadow-md">
                        <h3 class="text-lg font-semibold">Takoyaki</h3>
                        <p class="text-sm text-gray-500">Terjual 38 porsi</p>
                    </div>

                    <div class="flex flex-col items-center justify-center bg-blue-50 p-4 rounded-lg shadow-md">
                        <h3 class="text-lg font-semibold">Chawanmushi</h3>
                        <p class="text-sm text-gray-500">Terjual 35 porsi</p>
                    </div>

                    <div class="flex flex-col items-center justify-center bg-blue-50 p-4 rounded-lg shadow-md">
                        <h3 class="text-lg font-semibold">Katsu Curry</h3>
                        <p class="text-sm text-gray-500">Terjual 33 porsi</p>
                    </div>

                    <div class="flex flex-col items-center justify-center bg-blue-50 p-4 rounded-lg shadow-md">
                        <h3 class="text-lg font-semibold">Sashimi Mix</h3>
                        <p class="text-sm text-gray-500">Terjual 30 porsi</p>
                    </div>

                    <div class="flex flex-col items-center justify-center bg-blue-50 p-4 rounded-lg shadow-md">
                        <h3 class="text-lg font-semibold">Yakisoba</h3>
                        <p class="text-sm text-gray-500">Terjual 28 porsi</p>
                    </div>

                    <div class="flex flex-col items-center justify-center bg-blue-50 p-4 rounded-lg shadow-md">
                        <h3 class="text-lg font-semibold">Mochi Ice Cream</h3>
                        <p class="text-sm text-gray-500">Terjual 26 porsi</p>
                    </div>

                    <div class="flex flex-col items-center justify-center bg-blue-50 p-4 rounded-lg shadow-md">
                            <h3 class="text-lg font-semibold">Chirashi Don</h3>
                        <p class="text-sm text-gray-500">Terjual 24 porsi</p>
                    </div>

                    <div class="flex flex-col items-center justify-center bg-blue-50 p-4 rounded-lg shadow-md">
                        <h3 class="text-lg font-semibold">Okonomiyaki</h3>
                        <p class="text-sm text-gray-500">Terjual 22 porsi</p>
                    </div>

                    <div class="flex flex-col items-center justify-center bg-blue-50 p-4 rounded-lg shadow-md">
                        <h3 class="text-lg font-semibold">Udon</h3>
                        <p class="text-sm text-gray-500">Terjual 20 porsi</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
