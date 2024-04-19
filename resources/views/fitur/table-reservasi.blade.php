<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table Reservasi</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
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

                <h1 class="text-3xl mb-6 font-semibold text-center">Tabel Reservasi</h1>

                <!-- Tabel Reservasi -->
                <div class="overflow-x-auto">
                    <table class="min-w-full bg-white border rounded-lg">
                        <thead>
                            <tr class="bg-gray-200 text-gray-600 text-left">
                                <th class="py-2 px-4">ID Reservasi</th>
                                <th class="py-2 px-4">Nama Pemesan</th>
                                <th class="py-2 px-4">Nomor Telepon</th>
                                <th class="py-2 px-4">Tanggal Reservasi</th>
                                <th class="py-2 px-4">Jam Reservasi</th>
                                <th class="py-2 px-4">Jumlah Tamu</th>
                                <th class="py-2 px-4">Status</th>
                                <th class="py-2 px-4">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Contoh Data -->
                            <tr class="border-b text-gray-600 hover:bg-gray-100">
                                <td class="py-2 px-4">R001</td>
                                <td class="py-2 px-4">John Doe</td>
                                <td class="py-2 px-4">08123456789</td>
                                <td class="py-2 px-4">2024-04-14</td>
                                <td class="py-2 px-4">19:00</td>
                                <td class="py-2 px-4">4</td>
                                <td class="py-2 px-4">Belum Dikonfirmasi</td>
                                <td class="py-2 px-4">
                                    <button class="text-blue-500 hover:underline flex items-center space-x-2">
                                        <i class="fas fa-edit"></i> Edit
                                    </button>
                                    <button class="text-red-500 hover:underline flex items-center space-x-2">
                                        <i class="fas fa-trash-alt"></i> Hapus
                                    </button>
                                </td>
                            </tr>
                            <tr class="border-b text-gray-600 hover:bg-gray-100">
                                <td class="py-2 px-4">R001</td>
                                <td class="py-2 px-4">John Doe</td>
                                <td class="py-2 px-4">08123456789</td>
                                <td class="py-2 px-4">2024-04-14</td>
                                <td class="py-2 px-4">19:00</td>
                                <td class="py-2 px-4">4</td>
                                <td class="py-2 px-4">Belum Dikonfirmasi</td>
                                <td class="py-2 px-4">
                                    <button class="text-blue-500 hover:underline flex items-center space-x-2">
                                        <i class="fas fa-edit"></i> Edit
                                    </button>
                                    <button class="text-red-500 hover:underline flex items-center space-x-2">
                                        <i class="fas fa-trash-alt"></i> Hapus
                                    </button>
                                </td>
                            </tr>
                            <tr class="border-b text-gray-600 hover:bg-gray-100">
                                <td class="py-2 px-4">R001</td>
                                <td class="py-2 px-4">John Doe</td>
                                <td class="py-2 px-4">08123456789</td>
                                <td class="py-2 px-4">2024-04-14</td>
                                <td class="py-2 px-4">19:00</td>
                                <td class="py-2 px-4">4</td>
                                <td class="py-2 px-4">Belum Dikonfirmasi</td>
                                <td class="py-2 px-4">
                                    <button class="text-blue-500 hover:underline flex items-center space-x-2">
                                        <i class="fas fa-edit"></i> Edit
                                    </button>
                                    <button class="text-red-500 hover:underline flex items-center space-x-2">
                                        <i class="fas fa-trash-alt"></i> Hapus
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
