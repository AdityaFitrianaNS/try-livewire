<x-app-layout>
    @push('styles')
        @livewireStyles
    @endpush

    <div class="container">
        <h2 class="mb-4">Edit Data</h2>
        <div>
            <a href="{{ route('posts.index') }}" class="btn btn-primary mb-3">Back</a>
        </div>
        <div class="row">
            <div class="col-md-6">
                @livewire('post-edit', ['post' => $post])
            </div>
        </div>
    </div>

    @push('scripts')
        @livewireScripts
    @endpush
</x-app-layout>