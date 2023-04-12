<div>
    <div>
        <label>
            <textarea wire:model="body" placeholder="O que tá na tua caixola hoje?"></textarea>
        </label>
        @error('body') <span class="text-red-600 font-bold">{{ $message }}</span> @enderror
    </div>

    <x-primary-button wire:click="tweet">Tweet :3</x-primary-button>
</div>
