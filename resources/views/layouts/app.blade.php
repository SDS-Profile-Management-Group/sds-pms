<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> @yield('title') | SDS PMS </title>
    
    <script src="https://cdn.tailwindcss.com"></script> <!-- Include TailwindCSS -->
    
    @yield('scripts') <!-- Scripts will be added here -->
</head>
<body class="bg-gray-100">

    @include('partials._navbar', ['type' => View::yieldContent('navbar_type')]) 

    <!-- Main Content -->
    <div class="container mx-auto mt-6">
        @yield('content') <!-- Dynamic content will go here -->
    </div>

    <!-- Footer -->
    <footer class="text-center text-gray-500 mt-10 p-4">
        &copy; {{ date('Y') }} MyApp. All rights reserved.
    </footer>
</body>
</html>