<div class="p-6">
    <div class="flex items-center justify-end px-4 py-3 text-right sm:px-6">
        <x-button wire:click="createShowModal" >
        {{ __('Create') }}
        </x-button>
    </div>


    {{-- Modal form --}}
    <x-dialog-modal wire:model.defer="modalFormVisible">
        <x-slot name="title">
            {{ __('Save Page') }}
        </x-slot>

        <x-slot name="content">

            {{-- <div class="mt-4">
                <x-jet-label for="title"  value="{{ __('Title') }}">Title</x-jet-label>
                <x-jet-input id="title" type="text" wire:model.debounce.800ms="title" class="block mt-1 w-full"></x-jet-input>
            </div>

            <div class="mt-4">
                <x-jet-label for="slug"  value="{{ __('slug') }}">Title</x-jet-label>
                <div class="mt-1 flex rounded-md shadow-sm">
                    <span class="inline-flex items-center px-3 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 text-sm">
                        http://localhost:8000/
                    </span>
                    <input type="text" wire:model="slug" id="slug" class="form-input focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300" placeholder="url-slug">
                </div>
            </div>

            <div class="mt-4">
                <x-jet-label for="content"  value="{{ __('Content') }}">
                    <div class="rounded-md shadow-sm">
                        <div class="mt-1 bg-white">
                            <div class="body-content" wire:ignore>
                                <trix-editor
                                    class="trix-content"
                                    x-ref="trix"
                                    wire:model.debounce.100000ms="content"
                                    wire:key="trix-content-unique-key">
                                </trix-editor>
                            </div>
                        </div>
                    </div>
                </x-jet-label>
            </div> --}}

            {{-- <div class="mt-4">
                <x-jet-label for="content" :value="__('Content')" />
                <textarea id="content" class="block mt-1 w-full" rows="5" name="content" wire:model.debounce.100000ms="content"></textarea>
                <x-jet-input-error for="content" class="mt-2" />
            </div> --}}


        </x-slot>

        <x-slot name="footer">

            <x-secondary-button
            wire:click="$toggle('modalFormVisible')"
            wire:loading.attr="disabled">
                {{ __('Annulé') }}
            </x-secondary-button>

            <x-button class="ml-2" wire:click="create" wire:loading.attr="disabled">
                {{ __('Sauvegarder') }}
            </x-button>

        </x-slot>
    </x-dialog-modal>
</div>
