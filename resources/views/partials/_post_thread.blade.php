<div class="post-list">
    @foreach($posts as $post)
        <div class="card mb-3">
            <div class="card-body">
                <h5>{{ $post->user->name }}</h5>
                <p>{{ $post->content }}</p>
                <small class="text-muted">{{ $post->created_at->diffForHumans() }}</small>
            </div>
        </div>
    @endforeach
</div>