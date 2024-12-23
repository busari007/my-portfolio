@props(['name', 'imageName'])

<div 
    x-data="{ show: false, name: '{{ $name }}' }"
    x-show="show"
    x-on:open-modal.window="show = ($event.detail.name === name)"
    x-on:close-modal.window="show = false"
    x-on:keydown.escape.window="show = false"
    class="relative"
    x-cloak
>
    <div 
        class="fixed inset-0 flex justify-center items-center bg-gray-600 bg-opacity-70 z-40"
        x-on:click="show = false"
    >
        <div 
            class="relative w-[80%] h-fit bg-black p-1 rounded z-50"
            x-on:click.stop
        >
            <button 
                x-on:click="$dispatch('close-modal')"
                class="absolute top-2 right-2 p-2 bg-red-600 hover:bg-red-800 text-white rounded text-xs md:text-base"
            >
                X
            </button>
            <img 
                src="{{ asset('images/designs/' . $imageName . '.png') }}" 
                alt="design_image" 
                class="w-full object-contain"
            />
        </div>
    </div>
</div>
