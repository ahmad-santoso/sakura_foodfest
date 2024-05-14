<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Sakura-FoodFest</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-no-repeat bg-center h-screen" style="background-image: url('{{ asset('assets/imagelogin.jpg') }}'); background-size: cover; background-repeat: no-repeat; background-position: center;">
    <header class="bg-white shadow fixed w-full z-50">
        <div class="container mx-auto px-6 py-3 flex justify-between items-center">
            <a href="/landing_page" class="flex items-center text-gray-800">
                <svg class="w-6 h-6 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
                <span class="text-xl font-semibold">Back</span>
            </a>
            <nav class="hidden md:flex space-x-4 items-center">
                <a href="/login" class="bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600">Login</a>
                <a href="/register" class="border border-blue-500 text-blue-500 py-2 px-4 rounded hover:bg-blue-500 hover:text-white">Register</a>
            </nav>
            <button class="md:hidden text-gray-800 focus:outline-none" id="menu-button">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>
        </div>
        <div class="md:hidden hidden" id="mobile-menu">
            <a href="/landing_page" class="flex items-center text-gray-800">
                <svg class="w-6 h-6 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
                <span class="text-xl font-semibold">Back</span>
            </a>
            <a href="/login" class="block px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">Login</a>
            <a href="/register" class="block px-4 py-2 mt-2 border border-blue-500 text-blue-500 rounded hover:bg-blue-500 hover:text-white">Register</a>
        </div>
    </header>

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
                        <input type="email" name="email" id="email" placeholder="your@gmail.com" class="mt-1 p-2 w-full rounded-md border border-gray-300 focus:border-indigo-500 focus:ring focus:ring-indigo-200">
                    </div>

                    <!-- Password Input -->
                    <div class="mb-4 relative">
                        <label for="password" class="block text-sm font-medium text-gray-600">Password</label>
                        <input type="password" name="password" id="password" placeholder="your password" class="mt-1 p-2 pr-10 w-full rounded-md border border-gray-300 focus:border-indigo-500 focus:ring focus:ring-indigo-200">

                        <!-- Eye icons -->
                        <button type="button" id="togglePassword" class="absolute inset-y-0 right-0 flex items-center px-2 text-gray-600 top-1/2 transform -translate-y-1/2 mt-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye">
                                <circle cx="12" cy="12" r="3"></circle>
                                <path d="M22 12c-2.4 4.6-7.3 8-10 8s-7.6-3.4-10-8c2.4-4.6 7.3-8 10-8s7.6 3.4 10 8zm-10 6c1.7 0 3-1.3 3-3s-1.3-3-3-3-3 1.3-3 3 1.3 3 3 3zm0-5c-.8 0-1.5.7-1.5 1.5s.7 1.5 1.5 1.5 1.5-.7 1.5-1.5-.7-1.5-1.5-1.5z"></path>
                            </svg>
                        </button>
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

    <script>
        const togglePassword = document.getElementById('togglePassword');
        const password = document.getElementById('password');

        togglePassword.addEventListener('click', function() {
            const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
            password.setAttribute('type', type);
            
            // Tipe eye
            if (type === 'password') {
                togglePassword.innerHTML = '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye"><circle cx="12" cy="12" r="3"></circle><path d="M22 12c-2.4 4.6-7.3 8-10 8s-7.6-3.4-10-8c2.4-4.6 7.3-8 10-8s7.6 3.4 10 8zm-10 6c1.7 0 3-1.3 3-3s-1.3-3-3-3-3 1.3-3 3 1.3 3 3 3zm0-5c-.8 0-1.5.7-1.5 1.5s.7 1.5 1.5 1.5 1.5-.7 1.5-1.5-.7-1.5-1.5-1.5z"></path></svg>';
            } else {
                togglePassword.innerHTML = '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye-off"><path d="M3 3L21 21M21 3L3 21"></path></svg>';
            }
        });
    </script>
</body>

</html>
