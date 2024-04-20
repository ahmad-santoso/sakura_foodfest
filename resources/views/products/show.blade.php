<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Show Products</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100">

    <div class="container mx-auto my-10 px-4">
        <div class="flex justify-between items-center mb-8">
            <h1 class="text-2xl font-semibold">Product Details</h1>
            <a href="{{ route('index') }}" class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded">Kembali</a>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <!-- Product Image -->
            <div class="bg-white p-4 rounded-lg shadow-md">
                <img src="{{ asset('/storage/products/'.$product->image) }}" class="rounded w-full" alt="{{ $product->title }}">
            </div>

            <!-- Product Details -->
            <div class="bg-white p-4 rounded-lg shadow-md">
                <h3 class="text-xl font-semibold">{{ $product->title }}</h3>
                <hr class="my-2">
                <div class="mb-4">{!! $product->description !!}</div>
                <hr class="my-2">
                <p class="text-lg">Stock : {{ $product->stock }}</p>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
