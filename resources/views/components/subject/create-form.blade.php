@props(['specialities'])
<x-form wire:submit.prevent="save">
    <div class="px-6 py-2">
        <div class="divide-y1">
            <x-form.control>
                <x-input.label for="title" :value="__('subject.title')"/>
                <x-input.text id="title" wire:model.lazy="title" class="w-full"/>
                <x-input.error for="title"/>
            </x-form.control>
            <x-form.control>
                <x-input.label for="degree" :value="__('subject.degree')"/>
                <x-input.select  :noneSelected="false" id="degree" wire:model="degree" class="w-full"/>
                <x-input.error for="degree"/>
            </x-form.control>
            <x-form.control>
                <x-input.label for="speciality_id" :value="__('subject.speciality')"/>
                <x-input.select  id="speciality_id" :noneSelected="false" wire:model="speciality_id" class="w-full"/>
                <x-input.error for="speciality_id"/>
            </x-form.control>
            <x-form.control>
                <x-input.label for="description" :value="__('subject.description')"/>
                <x-input.area id="description" wire:model.lazy="description" class="w-full"/>
                <x-input.error for="description"/>
            </x-form.control>
            <x-form.control>
                <x-input.label for="keywords" :value="__('subject.keywords')"/>
                <x-input.text id="keywords" wire:model.lazy="keywords" class="w-full"/>
                <x-input.error for="keywords"/>
            </x-form.control>


        </div>
    </div>
</x-form>
