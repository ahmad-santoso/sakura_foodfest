<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Sakura-FoodFest</title>
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
        <div class="flex-1 bg-gray-100 p-8">
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
                        <p class="text-3xl font-bold">$5000</p>
                    </div>

                </div>
            </div>

            <!-- Container untuk Review dan Testimoni serta Daftar Staf -->
            <div class="flex flex-wrap gap-8 mt-8">

                <!-- Review dan Testimoni -->
                <div id="review-dan-testimoni" class="flex-1 p-6 bg-white rounded-lg shadow-md">
                    <h2 class="text-3xl mb-4 font-semibold text-center border-b pb-2">Review dan Testimoni</h2>
                    
                    <div class="mt-6 space-y-6">
                        <!-- Review 1 -->
                        <div class="flex items-center space-x-4">
                            <div class="bg-blue-500 rounded-full p-3">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                            <div>
                                <strong class="block text-lg">John Doe</strong>
                                <p class="text-gray-600">"Tempatnya nyaman dan makanannya enak! Saya suka datang ke sini."</p>
                            </div>
                        </div>

                        <!-- Review 2 -->
                        <div class="flex items-center space-x-4">
                            <div class="bg-green-500 rounded-full p-3">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                            <div>
                                <strong class="block text-lg">Jane Doe</strong>
                                <p class="text-gray-600">"Pelayanannya cepat dan ramah. Menu favorit saya adalah Sushi Salmon!"</p>
                            </div>
                        </div>

                        <!-- Review 3 -->
                        <div class="flex items-center space-x-4">
                            <div class="bg-yellow-500 rounded-full p-3">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                            <div>
                                <strong class="block text-lg">Alice</strong>
                                <p class="text-gray-600">"Makanannya lezat dan suasana restorannya sangat nyaman. Cocok untuk keluarga."</p>
                            </div>
                        </div>
                    </div>

                    <!-- Tombol untuk Lihat Semua Testimoni -->
                    <div class="mt-8 text-center">
                        <a href="#" class="text-blue-500 hover:underline">Lihat semua testimoni</a>
                    </div>
                </div>

                <!-- Daftar Staf atau Karyawan -->
                <div id="daftar-staf" class="flex-1 p-6 bg-white rounded-lg shadow-md">
                    <h2 class="text-3xl mb-4 font-semibold text-center border-b pb-2">Daftar Staf atau Karyawan</h2>
                    
                    <div class="mt-6 space-y-6">
                        <!-- Staff 1 -->
                        <div class="flex items-center space-x-4">
                            <div class="bg-blue-500 rounded-full p-3">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                            <div>
                                <strong class="block text-lg">John Doe</strong>
                                <p class="text-gray-600">Kasir</p>
                            </div>
                        </div>

                        <!-- Staff 2 -->
                        <div class="flex items-center space-x-4">
                            <div class="bg-green-500 rounded-full p-3">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                            <div>
                                <strong class="block text-lg">Jane Doe</strong>
                                <p class="text-gray-600">Pelayan</p>
                            </div>
                        </div>

                        <!-- Staff 3 -->
                        <div class="flex items-center space-x-4">
                            <div class="bg-yellow-500 rounded-full p-3">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                            <div>
                                <strong class="block text-lg">Alice</strong>
                                <p class="text-gray-600">Chef</p>
                            </div>
                        </div>
                    </div>

                    <!-- Tombol untuk Lihat Semua Staf -->
                    <div class="mt-8 text-center">
                        <a href="#" class="text-blue-500 hover:underline">Lihat semua staf</a>
                    </div>
                </div>
            </div>

        </div>

    </div>
</body>

</html>
