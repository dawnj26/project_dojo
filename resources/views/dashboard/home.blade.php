@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <div class="max-h-screen min-h-screen flex flex-col relative" id="root">
        <div class="border-b min-h-12 w-full flex items-center px-8 justify-between sticky top-0">
            <h1 class="font-medium">Aniwatch</h1>
            <div class="">
                <i class="fa-solid fa-user mr-2"></i>
                <p class="inline-block text-sm mr-2">{{$user->name}}</p>
                <a class="bg-slate-700 hover:bg-slate-600 px-2 py-1 rounded" href="{{route('logout')}}"><i class="fa-solid fa-arrow-right-from-bracket" style="color: #ffffff;"></i></a>
            </div>
        </div>
        <livewire:create-nav-bar />
        <div class="flex justify-center flex-1 gap-2">
            <div class="container p-6">
                <h2 class="text-3xl font-medium mb-5">Watching</h2>

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
