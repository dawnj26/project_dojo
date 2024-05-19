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
                <h2 class="text-3xl font-medium">Watching</h2>
            </div>
        </div>
    </div>
@endsection
