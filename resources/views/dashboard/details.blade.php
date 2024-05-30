@extends('layouts.app')

@section('title', 'Details')

@section('content')
    <div class="max-h-screen min-h-screen flex flex-col relative" id="root">
        <livewire:top-bar />
        <div class="flex justify-center flex-1 gap-2">
            <div class="container p-6">

                <div class="flex flex-wrap *:rounded-lg *:shadow-xl gap-4">
                    @if (empty($animes))
                        <div class="flex items-center justify-center w-full h-96">
                            <h2 class="text-2xl font-medium text-gray-500">No details found</h2>
                        </div>
                    @endif



                    @foreach ($animes as $anime)
                        @php
                            $genres = implode(', ', $anime['genres']);
                        @endphp
                        <a href="{{ route('details', $anime['id']) }}">
                            <livewire:detail-card id="{{ $anime['id'] }}" title="{{ $anime['title']['romaji'] }}"
                                genre="{{ $genres }}" image="{{ $anime['coverImage']['large'] }}"
                                description="{!! $anime['description'] !!}" totalEpisode="{{ $anime['episodes'] }}"
                                rating="{{ $anime['meanScore'] ?? 'No ratings' }}" />
                        </a>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
@endsection
