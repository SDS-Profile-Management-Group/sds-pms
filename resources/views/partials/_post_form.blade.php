<div class="bg-white shadow-md rounded-lg p-4 mb-4 w-full max-w-2xl mx-auto">
    {{-- Post Box Header --}}
    <div class="flex items-center mb-3">
        {{-- <img src="{{ Auth::user()->avatar ?? asset('default-avatar.png') }}" alt="User Avatar" class="w-10 h-10 rounded-full mr-3"> --}}
        <h3 class="text-lg font-semibold text-gray-700">Create a Post</h3>
    </div>

    {{-- Post Form --}}
    <form action="" method="POST">
        @csrf
    
        <!-- Title Field -->
        <input type="text" name="title" class="w-full border border-gray-300 rounded-md p-2 focus:ring-2 focus:ring-blue-500 focus:outline-none mb-3" placeholder="Enter the title" required>
    
        <!-- Content Field -->
        <textarea name="content" class="w-full border border-gray-300 rounded-md p-2 focus:ring-2 focus:ring-blue-500 focus:outline-none" placeholder="What's on your mind?" required></textarea>
    
        {{-- Post Options (Icons) --}}
        {{-- <div class="flex items-center mt-2 space-x-3">
            <button type="button" class="flex items-center text-gray-600 hover:text-blue-500 transition">
                📷 <span class="ml-1 text-sm">Photo</span>
            </button>
            <button type="button" class="flex items-center text-gray-600 hover:text-green-500 transition">
                🎥 <span class="ml-1 text-sm">Video</span>
            </button>
            <button type="button" class="flex items-center text-gray-600 hover:text-yellow-500 transition">
                📄 <span class="ml-1 text-sm">Document</span>
            </button>
        </div> --}}
    
        <!-- Submit Button -->
        <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded-md mt-3">
            Post
        </button>
    </form>
</div>