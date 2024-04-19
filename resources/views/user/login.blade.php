<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Sakura-FoodFest</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-no-repeat bg-center h-screen" style="background-image: url('{{ asset('assets/imagelogin.jpg') }}'); background-size: cover; background-repeat: no-repeat; background-position: center;">

    <div class="flex h-screen">

        <!-- Left Side: Login Form -->
        <div class="w-1/2 flex justify-center items-center">
            <div class="bg-white p-8 rounded-lg shadow-md w-full max-w-md">
                <h1 class="text-2xl mb-4 text-center font-semibold">Welcome to Sakura-FoodFest</h1>

                <form action="{{ route('postlogin') }}" method="POST">
                    <!-- @csrf -->
                    {{ csrf_field() }}

                    <!-- Email Input -->
                    <div class="mb-4">
                        <label for="email" class="block text-sm font-medium text-gray-600">Email</label>
                        <input type="email" name="email" id="email" class="mt-1 p-2 w-full rounded-md border border-gray-300 focus:border-indigo-500 focus:ring focus:ring-indigo-200">
                    </div>

                    <!-- Password Input -->
                    <div class="mb-4">
                        <label for="password" class="block text-sm font-medium text-gray-600">Password</label>
                        <input type="password" name="password" id="password" class="mt-1 p-2 w-full rounded-md border border-gray-300 focus:border-indigo-500 focus:ring focus:ring-indigo-200">
                    </div>

                    <!-- Remember Me Checkbox -->
                    <div class="mb-4">
                        <input type="checkbox" name="remember" id="remember" class="mr-2">
                        <label for="remember" class="text-sm font-medium text-gray-600">Remember me</label>
                    </div>

                    <!-- Login Button -->
                    <div class="mb-4">
                        <button type="submit" class="w-full p-2 bg-indigo-500 text-white rounded-md hover:bg-indigo-600">Login</button>
                    </div>

                    <!-- Register Link -->
                    <p class="text-sm text-center">Don't have an account? <a href="{{ route('register') }}" class="text-indigo-500 hover:text-indigo-600">Register</a></p>
                </form>
            </div>
        </div>

    </div>

</body>

</html>
