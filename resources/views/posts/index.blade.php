<x-app-layout>
    @push('styles')
        @livewireStyles
    @endpush

    <div class="container">
        <h2 class="mb-4">Try CRUD Livewire</h2>
        <div class="row">
            <div class="mt-3">
                @livewire('post-card')
            </div>
        </div>

        @push('scripts')
            @livewireScripts
    @endpush
</x-app-layout>
