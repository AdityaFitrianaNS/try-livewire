<x-app-layout>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 mt-3">
                <div>
                    <a href="{{ route('posts.index') }}" class="btn btn-primary mb-3">Back</a>
                </div>
                <div class="card">
                    <div class="card-body pt-2">
                        <h5 class="card-title mt-1 mb-2">{{ $post->title }}</h5>
                        <p class="card-text">{{ $post->body }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>