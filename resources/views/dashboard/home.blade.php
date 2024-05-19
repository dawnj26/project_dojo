@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <div class="max-h-screen min-h-screen flex flex-col" id="root">
        <div class="border-b h-12 w-full flex items-center px-8">
            <h1 class="font-medium">Aniwatch</h1>
        </div>
        <div class="flex items-center justify-center flex-1 w-full">
            <div class="content w-[30rem] px-6 py-8 border rounded-lg">
                <h2 class="text-2xl font-semibold">Home</h2>
                <p class="mb-6 text-sm">Welcome back! 👋</p>
                <div class="flex space gap-4">
                    <a href="{{ route('logout') }}"
                        class="w-full bg-blue-500 text-white font-medium px-4 py-2 rounded hover:bg-blue-400">Log out</a>

                </div>
            </div>
        </div>
    </div>
@endsection