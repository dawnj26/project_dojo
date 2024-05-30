<div class="flex flex-col items-center justify-center fixed left-0 gap-6 p-2 min-h-full">
    <a href="{{ route('home') }}">
        <div
            class="flex items-center justify-center w-12 h-12 {{ $selectedItem == 0 ? 'bg-slate-700 text-white' : 'hover:bg-slate-700 hover:text-white border border-black text-black' }} rounded-full">
            <i class="fa-solid fa-home"></i>
        </div>
    </a>
    <a href="{{ route('home', 1) }}">
        <div
            class="flex items-center justify-center w-12 h-12 {{ $selectedItem == 1 ? 'bg-slate-700 text-white' : 'hover:bg-slate-700 hover:text-white border border-black text-black' }} rounded-full">
            <i class="fa-regular fa-calendar-plus"></i>
        </div>
    </a>
    <a href="{{ route('home', 2) }}">
        <div
            class="flex items-center justify-center w-12 h-12 {{ $selectedItem == 2 ? 'bg-slate-700 text-white' : 'hover:bg-slate-700 hover:text-white border border-black text-black' }} rounded-full">
            <i class="fa-solid fa-hourglass-end"></i>
        </div>
    </a>
</div>
