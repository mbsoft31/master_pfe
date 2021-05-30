@props(['departements'])
<x-form wire:submit.prevent="save">
    <div class="px-6 py-2">
        <div class="divide-y1">
            <x-form.control>
                <x-input.label for="departement_id" :value="__('speciality.departement')"/>
                <x-input.select :types="$departements" :noneSelected="false" id="departement_id" wire:model="departement_id" class="w-full"/>
                <x-input.error for="departement_id"/>
            </x-form.control>
            {{--  test --}}
            <x-form.control>
                <x-input.label for="degree" :value="__('speciality.degree')"/>
                <x-input.select :noneSelected="false" id="degree" wire:model="degree" class="w-full"/>
                <x-input.error for="degree"/>
            </x-form.control>
           {{--  --}}
            <x-form.control>
                <x-input.label for="name" :value="__('speciality.name')"/>
                <x-input.text id="name" wire:model.lazy="name" class="w-full"/>
                <x-input.error for="name"/>
            </x-form.control>
        </div>
    </div>
</x-form>
