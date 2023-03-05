<x-app-layout>
    @push('styles')
        @livewireStyles
    @endpush

    <div class="container">
        <h2 class="mb-4">Try CRUD Livewire</h2>
        <x-alert-success/>
        <div class="row">
            <div class="col-md-6">
                @livewire('post-create')
            </div>
        </div>

        <div class="mt-3">
            @livewire('post-card')
        </div>
    </div>

    @push('scripts')
        @livewireScripts
    @endpush
</x-app-layout>
