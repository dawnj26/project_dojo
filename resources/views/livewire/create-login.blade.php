<div class="text-sm">

    @if(session()->has('success'))
        <div class="bg-green-100 px-4 py-2 border border-green-400 rounded mb-2">
            <p class="text-green-600 font-medium">{{session('success')}}</p>
        </div>
    @endif

    @if(session()->has('error'))
        <div class="bg-red-100 px-4 py-2 border border-red-400 rounded mb-2">
            <p class="text-red-600 font-medium">{{session('error')}}</p>
        </div>
    @endif

    {{--
        wire:submit="save" calls the save method in the CreateLogin class
        when the form is submitted.
    --}}
    <form wire:submit="save">
        {{--
            wire:model.blur updates the variable in the CreateLogin class
            and validates the input field when the input field loses focus.
        --}}
        @csrf
        <div class="mb-4 ">
            <label class="block mb-1" for="email">Email</label>

            @error('email')
                <input wire:model.blur="email" class="rounded-md border border-red-500 px-4 py-2 w-full outline-none"
                    type="text" name="email" id="email" placeholder="E.g. johndoe@email.com">
                <span class="text-red-500 ">{{ $message }}</span>
            @else
                <input wire:model.blur="email"
                    class="rounded-md border border-gray-300 px-4 py-2 w-full outline-none focus:ring-1" type="email"
                    name="email" id="email" placeholder="E.g. johndoe@email.com">
            @enderror
        </div>

        <div class="mb-4 ">
            <label class="block mb-1" for="password">Password</label>

            @error('password')
                <input wire:model.blur="password" class="rounded-md border border-red-500 px-4 py-2 w-full outline-none"
                    type="password" name="password" id="password" placeholder="Enter password">
                <span class="text-red-500 ">{{ $message }}</span>
            @else
                <input wire:model.blur="password"
                    class="rounded-md border border-gray-300 px-4 py-2 w-full outline-none focus:ring-1" type="password"
                    name="password" id="password" placeholder="Enter password">
            @enderror
        </div>

        <div class="flex gap-2 items-center mb-6 ">
            <input wire:model="remember" type="checkbox" class="h-4 w-4" name="remember" id="remember">
            <label for="remember">Remember me</label>
        </div>

        <button class="w-full bg-blue-500 text-white font-medium px-4 py-2 rounded hover:bg-blue-400 mb-4"
            type="submit">Log in</button>

        <p class=" text-center">Don't have an account? <a class="underline text-blue-500" href="{{route('register')}}">Register</a>
        </p>

    </form>
</div>
