<div class="row">
    <h3>Post Card</h3>
    @foreach($posts as $post)
        <div class="col-sm-4 mt-3">
            <div class="card">
                <div class="card-body pt-2">
                    <a href="{{ route('posts.edit', $post->slug) }}"
                       class="btn btn-sm btn-warning position-absolute top-0 end-0 my-2 mx-5 text-white">
                        <i class="bi bi-pencil-square"></i>
                        Edit
                    </a>
                    <a href="{{ route('posts.delete', $post->slug) }}" class="btn btn-sm btn-danger position-absolute top-0 end-0 m-2">
                        <i class="bi bi-trash"></i>
                    </a>
                    <h5 class="card-title mt-1 mb-2">{{ $post->title }}</h5>
                    <p class="card-text">{{ $post->body }}</p>
                    <a href="{{ route('posts.detail', $post->slug) }}" class="btn btn-primary">Go Detail</a>
                </div>
            </div>
        </div>
    @endforeach
</div>
