<div class="border-b min-h-12 w-full flex items-center px-8 justify-between sticky top-0 text-sm bg-white z-50">
    <a href="{{ route('home') }}">
        <h1 class="font-medium">Aniwatch</h1>
    </a>
    <form action="{{ route('browse') }}" method="get">
        <input type="text" class="border border-gray-300 rounded px-2 py-1 outline-none focus:ring-1 w-72 max-w-72"
            placeholder="Search anime..." name="search">
        <button type="submit" class="bg-slate-700 hover:bg-slate-600 px-2 py-1 rounded"><i class="fa-solid fa-search"
                style="color: #ffffff;"></i></button>
    </form>
    <div class="">
        <i class="fa-solid fa-user mr-2"></i>
        <p class="inline-block text-sm mr-2">{{ $user->name }}</p>
        <a class="bg-slate-700 hover:bg-slate-600 px-2 py-1 rounded" href="{{ route('logout') }}"><i
                class="fa-solid fa-arrow-right-from-bracket" style="color: #ffffff;"></i></a>
    </div>
</div>
