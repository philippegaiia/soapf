<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Liste des Ingrédients') }}
        </h2>
    </x-slot>

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class=" mx-auto px-6 py-3 bg-white border-b border-gray-200">
                <div class="flex items-center  pb-3 text-right  sm:justify-center md:justify-end ">
                    <x-buttons.secondary-button href="{{ route('ingredients.create') }}" class="block">
                        {{ __('Créer un nouvel ingrédient') }}
                    </x-buttons.secondary-button>
                </div>
                <div class="">
                    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                        <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                            <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                                <table class="min-w-full divide-y divide-gray-200">
                                    <thead class="bg-gray-50">
                                        <tr>
                                            <th scope="col" class="table-head">
                                                Code
                                            </th>
                                            <th scope="col" class="table-head">
                                                Ingredient
                                            </th>
                                            <th scope="col" class="table-head">
                                                Code Inci
                                            </th>
                                            <th scope="col" class="table-head">
                                                Statut
                                            </th>
                                            <th scope="col" class="table-head">
                                                Categorie
                                            </th>
                                            <th scope="col" class="table-head">
                                                Actions
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody class="bg-white divide-y divide-gray-200">
                                        @forelse ($ingredients as $ingredient)
                                            <tr>
                                                <x-tables.table-detail>
                                                    {{ $ingredient->code }}
                                                </x-tables.table-detail>

                                                 <x-tables.table-detail>
                                                    {{ $ingredient->name }}
                                                </x-tables.table-detail>

                                                <x-tables.table-detail>
                                                    {{ $ingredient->inci }}
                                                </x-tables.table-detail>

                                                <x-tables.table-active class="{{ $ingredient->active == 'Actif' ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-800' }}">
                                                    {{ $ingredient->active }}
                                                </x-tables.table-active>

                                                 <x-tables.table-detail>
                                                    {{ $ingredient->ingredientCategory->name }}
                                                </x-tables.table-detail>

                                                <td class=" whitespace-nowrap py-2 flex">

                                                    <x-buttons.show-button-sm href="{{ route('ingredients.show', ['ingredient' => $ingredient]) }}" class="ml-4">
                                                    </x-buttons.show-button-sm>

                                                    <x-buttons.edit-button-sm href="{{ route('ingredients.edit', ['ingredient' => $ingredient] )}}" class="ml-4">
                                                    </x-buttons.edit-button-sm>

                                                    <form action="{{ route('ingredients.destroy', ['ingredient' => $ingredient] )}}" method="POST">
                                                        @method('DELETE')
                                                        @csrf
                                                        <x-buttons.delete-button-sm class="ml-4" onclick="return confirm('Etes-vous certain de supprimer {{ $ingredient->name }}?')">
                                                        </x-buttons.delete-button-sm>
                                                    </form>
                                                </td>
                                            </tr>
                                            @empty
                                            <h3>Il n'y a pas d'ingrédients' enregistrés</h3>
                                        @endforelse
                                        <!-- More rows... -->
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
