@extends('layouts.app')

@push('styles')
    @livewireStyles
@endpush

@push('scripts')
    @livewireScripts
@endpush

@section('content')
    <div class="container">
        <h2 class="mb-4">Try CRUD Livewire</h2>

        <div class="row">
            <div class="col-md-6">
                @livewire('post-create')
            </div>
        </div>

        <div class="mt-3">
            @livewire('post-card')
        </div>
    </div>
@endsection
