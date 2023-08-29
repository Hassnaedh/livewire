<button wire:click="$toggle()" class="px-4 py-2 mb-1 text-xs font-bold text-white uppercase bg-pink-500 rounded shadow outline-none active:bg-pink-600 hover:shadow-md" type="button" style="transition:all 0.15s ease 0s;">
connect {{$name}}
</button>

{{--
<button wire:click="$set('name','john doe')" class="px-4 py-2 mb-1 text-xs font-bold text-white uppercase bg-pink-500 rounded shadow outline-none active:bg-pink-600 hover:shadow-md" type="button" style="transition:all 0.15s ease 0s;">
connect {{$name}}
</button>
<button wire:click="$refresh" class="px-4 py-2 mb-1 text-xs font-bold text-white uppercase bg-pink-500 rounded shadow outline-none active:bg-pink-600 hover:shadow-md" type="button" style="transition:all 0.15s ease 0s;">
connect {{$name}}
</button>
<button wire:click="connect('john','doe')" class="px-4 py-2 mb-1 text-xs font-bold text-white uppercase bg-pink-500 rounded shadow outline-none active:bg-pink-600 hover:shadow-md" type="button" style="transition:all 0.15s ease 0s;">
connect
</button>--}}
{{--
<button wire:keydown.caps-lock='connect' class="px-4 py-2 mb-1 text-xs font-bold text-white uppercase bg-pink-500 rounded shadow outline-none active:bg-pink-600 hover:shadow-md" type="button" style="transition:all 0.15s ease 0s;">
connect
</button>
<button wire:keydown.enter='connect' class="px-4 py-2 mb-1 text-xs font-bold text-white uppercase bg-pink-500 rounded shadow outline-none active:bg-pink-600 hover:shadow-md" type="button" style="transition:all 0.15s ease 0s;">
connect
</button>
<button wire:keydown.arrow-up='connect' class="px-4 py-2 mb-1 text-xs font-bold text-white uppercase bg-pink-500 rounded shadow outline-none active:bg-pink-600 hover:shadow-md" type="button" style="transition:all 0.15s ease 0s;">
connect
</button>
--}}
