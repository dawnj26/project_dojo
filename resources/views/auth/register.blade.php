@extends('layouts.app')

@section('title', 'Register')

@section('content')
    <div class="max-h-screen min-h-screen flex flex-col" id="root">
        <div class="border-b h-12 w-full flex items-center px-8">
            <h1 class="font-medium">Aniwatch</h1>
        </div>
        <div class="flex items-center justify-center flex-1 w-full">
            <div class="content w-[30rem] px-6 py-8 border rounded-lg">
                <h2 class="text-2xl font-semibold">Register</h2>
                <p class="mb-6 text-sm">Please enter your details to create an account!</p>
                <livewire:create-register />
            </div>
        </div>
    </div>
@endsection
