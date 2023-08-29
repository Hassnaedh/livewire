<div>
    <x-jet-input wire:model.debounce.150ms="firstName" class="mb-8" type="text" />


    <form action="">
        <select wire:model.defer='firstName' name="" id="">
            <option value="jenna">jenna</option>
            <option value="john">john</option>
            <option value="max">max</option>
        </select>
        <button tupe="submit">Submit</button>
    </form>

    
    <h3 class="mb-2 text-4xl font-semibold leading-normal text-gray-800">
        {{ $firstName }} {{ $lastname }}
    </h3>
</div>
