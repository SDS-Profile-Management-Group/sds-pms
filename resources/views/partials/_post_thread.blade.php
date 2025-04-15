<div id="posts" class="post-section space-y-2">
    <h2 class="text-xl font-semibold mb-2">Posts</h2>

    @foreach ($allPosts as $post)
        
        @php
            // Decode JSON and ensure it's a valid array
            $postData = json_decode($post->content, true);
            $isOwnPost = $post->user_id === Auth::user()->asg_username;

            // Check if json_decode was successful and has the expected structure
            $postTitle = isset($postData['title']) ? $postData['title'] : 'Untitled';
            $postText = isset($postData['content']['text']) ? $postData['content']['text'] : 'No content available';
        @endphp

        <div class="post-card p-4 rounded shadow {{ $isOwnPost ? 'bg-blue-100' : 'bg-green-100' }}"
            data-type="{{ $post->is_announcement ? 'announcement' : 'personal' }}"
            data-category="{{ $post->is_academic ? 'academic' : 'non-academic' }}"
            data-location="{{ $post->is_on_campus ? 'on-campus' : 'off-campus' }}">

            <div class="flex flex-row items-center gap-x-4">
                <img src="{{ Auth::user()->avatar ?? asset('default-avatar.png') }}" alt="User Avatar" class="w-10 h-10 rounded-full mr-3">
                <h3 class="text-lg font-bold">{{ $postTitle }}</h3>
                <span class="text-sm italic bg-red-300 text-red-900 px-2 py-1 rounded">
                    {{ $post->is_announcement ? 'Announcement' : 'Personal Post' }}
                </span>
                <p class="text-sm text-gray-700">{{ $post->updated_at->format('l, d/m/y') }}</p>
                <p class="text-sm text-gray-700">{{ $post->updated_at->format('H:i') }}</p>
            </div>

            <p class="text-sm italic text-gray-600 mt-1">{{ $post->user->userProfile->full_name }} - {{ $post->user_id }}</p>

            <p class="mt-2 text-base text-gray-800">{!! nl2br(e($postText)) !!}</p>
        </div>
    @endforeach
</div>