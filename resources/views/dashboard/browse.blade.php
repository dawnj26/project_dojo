@extends('layouts.app')

@section('title', 'Browse')

@section('content')
<div class="max-h-screen min-h-screen flex flex-col relative" id="root">
    <livewire:top-bar />
    <div class="flex justify-center flex-1 gap-2">
        <div class="container p-6">
            <h2 class="text-3xl font-medium mb-5">Browse</h2>

            <div class="flex flex-wrap *:rounded-lg *:shadow-xl gap-4 justify-center">
                <livewire:anime-card image="https://a.storyblok.com/f/178900/1484x2100/fff351971f/kaiju-no8-jp-kv.jpeg/m/filters:quality(95)format(webp)" rating="23" title="Kaijuu 8" />
                <livewire:anime-card image="https://a.storyblok.com/f/178900/1484x2100/fff351971f/kaiju-no8-jp-kv.jpeg/m/filters:quality(95)format(webp)" rating="23" title="Kaijuu 8" />
                <livewire:anime-card image="https://a.storyblok.com/f/178900/1484x2100/fff351971f/kaiju-no8-jp-kv.jpeg/m/filters:quality(95)format(webp)" rating="23" title="Kaijuu 8" />
                <livewire:anime-card image="https://a.storyblok.com/f/178900/1484x2100/fff351971f/kaiju-no8-jp-kv.jpeg/m/filters:quality(95)format(webp)" rating="23" title="Kaijuu 8" />
                <livewire:anime-card image="https://a.storyblok.com/f/178900/1484x2100/fff351971f/kaiju-no8-jp-kv.jpeg/m/filters:quality(95)format(webp)" rating="23" title="Kaijuu 8" />
                <livewire:anime-card image="https://a.storyblok.com/f/178900/1484x2100/fff351971f/kaiju-no8-jp-kv.jpeg/m/filters:quality(95)format(webp)" rating="23" title="Kaijuu 8" />
                <livewire:anime-card image="https://a.storyblok.com/f/178900/1484x2100/fff351971f/kaiju-no8-jp-kv.jpeg/m/filters:quality(95)format(webp)" rating="23" title="Kaijuu 8" />
                <livewire:anime-card image="https://a.storyblok.com/f/178900/1484x2100/fff351971f/kaiju-no8-jp-kv.jpeg/m/filters:quality(95)format(webp)" rating="23" title="Kaijuu 8" />
                <livewire:anime-card image="https://a.storyblok.com/f/178900/1484x2100/fff351971f/kaiju-no8-jp-kv.jpeg/m/filters:quality(95)format(webp)" rating="23" title="Kaijuu 8" />
                <livewire:anime-card image="https://a.storyblok.com/f/178900/1484x2100/fff351971f/kaiju-no8-jp-kv.jpeg/m/filters:quality(95)format(webp)" rating="23" title="Kaijuu 8" />
                <livewire:anime-card image="https://a.storyblok.com/f/178900/1484x2100/fff351971f/kaiju-no8-jp-kv.jpeg/m/filters:quality(95)format(webp)" rating="23" title="Kaijuu 8" />
                <livewire:anime-card image="https://a.storyblok.com/f/178900/1484x2100/fff351971f/kaiju-no8-jp-kv.jpeg/m/filters:quality(95)format(webp)" rating="23" title="Kaijuu 8" />
            </div>
        </div>
    </div>
</div>
@endsection
