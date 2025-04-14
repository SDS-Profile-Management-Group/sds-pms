<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> @yield('title') | SDS PMS </title>
     <!-- Include TailwindCSS (Globally)-->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Scripts will be added here -->
    @yield('scripts') 

</head>
<body class="bg-gray-100">
    @include('partials._navbar', [
        'user_type' => optional(auth()->user())->user_type,
        'privilege' => optional(auth()->user())->user_type === 'staff' && optional(optional(auth()->user())->staffInfo)->pl_privilege ? 'limited' : 'full',
        'type' => View::yieldContent('navbar_type'),
    ])

    <!-- Main Content -->
    <div class="container mx-auto mt-6">
        @yield('content')
    </div>

    <!-- Footer -->
    <footer class="text-center text-gray-500 mt-10 p-4">
        &copy; {{ date('Y') }} SDS-PMS. All rights reserved.
    </footer>
</body>
</html>