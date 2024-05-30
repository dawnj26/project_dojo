@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <div class="max-h-screen min-h-screen flex flex-col relative" id="root">
        <livewire:top-bar />
        <livewire:create-nav-bar selectedItem="{{ $category['id'] }}" />
        <div class="flex justify-center flex-1 gap-2">
            <div class="container p-10">
                <h2 class="text-3xl font-medium mb-5">{{ $category['title'] }}</h2>

                @if (session()->has('exists'))
                    <div class="bg-red-100 px-4 py-2 border border-red-400 rounded mb-2">
                        <p class="text-red-600 font-medium">{{ session('exists') }}</p>
                    </div>
                @endif

                @if (session()->has('success'))
                    <div class="bg-green-100 px-4 py-2 border border-green-400 rounded mb-2">
                        <p class="text-green-600 font-medium">{{ session('success') }}</p>
                    </div>
                @endif


                <div class="flex flex-wrap *:rounded-lg *:shadow-xl gap-4">

                    @foreach ($animes as $anime)
                        {{-- <livewire:anime-card id='{{ $anime->id }}' image="{{ $anime->cover_image }}"
                            rating="{{ $anime->total_episodes === 0 ? 'On going' : $anime->total_episodes }}"
                            title="{{ $anime->title }}" edit="true" /> --}}

                        <a href="{{ route('edit', $anime->id) }}">
                            @livewire('anime-card', ['id' => $anime->id, 'image' => $anime->cover_image, 'rating' => $anime->total_episodes === 0 ? 'On going' : $anime->total_episodes, 'title' => $anime->title])
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
