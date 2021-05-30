@props(['faculties'])
<x-form wire:submit.prevent="save">
    <div class="px-6 py-2">
        <div class="divide-y1">
            <x-form.control>
                <x-input.label for="faculty_id" :value="__('departement.faculty')"/>
                <x-input.select :types="$faculties" :noneSelected="false" id="faculty_id" wire:model="faculty_id" class="w-full"/>
                <x-input.error for="faculty_id"/>
            </x-form.control>
            <x-form.control>
                <x-input.label for="name" :value="__('departement.name')"/>
                <x-input.text id="name" wire:model.lazy="name" class="w-full"/>
                <x-input.error for="name"/>
            </x-form.control>
            <x-form.control>
                <x-input.label for="address" :value="__('departement.address')"/>
                <x-input.area id="address" wire:model.lazy="address" class="w-full"/>
                <x-input.error for="address"/>
            </x-form.control>
            <x-form.control>
                <x-input.label for="phone" :value="__('departement.phone')"/>
                <x-input.text id="phone" wire:model.lazy="phone" class="w-full"/>
                <x-input.error for="phone"/>
            </x-form.control>
        </div>
    </div>
</x-form>
