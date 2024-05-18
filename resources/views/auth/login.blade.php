@extends('layouts.template')

@section('title', 'Log in')

@section('content')
    <div class="max-h-screen min-h-screen flex flex-col" id="root">
        <div class="border-b h-12 w-full flex items-center px-8">
            <h1 class="font-medium">Aniwatch</h1>
        </div>
        <div class="flex items-center justify-center flex-1 w-full">
            <div class="content w-[30rem] px-6 py-8 border rounded-lg">
                <h2 class="text-3xl font-semibold">Log in</h2>
                <p class="mb-8">Welcome back! 👋</p>
                {{-- Log in Form --}}
                <livewire:create-login />
            </div>
        </div>
    </div>
@endsection
