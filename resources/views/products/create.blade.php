<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add New Products</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-lightgray">

<div class="container mx-auto mt-10 mb-10">
    <div class="w-full">
        <div class="bg-white p-6 rounded shadow-md">
            <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
            
                @csrf

                <div class="mb-4">
                    <label for="image" class="font-semibold block">IMAGE</label>
                    <input type="file" id="image" name="image" class="border rounded-md p-2 @error('image') border-red-500 @enderror">
                    
                    @error('image')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="title" class="font-semibold block">TITLE</label>
                    <input type="text" id="title" name="title" value="{{ old('title') }}" placeholder="Masukkan Judul Product" class="border rounded-md p-2 @error('title') border-red-500 @enderror">
                    
                    @error('title')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="description" class="font-semibold block">DESCRIPTION</label>
                    <textarea id="description" name="description" rows="5" placeholder="Masukkan Description Product" class="border rounded-md p-2 @error('description') border-red-500 @enderror">{{ old('description') }}</textarea>
                    
                    @error('description')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="flex space-x-4">
                    <div class="w-1/2">
                        <label for="price" class="font-semibold block">PRICE</label>
                        <input type="number" id="price" name="price" value="{{ old('price') }}" placeholder="Masukkan Harga Product" class="border rounded-md p-2 @error('price') border-red-500 @enderror">
                        
                        @error('price')
                            <div class="text-red-500 mt-2 text-sm">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="w-1/2">
                        <label for="stock" class="font-semibold block">STOCK</label>
                        <input type="number" id="stock" name="stock" value="{{ old('stock') }}" placeholder="Masukkan Stock Product" class="border rounded-md p-2 @error('stock') border-red-500 @enderror">
                        
                        @error('stock')
                            <div class="text-red-500 mt-2 text-sm">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>

                <div class="mt-6">
                    <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white rounded-md px-4 py-2">SAVE</button>
                    <button type="reset" class="bg-yellow-500 hover:bg-yellow-600 text-white rounded-md px-4 py-2">RESET</button>
                </div>

            </form>
        </div>
    </div>
</div>

<script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace('description');
</script>
</body>

</html>
