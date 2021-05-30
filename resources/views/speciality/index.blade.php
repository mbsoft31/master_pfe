<div>

    <x-slot name="header">
        <h1>
            {{ __('speciality.all-specialities') }}
        </h1>
    </x-slot>

    <div class="mt-6 flex items-center px-6">
        <div class="flex-grow">
            <h2 class="text-lg font-semibold tracking-wide">
                {{ __('speciality.all-specialities') }}
            </h2>
        </div>
        <div>
            <!-- Button trigger modal -->
            <button wire:click="openCreateModal" class="block px-3 py-1.5 text-blue-700 border border-blue-700 text-sm hover:text-white hover:bg-blue-700 tracking-normal text-center whitespace-nowrap align-middle cursor-pointer  rounded-md">
                {{ __('speciality.create-new-speciality') }}
            </button>
            <x-modal wire:model="create_modal">
                <div>
                    <div class="px-6 py-4 flex justify-end items-center space-x-3 border-b">
                        <h1 class="flex-grow text-gray-900 text-2xl tracking-wide font-semibold ">
                            {{ __('speciality.create-new-speciality') }}
                        </h1>
                    </div>
                    <div class="modal-body">
                        <x-speciality.create-form :departements="$departements" />
                    </div>

                    <div class="px-6 py-4 flex justify-end items-center space-x-3 border-t">
                        <h1 class="flex-grow"></h1>
                        <button wire:click="closeCreateModal" type="button" data-bs-dismiss="modal" class="block px-3 py-1.5 text-gray-700 border border-gray-700 text-sm hover:text-white hover:bg-gray-700 tracking-normal text-center whitespace-nowrap align-middle cursor-pointer  rounded-md">
                            {{ __('Cancel') }}
                        </button>
                        <button type="button" wire:click="save" class="block px-3 py-1.5 text-blue-700 border border-blue-700 text-sm hover:text-white hover:bg-blue-700 tracking-normal text-center whitespace-nowrap align-middle cursor-pointer  rounded-md">
                            {{ __('Save') }}
                        </button>
                    </div>
                </div>
            </x-modal>
        </div>
        <x-modal wire:model="edit_modal">
            <div>
                <div class="px-6 py-4 flex justify-end items-center space-x-3 border-b">
                    <h1 class="flex-grow text-gray-900 text-2xl tracking-wide font-semibold ">
                        {{ __('speciality.edit-speciality') }}
                    </h1>
                </div>
                <div class="modal-body">
                    <x-speciality.create-form :departements="$departements" />
                </div>

                <div class="px-6 py-4 flex justify-end items-center space-x-3 border-t">
                    <h1 class="flex-grow"></h1>
                    <button wire:click="cancel" class="block px-3 py-1.5 text-gray-700 border border-gray-700 text-sm hover:text-white hover:bg-gray-700 tracking-normal text-center whitespace-nowrap align-middle cursor-pointer  rounded-md">
                        {{ __('Cancel') }}
                    </button>
                    <button wire:click="edit" class="block px-3 py-1.5 text-green-700 border border-green-700 text-sm hover:text-white hover:bg-green-700 tracking-normal text-center whitespace-nowrap align-middle cursor-pointer  rounded-md">
                        {{ __('Save') }}
                    </button>
                </div>
            </div>
        </x-modal>
        <x-modal wire:model="delete_modal">
            <div>
                <div class="px-6 py-4 flex justify-end items-center space-x-3 border-b">
                    <h1 class="flex-grow text-gray-900 text-2xl tracking-wide font-semibold ">
                        {{ __('speciality.delete-speciality') }}
                    </h1>
                </div>
                <div class="modal-body">
                    delete this speciality ?
                </div>

                <div class="px-6 py-4 flex justify-end items-center space-x-3 border-t">
                    <h1 class="flex-grow"></h1>
                    <button wire:click="cancel" class="block px-3 py-1.5 text-gray-700 border border-gray-700 text-sm hover:text-white hover:bg-gray-700 tracking-normal text-center whitespace-nowrap align-middle cursor-pointer  rounded-md">
                        {{ __('Cancel') }}
                    </button>
                    <button wire:click="delete" class="block px-3 py-1.5 text-red-700 border border-red-700 text-sm hover:text-white hover:bg-red-700 tracking-normal text-center whitespace-nowrap align-middle cursor-pointer  rounded-md">
                        {{ __('Delete') }}
                    </button>
                </div>
            </div>
        </x-modal>
    </div>

    <div class="mt-6 bg-white p-4 rounded-md overflow-hidden">
        <div class="flex flex-col">
            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                    <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                            <tr>
                                <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    {{ __('speciality.name') }}
                                </th>

                                <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    {{ __('speciality.departement_id') }}
                                </th>
                                <th scope="col" class="relative px-6 py-3">
                                    <span class="sr-only">Action</span>
                                </th>
                            </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                            @forelse($specialities as $speciality)
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm text-gray-900">
                                            {{ $speciality->name }}
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                        <div class="text-sm text-gray-900">
                                            {{ $speciality->departement->name }}
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 space-x-2 whitespace-nowrap text-end text-sm font-medium">
                                        <button wire:click="$emit('editSpeciality', {{ $speciality }})" class="inline-block text-indigo-600 hover:text-indigo-900">{{__('Edit')}}</button>
                                        <button wire:click="$emit('deleteSpeciality', {{ $speciality }})" class="inline-block text-red-600 hover:text-red-900">{{__('Delete')}}</button>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4"  class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                        <div class="text-sm text-gray-900">
                                            {{ __('nothing to show !') }}
                                        </div>
                                    </td>
                                </tr>
                            @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
