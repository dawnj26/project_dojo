<div class="text-sm">
    <form wire:submit="save">
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
            <input type="checkbox" class="h-4 w-4" name="remember" id="remember">
            <label for="remember">Remember me</label>
        </div>

        <button class="w-full bg-blue-500 text-white font-medium px-4 py-2 rounded hover:bg-blue-400 mb-4"
            type="submit">Log in</button>

        <p class=" text-center">Don't have an account? <a class="underline text-blue-500" href="">Register</a>
        </p>

    </form>
</div>
