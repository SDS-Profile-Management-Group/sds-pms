@if (session('success'))
    <div id="success-popup" class="fixed top-5 right-5 bg-green-500 text-white p-4 rounded-md shadow-md">
        {{ session('success') }}
    </div>
@endif