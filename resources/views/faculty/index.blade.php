<div>

    <x-slot name="header">
        <h1>
            {{ __('faculty.all-faculties') }}
        </h1>
    </x-slot>

    <div class="hidden bg-white rounded-md overflow-hidden">

        <div class="px-6 py-4 flex justify-end items-center space-x-3 border-b">
            <h1 class="flex-grow text-gray-900 text-2xl tracking-wide font-semibold ">
                {{ __('faculty.create-new-faculty') }}
            </h1>
        </div>

        <x-faculty.create-form />

        <div class="px-6 py-2 flex justify-end items-center space-x-3 border-t">
            <h1 class="flex-grow"></h1>
            <button class="block px-3 py-1.5 text-gray-700 border border-gray-700 text-sm hover:text-white hover:bg-gray-700 tracking-normal text-center whitespace-nowrap align-middle cursor-pointer  rounded-md">
                {{ __('Cancel') }}
            </button>
            <button wire:click="save" class="block px-3 py-1.5 text-blue-700 border border-blue-700 text-sm hover:text-white hover:bg-blue-700 tracking-normal text-center whitespace-nowrap align-middle cursor-pointer  rounded-md">
                {{ __('Save') }}
            </button>
        </div>

    </div>

    <div class="mt-6 flex items-center px-6">
        <div class="flex-grow">
            <h2 class="text-lg font-semibold tracking-wide">
                {{ __('faculty.all-faculties') }}
            </h2>
        </div>
        <div>

            <!-- Button trigger modal -->
            <button data-bs-toggle="modal" data-bs-target="#create-faculty-modal" class="block px-3 py-1.5 text-blue-700 border border-blue-700 text-sm hover:text-white hover:bg-blue-700 tracking-normal text-center whitespace-nowrap align-middle cursor-pointer  rounded-md">
                {{ __('faculty.create-new-faculty') }}
            </button>

            <!-- Modal -->
            <div class="modal fade" id="create-faculty-modal" tabindex="-1" aria-labelledby="create-faculty-modal-label" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="px-6 py-4 flex justify-end items-center space-x-3 border-b">
                            <h1 class="flex-grow text-gray-900 text-2xl tracking-wide font-semibold ">
                                {{ __('faculty.create-new-faculty') }}
                            </h1>
                        </div>
                        <div class="modal-body">
                            <x-faculty.create-form />
                        </div>

                        <div class="px-6 py-4 flex justify-end items-center space-x-3 border-t">
                            <h1 class="flex-grow"></h1>
                            <button type="button" data-bs-dismiss="modal" class="block px-3 py-1.5 text-gray-700 border border-gray-700 text-sm hover:text-white hover:bg-gray-700 tracking-normal text-center whitespace-nowrap align-middle cursor-pointer  rounded-md">
                                {{ __('Cancel') }}
                            </button>
                            <button type="button" data-bs-dismiss="modal" wire:click="save" class="block px-3 py-1.5 text-blue-700 border border-blue-700 text-sm hover:text-white hover:bg-blue-700 tracking-normal text-center whitespace-nowrap align-middle cursor-pointer  rounded-md">
                                {{ __('Save') }}
                            </button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="mt-6 bg-white p-4 rounded-md overflow-hidden">

        <div>
            @forelse($faculties as $faculty)
                <div>
                    {{ $faculty->name }}
                </div>
            @empty
                <div>
                    nothing to show !
                </div>
            @endforelse
        </div>
    </div>

</div>
