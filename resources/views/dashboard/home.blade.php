@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <div class="max-h-screen min-h-screen flex flex-col" id="root">
        <div class="border-b h-12 w-full flex items-center px-8 justify-between sticky top-0">
            <h1 class="font-medium">Aniwatch</h1>
            <div class="">
                <i class="fa-solid fa-user mr-2"></i>
                <p class="inline-block text-sm mr-2">{{$user->name}}</p>
                <a class="bg-slate-700 hover:bg-slate-600 px-2 py-1 rounded" href="{{route('logout')}}"><i class="fa-solid fa-arrow-right-from-bracket" style="color: #ffffff;"></i></a>
            </div>
        </div>
        <div class="flex justify-center flex-1 gap-2">
            <livewire:create-nav-bar />
            <div class="flex-1 p-6">
                <h2 class="text-3xl font-medium mb-5">Watching</h2>

                <div class="flex max-w-full flex-wrap *:ml-4 *:mb-4 *:basis-1/11 *:flex-shrink-0 *:rounded-lg *:shadow-xl">

                    <div class=" relative">
                        <img class=" min-w-40 w-44 rounded-lg" src="https://a.storyblok.com/f/178900/1484x2100/fff351971f/kaiju-no8-jp-kv.jpeg/m/filters:quality(95)format(webp)" alt="image">
                        <div class=" absolute flex flex-col top-0 rounded-lg bg-gradient-to-b from-transparent to-black bg w-full h-full p-3">
                            <span class=" w-min bg-red-700 text-white font-light text-xs p-1 rounded-md shadow-lg">23</span>
                            <h5 class=" mt-auto text-zinc-300 font-light">Kaijuu 8</h5>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
