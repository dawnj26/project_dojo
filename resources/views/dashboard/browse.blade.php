@extends('layouts.app')

@section('title', 'Browse')

@section('content')
    <div class="max-h-screen min-h-screen flex flex-col relative" id="root">
        <livewire:top-bar />
        <div class="flex justify-center flex-1 gap-2">
            <div class="container p-6">
                <h2 class="text-3xl font-medium mb-5">Search results
                </h2>

                <div class="flex flex-wrap *:rounded-lg *:shadow-xl gap-4">
                    @if ($emptyQuery)
                        <div class="flex items-center justify-center w-full h-96">
                            <h2 class="text-2xl font-medium text-gray-500">Search anything...</h2>
                        </div>
                    @elseif (empty($animes))
                        <div class="flex items-center justify-center w-full h-96">
                            <h2 class="text-2xl font-medium text-gray-500">No results found</h2>
                        </div>
                    @endif

                    @foreach ($animes as $anime)
                        <livewire:anime-card id="{{ $anime['id'] }}" image="{{ $anime['coverImage']['large'] }}"
                            title="{{ $anime['title']['romaji'] }}" rating="{{ $anime['meanScore'] ?? 'No ratings' }}" />
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
