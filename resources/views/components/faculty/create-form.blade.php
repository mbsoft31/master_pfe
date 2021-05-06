<x-form wire:submit.prevent="save">
    <div class="px-6 py-2">
        <div class="divide-y1">
            <x-form.control>
                <x-input.label for="name" :value="__('faculty.name')"/>
                <x-input.text id="name" wire:model.lazy="name" class="w-full"/>
                <x-input.error for="name"/>
            </x-form.control>
            <x-form.control>
                <x-input.label for="address" :value="__('faculty.address')"/>
                <x-input.area id="address" wire:model.lazy="address" class="w-full"/>
                <x-input.error for="address"/>
            </x-form.control>
            <x-form.control>
                <x-input.label for="phone" :value="__('faculty.phone')"/>
                <x-input.text id="phone" wire:model.lazy="phone" class="w-full"/>
                <x-input.error for="phone"/>
            </x-form.control>
        </div>
    </div>
</x-form>
