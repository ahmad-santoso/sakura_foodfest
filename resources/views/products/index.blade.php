<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Products</title>
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
                        <a href="{{ route('home') }}" class="text-blue-500 hover:underline">Dashboard</a>
                        <!-- Ringkasan Penjualan -->
                        <a href="{{ route('ringkasan-penjualan') }}" class="text-blue-500 hover:underline">Ringkasan Penjualan</a>
                        <!-- Daftar Menu Terlaris -->
                        <a href="{{ route('daftarmenu-terlaris') }}" target="_self" class="text-blue-500 hover:underline">Daftar Menu Terlaris</a>
                        <!-- Tabel Reservasi -->
                        <a href="{{ route('table-reservasi') }}" class="text-blue-500 hover:underline">Tabel Reservasi</a>
                        <!-- Data Product -->
                        <a href="{{ route('index') }}" class="text-blue-500 hover:underline">Data Product</a>
                    </div>
                </div>
                <div>
                    <a href="{{ route('logout') }}" class="block w-full p-2 bg-red-500 text-white rounded-md text-center hover:bg-red-600 transition duration-300 ease-in-out">Logout</a>
                </div>
            </div>
        </nav>

        <!-- Content -->
        <div class="container mt-8 flex-1 mx-auto px-4">
            <div class="bg-white p-6 rounded shadow-md">
                <div>
                    <h1 class="text-center my-4 text-xl font-semibold mb-4">Data Products</h1>
                    <hr class="my-2 mb-4">
                </div>
                <div class="overflow-x-auto">
                    <a href="{{ route('products.create') }}" class="bg-green-500 hover:bg-green-600 text-white py-2 px-4 rounded-md mb-4 mt-4">ADD PRODUCT</a>
                    
                    <div class="mb-4"></div>
                    
                    <table class="min-w-full bg-white">
                        <thead>
                            <tr>
                                <th class="px-6 py-3 border-b-2 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">IMAGE</th>
                                <th class="px-6 py-3 border-b-2 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">TITLE</th>
                                <th class="px-6 py-3 border-b-2 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">PRICE</th>
                                <th class="px-6 py-3 border-b-2 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">STOCK</th>
                                <th class="px-6 py-3 border-b-2 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">ACTIONS</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($products as $product)
                                <tr>
                                    <td class="px-6 py-4 border-b">
                                        <img src="{{ asset('/storage/products/'.$product->image) }}" class="rounded" style="width: 150px">
                                    </td>
                                    <td class="px-6 py-4 border-b">{{ $product->title }}</td>
                                    <td class="px-6 py-4 border-b">{{ "Rp " . number_format($product->price,2,',','.') }}</td>
                                    <td class="px-6 py-4 border-b">{{ $product->stock }}</td>
                                    <td class="px-6 py-4 border-b">
                                        <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('products.destroy', $product->id) }}" method="POST">
                                            <a href="{{ route('products.show', $product->id) }}" class="btn btn-dark bg-blue-500 text-white hover:bg-blue-600 py-1 px-3">SHOW</a>
                                            <a href="{{ route('products.edit', $product->id) }}" class="btn btn-primary bg-yellow-500 text-white hover:bg-yellow-600 py-1 px-3">EDIT</a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger bg-red-500 text-white hover:bg-red-600 py-1 px-3">HAPUS</button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5" class="px-6 py-4 border-b text-center">
                                        Data Products belum Tersedia.
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                    <div class="my-6">
                        {{ $products->links() }}
                    </div>
                </div>
            </div>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        //message with sweetalert
        @if(session('success'))
            Swal.fire({
                icon: "success",
                title: "BERHASIL",
                text: "{{ session('success') }}",
                showConfirmButton: false,
                timer: 2000
            });
        @elseif(session('error'))
            Swal.fire({
                icon: "error",
                title: "GAGAL!",
                text: "{{ session('error') }}",
                showConfirmButton: false,
                timer: 2000
            });
        @endif
    </script>

</body>

</html>
