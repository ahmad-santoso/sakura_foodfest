<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sales Summary</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

<body class="bg-gray-100 h-screen">

    <div class="flex">

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
            <div id="ringkasan-penjualan" class="w-full p-8 bg-white rounded-lg shadow-md">
                <h2 class="text-2xl mb-4 font-semibold">Sales Summary</h2>
                
                 <!-- Form Select Date, Month, and Year -->
            <div class="mb-4">
                <form action="{{ route('ringkasan-penjualan') }}" method="GET" class="flex space-x-4">
                    <!-- Year -->
                    <div class="flex items-center space-x-2">
                        <label for="year" class="text-gray-600">Year:</label>
                        <select name="year" id="year" class="border rounded-md px-2 py-1">
                            <!-- Select Year -->
                            @for ($i = date('Y'); $i >= date('Y') - 10; $i--)
                                <option value="{{ $i }}" {{ request('year') == $i ? 'selected' : '' }}>{{ $i }}</option>
                            @endfor
                        </select>
                    </div>

                    <!-- Month -->
                    <div class="flex items-center space-x-2">
                        <label for="month" class="text-gray-600">Month:</label>
                        <select name="month" id="month" class="border rounded-md px-2 py-1">
                            <!-- Select Month -->
                            @for ($i = 1; $i <= 12; $i++)
                                <option value="{{ $i }}" {{ request('month') == $i ? 'selected' : '' }}>{{ date('F', mktime(0, 0, 0, $i, 1)) }}</option>
                            @endfor
                        </select>
                    </div>

                    <!-- Date -->
                    <div class="flex items-center space-x-2">
                        <label for="date" class="text-gray-600">Date:</label>
                        <input type="number" name="date" id="date" min="1" max="31" value="{{ request('date') }}" class="border rounded-md px-2 py-1 w-20">
                    </div>

                    <!-- Submit Button -->
                    <div class="flex items-center">
                        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600">Show</button>
                    </div>
                </form>
            </div>

            <!-- Chart of sales by time -->
            <canvas id="timeSalesChart" class="w-full h-64"></canvas>

                <!-- Transaction Data Table -->
                <table class="min-w-full mt-8 bg-white">
                    <!-- Table Header -->
                    <thead>
                        <tr>
                            <th class="border px-4 py-2">Transaction ID</th>
                            <th class="border px-4 py-2">Types Of Orders</th>
                            <th class="border px-4 py-2">Total</th>
                            <th class="border px-4 py-2">Price</th>
                        </tr>
                    </thead>
                    <!-- Table Contents -->
                    <tbody>
                        <tr>
                            <td class="border px-4 py-2">Food_0001</td>
                            <td class="border px-4 py-2">Dine-in</td>
                            <td class="border px-4 py-2">2</td>
                            <td class="border px-4 py-2">Rp. 200,000</td>
                        </tr>
                        <tr>
                            <td class="border px-4 py-2">Food_0002</td>
                            <td class="border px-4 py-2">Dine-in</td>
                            <td class="border px-4 py-2">2</td>
                            <td class="border px-4 py-2">Rp. 100,000</td>
                        </tr>
                    </tbody>
                </table>

                <!-- Quick Action Buttons -->
                <div class="mt-4">
                    <a href="#" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600">View Products</a>
                    <a href="#" class="bg-green-500 text-white px-4 py-2 rounded-md hover:bg-green-600">Transaction Details</a>
                </div>
            </div>
             <!-- Modal Products -->
            <div id="modalProduk" class="fixed z-10 inset-0 overflow-y-auto hidden">
                <!-- ... (Modal Products code) ... -->
            </div>

            <!-- Modal Transaction Details -->
            <div id="modalDetailTransaksi" class="fixed z-10 inset-0 overflow-y-auto hidden">
                <!-- ... (Modal Transaction Details code) ... -->
            </div>
        </div>
    </div>

    
    <!-- Scripts for sales charts by time -->
    <script>
        const timeSalesData = {
            labels: ['Today', 'Yesterday', '2 Days Ago'],
            datasets: [{
                label: 'Sales',
                data: [6000000, 5500000, 5800000],
                backgroundColor: 'rgba(75, 192, 192, 0.2)',
                borderColor: 'rgba(75, 192, 192, 1)',
                borderWidth: 1
            }]
        };

        const timeSalesOptions = {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        };

        const timeSalesChart = new Chart(document.getElementById('timeSalesChart'), {
            type: 'line',
            data: timeSalesData,
            options: timeSalesOptions
        });

        // Function to display modal
        function openModal(modalId) {
            const modal = document.getElementById(modalId);
            modal.classList.remove('hidden');
        }

        function closeModal(modalId) {
            const modal = document.getElementById(modalId);
            modal.classList.add('hidden');
        }

        // Sample product data
        const produk = [
            { nama: 'Nasi Goreng', harga: 'Rp. 25,000' },
            { nama: 'Mie Ayam', harga: 'Rp. 20,000' }
        ];

        // Function to display products
        function showProduk() {
            const listProduk = document.getElementById('listProduk');
            listProduk.innerHTML = '';

            produk.forEach(item => {
                const produkItem = document.createElement('div');
                produkItem.innerHTML = `<p>${item.nama} - ${item.harga}</p>`;
                listProduk.appendChild(produkItem);
            });

            openModal('modalProduk');
        }

        // Examples of transaction detail data
        const detailTransaksi = [
            { id: 'TRX001', jenisPesanan: 'Dine-in', jumlah: '2', harga: 'Rp. 200,000' },
            // Add other transaction details
        ];

        // Function to display transaction details
        function showDetailTransaksi() {
            const listDetail = document.getElementById('listDetailTransaksi');
            listDetail.innerHTML = '';

            detailTransaksi.forEach(item => {
                const detailItem = document.createElement('tr');
                detailItem.innerHTML = `
                    <td class="border px-4 py-2">${item.id}</td>
                    <td class="border px-4 py-2">${item.jenisPesanan}</td>
                    <td class="border px-4 py-2">${item.jumlah}</td>
                    <td class="border px-4 py-2">${item.harga}</td>
                `;
                listDetail.appendChild(detailItem);
            });

            openModal('modalDetailTransaksi');
        }
    </script>
</body>

</html>
