<div class="flex gap-4 mb-6">
    <button onclick="toggleView('own')" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 transition">
        My Posts
    </button>
    <button onclick="toggleView('public')" class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600 transition">
        Public Posts
    </button>
    <button onclick="toggleView('all')" class="bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-600 transition">
        All
    </button>
</div>

<div id="own-posts" class="post-section hidden space-y-2">
    <h2 class="text-xl font-semibold mb-2">My Posts</h2>
    @foreach ($ownPosts as $post)
        @php
            $postData = json_decode($post->posts, true);
        @endphp
        <div class="p-4 bg-blue-100 rounded shadow">
            <h3 class="text-lg font-bold">{{ $postData['title'] }}</h3>
            <p class="mt-2">{!! nl2br(e($postData['content']['text'])) !!}</p>
        </div>
    @endforeach
</div>

<div id="public-posts" class="post-section hidden space-y-2">
    <h2 class="text-xl font-semibold mb-2">Public Posts</h2>
    @foreach ($publicPosts as $post)
        @php
            $postData = json_decode($post->posts, true);
        @endphp
        <div class="p-4 bg-green-100 rounded shadow">
            <h3 class="text-lg font-bold">{{ $postData['title'] }}</h3>
            <p class="mt-2">{!! nl2br(e($postData['content']['text'])) !!}</p>
        </div>
    @endforeach
</div>

<div id="all-posts" class="post-section hidden space-y-2">
    <h2 class="text-xl font-semibold mb-2">All Posts</h2>
    @foreach ($ownPosts->merge($publicPosts) as $post)
        @php
            $postData = json_decode($post->posts, true);
        @endphp
        <div class="p-4 bg-gray-100 rounded shadow">
            <h3 class="text-lg font-bold">{{ $postData['title'] }}</h3>
            <p class="mt-2">{!! nl2br(e($postData['content']['text'])) !!}</p>
        </div>
    @endforeach
</div>