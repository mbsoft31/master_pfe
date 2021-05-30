<div>

    <x-slot name="header">
        <h1>
            {{ __('subject') }}
        </h1>
    </x-slot>

    <div class="mt-6 flex items-center px-6">
        <div class="flex-grow">
            <h2 class="text-lg font-semibold tracking-wide">
                {{ __('Add subject') }}
            </h2>
        </div>
        <div>
            <!-- Button trigger modal -->


        </div>


    </div>

    <div class="mt-6 bg-white p-4 rounded-md overflow-hidden">
        <div class="flex flex-col">
            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                    <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                        <x-subject.create-form  />
                        <div class="px-6 py-4 flex justify-end items-center space-x-3 border-t">
                            <h1 class="flex-grow"></h1>

                            <button type="button" wire:click="save" class="block px-3 py-1.5 text-blue-700 border border-blue-700 text-sm hover:text-white hover:bg-blue-700 tracking-normal text-center whitespace-nowrap align-middle cursor-pointer  rounded-md">
                                {{ __('Save') }}
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
