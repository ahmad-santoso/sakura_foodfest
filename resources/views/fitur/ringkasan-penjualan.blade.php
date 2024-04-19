<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ringkasan Penjualan</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
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
        <div class="flex-grow p-8">
            <div id="ringkasan-penjualan" class="w-full p-8 bg-white rounded-lg shadow-md">
                <h2 class="text-2xl mb-4 font-semibold">Ringkasan Penjualan</h2>
                
                 <!-- Form Pilih Tanggal, Bulan, dan Tahun -->
            <div class="mb-4">
                <form action="{{ route('ringkasan-penjualan') }}" method="GET" class="flex space-x-4">
                    <!-- Tahun -->
                    <div class="flex items-center space-x-2">
                        <label for="tahun" class="text-gray-600">Tahun:</label>
                        <select name="tahun" id="tahun" class="border rounded-md px-2 py-1">
                            <!-- Pilihan Tahun -->
                            @for ($i = date('Y'); $i >= date('Y') - 10; $i--)
                                <option value="{{ $i }}" {{ request('tahun') == $i ? 'selected' : '' }}>{{ $i }}</option>
                            @endfor
                        </select>
                    </div>

                    <!-- Bulan -->
                    <div class="flex items-center space-x-2">
                        <label for="bulan" class="text-gray-600">Bulan:</label>
                        <select name="bulan" id="bulan" class="border rounded-md px-2 py-1">
                            <!-- Pilihan Bulan -->
                            @for ($i = 1; $i <= 12; $i++)
                                <option value="{{ $i }}" {{ request('bulan') == $i ? 'selected' : '' }}>{{ date('F', mktime(0, 0, 0, $i, 1)) }}</option>
                            @endfor
                        </select>
                    </div>

                    <!-- Tanggal -->
                    <div class="flex items-center space-x-2">
                        <label for="tanggal" class="text-gray-600">Tanggal:</label>
                        <input type="number" name="tanggal" id="tanggal" min="1" max="31" value="{{ request('tanggal') }}" class="border rounded-md px-2 py-1 w-20">
                    </div>

                    <!-- Tombol Submit -->
                    <div class="flex items-center">
                        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600">Tampilkan</button>
                    </div>
                </form>
            </div>

            <!-- Grafik penjualan berdasarkan waktu -->
            <canvas id="timeSalesChart" class="w-full h-64"></canvas>

                <!-- Tabel Data Transaksi -->
                <table class="min-w-full mt-8 bg-white">
                    <!-- Header Tabel -->
                    <thead>
                        <tr>
                            <th class="border px-4 py-2">ID Transaksi</th>
                            <th class="border px-4 py-2">Jenis Pesanan</th>
                            <th class="border px-4 py-2">Jumlah</th>
                            <th class="border px-4 py-2">Harga</th>
                        </tr>
                    </thead>
                    <!-- Isi Tabel -->
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
                        <!-- Data lainnya -->
                    </tbody>
                </table>

                <!-- Tombol Aksi Cepat -->
                <div class="mt-4">
                    <a href="#" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600">Lihat Produk</a>
                    <a href="#" class="bg-green-500 text-white px-4 py-2 rounded-md hover:bg-green-600">Detail Transaksi</a>
                </div>
            </div>
             <!-- Modal Produk -->
            <div id="modalProduk" class="fixed z-10 inset-0 overflow-y-auto hidden">
                <!-- ... (Modal Produk code) ... -->
            </div>

            <!-- Modal Detail Transaksi -->
            <div id="modalDetailTransaksi" class="fixed z-10 inset-0 overflow-y-auto hidden">
                <!-- ... (Modal Detail Transaksi code) ... -->
            </div>
        </div>
    </div>

    
    <!-- Script untuk grafik penjualan berdasarkan waktu -->
    <script>
        const timeSalesData = {
            labels: ['Hari Ini', 'Kemarin', '2 Hari Lalu'],
            datasets: [{
                label: 'Penjualan',
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

        // Fungsi untuk menampilkan modal
        function openModal(modalId) {
            const modal = document.getElementById(modalId);
            modal.classList.remove('hidden');
        }

        function closeModal(modalId) {
            const modal = document.getElementById(modalId);
            modal.classList.add('hidden');
        }

        // Contoh data produk
        const produk = [
            { nama: 'Nasi Goreng', harga: 'Rp. 25,000' },
            { nama: 'Mie Ayam', harga: 'Rp. 20,000' },
            // Tambahkan data produk lainnya
        ];

        // Fungsi untuk menampilkan produk
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

        // Contoh data detail transaksi
        const detailTransaksi = [
            { id: 'TRX001', jenisPesanan: 'Dine-in', jumlah: '2', harga: 'Rp. 200,000' },
            // Tambahkan data detail transaksi lainnya
        ];

        // Fungsi untuk menampilkan detail transaksi
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
