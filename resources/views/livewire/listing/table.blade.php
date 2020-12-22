<div>
    <div class=" mx-auto px-6 py-3 bg-white border-b border-gray-200">
        <div class="flex items-center  pb-3 text-right  sm:justify-center md:justify-end ">
             <div class="w-3/6 mx-1">
            <input wire:model.debounce.600ms="search" type="text" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"placeholder="Search users...">
        </div>
        <div class="w-1/6 relative mx-1">
            <select wire:model="sortField" class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                <option value="name">Name</option>
                <option value="supplier_ref">Ref Fournisseur</option>
                <option value="code">Code</option>
                <option value="supplier_id">Fournisseur</option>
            </select>
            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
            </div>
        </div>
        <div class="w-1/6 relative mx-1">
            <select wire:model="sortAsc" class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                <option value="1">Ascending</option>
                <option value="0">Descending</option>
            </select>
            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
            </div>
        </div>
        <div class="w-1/6 relative mx-1">
            <select wire:model="perPage" class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                <option>10</option>
                <option>25</option>
                <option>50</option>
                <option>100</option>
            </select>
            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
            </div>
        </div>
        <div class="w-1/6 relative mx-1">
            <button wire:click="deleteListings" class="block appearance-none w-full bg-red-500 border border-gray-200 text-white py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500">Delete</button>
        </div>
            <x-buttons.secondary-button href="{{ route('suppliers.index') }}" class="block">
                {{ __('Créer un nouveau listing') }}
            </x-buttons.secondary-button>
        </div>
        <div class="">
            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                    <div class="mb-4 shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                        @if ($listings->isNotEmpty())


                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col" class="table-head">
                                        Code
                                    </th>
                                    <th scope="col" class="table-head">
                                        Ref. Fournisseur
                                    </th>
                                    <th scope="col" class="table-head">
                                        Désignation
                                    </th>
                                    <th scope="col" class="table-head">
                                        Fournisseur
                                    </th>
                                    <th scope="col" class="table-head">
                                        Actions
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                @forelse ($listings as $listing)
                                    <tr>


                                        <x-tables.table-detail>
                                            {{ $listing->code }}
                                        </x-tables.table-detail>

                                        <x-tables.table-active>
                                            {{ $listing->supplier_ref }}
                                        </x-tables.table-active>

                                        <x-tables.table-detail type="checkbox">
                                            {{ $listing->name }}
                                        </x-tables.table-detail>

                                        <x-tables.table-detail>
                                            {{ $listing->supplier->name }}
                                        </x-tables.table-detail>

                                        <td class=" whitespace-nowrap py-2 flex">

                                            {{-- <x-buttons.add-button  class="bg-pink-50 ml-3 hover:bg-pink-100">
                                                {{ __('Commande') }}
                                            </x-buttons.add-button>

                                            <x-buttons.add-button href="{{ route('listings.listings.create', ['listings' => $listings]) }}" class="bg-purple-50 hover:bg-purple-100 ml-3">
                                                {{ __('Listing') }}
                                            </x-buttons.add-button>

                                            <x-buttons.show-button-sm href="{{ route('listings.show', ['listings' => $listings]) }}" class="ml-4">
                                            </x-buttons.show-button-sm>

                                            <x-buttons.edit-button-sm href="{{ route('listings.edit', ['listings' => $listings] )}}" class="ml-4">
                                            </x-buttons.edit-button-sm>

                                            <form action="{{ route('listings.destroy', ['listings' => $listings] )}}" method="POST">
                                                @method('DELETE')
                                                @csrf
                                                <x-buttons.delete-button-sm class="ml-4" onclick="return confirm('Etes-vous certain d effacer le fournisseur {{ $listings->name }}?')">
                                                </x-buttons.delete-button-sm>
                                            </form> --}}
                                        </td>
                                    </tr>
                                    @empty
                                    <h3>Il n'y a pas de Fournisseurs enregistrés</h3>
                                @endforelse

                                 <!-- More rows... -->
                            </tbody>
                        </table>

                        @else
                         <p>No listings found</p>
                        @endif
                    </div>
                    {!! $listings->links() !!}
                </div>
            </div>
        </div>
    </div>
</div>
