<div class="text-sm">
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
            <label class="block mb-1" for="name">Full name</label>

            @error('name')
                <input wire:model.blur="name" class="rounded-md border border-red-500 px-4 py-2 w-full outline-none"
                    type="text" name="name" id="name" placeholder="Enter full name">
                <span class="text-red-500 ">{{ $message }}</span>
            @else
                <input wire:model.blur="name"
                    class="rounded-md border border-gray-300 px-4 py-2 w-full outline-none focus:ring-1" type="name"
                    name="name" id="name" placeholder="Enter full name">
            @enderror
        </div>

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
            <label class="block mb-1" for="password">Enter password</label>

            @error('password_confirmation')
                <input wire:model.live="password_confirmation" class="rounded-md border border-red-500 px-4 py-2 w-full outline-none"
                    type="password" name="password_confirmation" id="password_confirmation" placeholder="Enter password">
                <span class="text-red-500 ">{{ $message }}</span>
            @else
                <input wire:model.live="password_confirmation"
                    class="rounded-md border border-gray-300 px-4 py-2 w-full outline-none focus:ring-1" type="password"
                    name="password_confirmation" id="password_confirmation" placeholder="Enter password">
            @enderror
        </div>

        <div class="mb-4 ">
            <label class="block mb-1" for="password">Confirm password</label>

            @error('password')
                <input wire:model.live="password" class="rounded-md border border-red-500 px-4 py-2 w-full outline-none"
                    type="password" name="password" id="password" placeholder="Confirm password">
                <span class="text-red-500 ">{{ $message }}</span>
            @else
                <input wire:model.live="password"
                    class="rounded-md border border-gray-300 px-4 py-2 w-full outline-none focus:ring-1" type="password"
                    name="password" id="password" placeholder="Confirm password">
            @enderror
        </div>



        <button class="w-full bg-blue-500 text-white font-medium px-4 py-2 rounded hover:bg-blue-400 mb-4"
            type="submit">Register</button>

        <p class=" text-center">Already have an account? <a class="underline text-blue-500" href="{{route('login')}}">Log in</a>
        </p>

    </form>
</div>

