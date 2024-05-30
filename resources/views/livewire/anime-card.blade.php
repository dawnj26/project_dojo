
    <div class=" relative">
        <img class="rounded-lg object-cover aspect-[11/16] h-72" src="{{ $image }}" alt="image">
        <div
            class=" absolute flex flex-col top-0 rounded-lg bg-gradient-to-b from-transparent to-black w-full h-full p-3">
            <span class="bg-red-700 text-white font-light text-xs p-1 rounded-md shadow-lg w-max">{{ $rating }}</span>
            <h5 class=" mt-auto text-zinc-300 font-light">{{ $title }}</h5>

        </div>
    </div>
