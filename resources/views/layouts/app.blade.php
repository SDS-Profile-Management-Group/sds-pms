<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <script src="https://cdn.tailwindcss.com"></script> <!-- Include TailwindCSS -->
</head>
<body class="bg-gray-100">
    <!-- Navbar -->
    <nav class="bg-white shadow-md p-4">
        <div class="container mx-auto flex justify-between">
            <a href="{{ url('/') }}" class="text-lg font-bold text-blue-600">SDS PMS</a>
            <div>
                {{-- TODO: Change the login & register to bring to home --}}
                <a href="{{ route('login') }}" class="text-blue-500 mr-4">Login</a>
                <a href="{{ route('register') }}" class="text-green-500">Register</a>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container mx-auto mt-6">
        @yield('content')
    </div>

    <!-- Footer -->
    <footer class="text-center text-gray-500 mt-10 p-4">
        &copy; {{ date('Y') }} MyApp. All rights reserved.
    </footer>
</body>
</html>
