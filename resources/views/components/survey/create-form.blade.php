<x-form class="w-full" wire:submit.prevent="save">
    <div class="px-6 py-2">
        <div class="divide-y1">
            <x-form.control>
                <x-input.label for="title" :value="__('Survey.Title')"/>
                <x-input.text id="title" wire:model.lazy="state.title" class="w-full"/>
                <x-input.error for="title"/>
            </x-form.control>
            <x-form.control>
                <x-input.label for="description" :value="__('Survey.Description')"/>
                <x-input.area id="description" wire:model.lazy="state.description" class="w-full"/>
                <x-input.error for="description"/>
            </x-form.control>
        </div>
    </div>
</x-form>
