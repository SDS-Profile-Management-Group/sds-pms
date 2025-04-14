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

<div id="all-posts" class="post-section space-y-2">
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