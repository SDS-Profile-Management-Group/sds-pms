<div class="bg-white shadow-md rounded-lg p-4 mb-4 w-full max-w-2xl mx-auto">
    {{-- Post Box Header --}}
    <div class="flex items-center mb-3">
        {{-- <img src="{{ Auth::user()->avatar ?? asset('default-avatar.png') }}" alt="User Avatar" class="w-10 h-10 rounded-full mr-3"> --}}
        <h3 class="text-lg font-semibold text-gray-700">Post an Activity</h3>
    </div>

    {{-- Post Form --}}
    <form action="{{ route('add-post') }}" method="POST">
        @csrf
    
        <input type="text" name="title" placeholder="Enter the title" 
        class="w-full border border-gray-300 rounded-md p-2 focus:ring-2 focus:ring-blue-500 focus:outline-none mb-3" required>

        <textarea name="content" placeholder="What's on your mind?"
        class="w-full border border-gray-300 rounded-md p-2 focus:ring-2 focus:ring-blue-500 focus:outline-none"  required></textarea>

        
        <!-- Dropdowns -->
        <div class="flex flex-col space-y-3 mt-3">

            <!-- Post Type -->
            <div>
                <label for="is_announcement" class="block text-sm text-gray-700 mb-1">Post Type</label>
                <select name="is_announcement" id="is_announcement"
                    class="w-full border border-gray-300 rounded-md p-2 focus:ring-2 focus:ring-blue-500 focus:outline-none">
                    <option value="1">Announcement</option>
                    <option value="0">Personal Update</option>
                </select>
            </div>

            <!-- Academic or Non-Academic -->
            <div>
                <label for="is_academic" class="block text-sm text-gray-700 mb-1">Content Type</label>
                <select name="is_academic" id="is_academic"
                    class="w-full border border-gray-300 rounded-md p-2 focus:ring-2 focus:ring-blue-500 focus:outline-none">
                    <option value="1">Academic</option>
                    <option value="0">Non-Academic</option>
                </select>
            </div>

            <!-- Location -->
            <div>
                <label for="is_on_campus" class="block text-sm text-gray-700 mb-1">Location</label>
                <select name="is_on_campus" id="is_on_campus"
                    class="w-full border border-gray-300 rounded-md p-2 focus:ring-2 focus:ring-blue-500 focus:outline-none">
                    <option value="1">On-Campus</option>
                    <option value="0">Off-Campus</option>
                </select>
            </div>
        </div>
    
        <div class="flex justify-end mt-3">
            <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded-full">
                Post
            </button>
        </div>
    </form>
</div>