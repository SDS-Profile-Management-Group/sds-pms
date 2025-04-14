<div class="bg-white shadow-md rounded-lg p-4 mb-4 w-full max-w-2xl mx-auto">
    {{-- Post Box Header --}}
    <div class="flex items-center mb-3">
        {{-- <img src="{{ Auth::user()->avatar ?? asset('default-avatar.png') }}" alt="User Avatar" class="w-10 h-10 rounded-full mr-3"> --}}
        <h3 class="text-lg font-semibold text-gray-700">Create a Post</h3>
    </div>

    {{-- Post Form --}}
    <form action="{{ route('add-post') }}" method="POST">
        @csrf
    
        <!-- Title Field -->
        <input type="text" name="title" placeholder="Enter the title" 
        class="w-full border border-gray-300 rounded-md p-2 focus:ring-2 focus:ring-blue-500 focus:outline-none mb-3" required>
    
        <!-- Content Field -->
        <textarea name="content" placeholder="What's on your mind?"
        class="w-full border border-gray-300 rounded-md p-2 focus:ring-2 focus:ring-blue-500 focus:outline-none"  required></textarea>

        
        <!-- Buttons -->
        <div class="flex items-center mt-2 space-x-3">
            <input type="checkbox" name="is_private" id="is_private" class="text-blue-500">
            <label for="is_private" class="text-sm text-gray-700">Make this post private</label>
        </div>
    
        <!-- Submit Button -->
        <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded-md mt-3">
            Post
        </button>
    </form>
</div>