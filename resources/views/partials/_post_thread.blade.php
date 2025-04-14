<div id="posts" class="post-section space-y-2">
    <h2 class="text-xl font-semibold mb-2">Posts</h2>

    @foreach ($allPosts as $post)
        @php
            $postData = json_decode($post->posts, true);
            $isOwnPost = $post->user_id === Auth::user()->asg_username;
        @endphp

        <div class="p-4 rounded shadow {{ $isOwnPost ? 'bg-blue-100' : 'bg-green-100' }}">
            <h3 class="text-lg font-bold">{{ $postData['title'] }}</h3>
            <p class="mt-2">{!! nl2br(e($postData['content']['text'])) !!}</p>
        </div>
    @endforeach
</div>