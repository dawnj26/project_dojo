<div class="border-b min-h-12 w-full flex items-center px-8 justify-between sticky top-0 text-sm">
    <h1 class="font-medium">Aniwatch</h1>
    <a href="{{route('browse')}}" class="hover:underline">
        Browse
        <i class="fa-solid fa-search ml-1"></i>
    </a>
    <div class="">
        <i class="fa-solid fa-user mr-2"></i>
        <p class="inline-block text-sm mr-2">{{$user->name}}</p>
        <a class="bg-slate-700 hover:bg-slate-600 px-2 py-1 rounded" href="{{route('logout')}}"><i class="fa-solid fa-arrow-right-from-bracket" style="color: #ffffff;"></i></a>
    </div>
</div>
