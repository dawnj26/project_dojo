<div class="flex flex-col items-center justify-center sticky left-0 gap-6 p-2 min-h-full">
    <div wire:click="selectItem(0)" class="flex items-center justify-center w-12 h-12 {{$selectedItem == 0 ? 'bg-slate-700 text-white' : 'hover:bg-slate-700 hover:text-white border border-black text-black'}} rounded-full">
        <i class="fa-solid fa-home" ></i>
    </div>
    <div wire:click="selectItem(1)" class="flex items-center justify-center w-12 h-12 {{$selectedItem == 1 ? 'bg-slate-700 text-white' : 'hover:bg-slate-700 hover:text-white border border-black text-black'}} rounded-full">
        <i class="fa-regular fa-calendar-plus"></i>
    </div>
    <div wire:click="selectItem(2)" class="flex items-center justify-center w-12 h-12 {{$selectedItem == 2 ? 'bg-slate-700 text-white' : 'hover:bg-slate-700 hover:text-white border border-black text-black'}} rounded-full">
        <i class="fa-solid fa-hourglass-end"></i>
    </div>
</div>
