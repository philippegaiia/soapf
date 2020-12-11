<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Liste des Fournisseurs') }}
        </h2>
    </x-slot>

    {{-- <div class="py-6"> --}}
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class=" mx-auto p-6 bg-white border-b border-gray-200">
                {{-- <div class="inline-flex align-center mb-2 "> --}}
                <div class="flex items-center  py-3 text-right  sm:justify-center md:justify-end ">
                    <a href="{{ route('suppliers.create') }}" >
                        <x-buttons.secondary-button class="block">
                            {{ __('Créer un nouveau fournisseur') }}
                        </x-buttons.secondary-button>
                    </a>
                </div>
                <div class="">
                    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                        <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                            <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                                <table class="min-w-full divide-y divide-gray-200">
                                    <thead class="bg-gray-50">
                                        <tr>
                                            <th scope="col" class="px-6 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Code
                                            </th>
                                            <th scope="col" class="px-6 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Société
                                            </th>
                                            <th scope="col" class="px-6 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Statut
                                            </th>
                                            <th scope="col" class="px-6 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Ville
                                            </th>
                                            <th scope="col" class="px-6 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Actions
                                            </th>
                                            <th scope="col" class="relative px-6 py-2">
                                                <span class="sr-only">Edit</span>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody class="bg-white divide-y divide-gray-200">
                                        @forelse ($suppliers as $supplier)
                                            <tr>
                                                <td class="px-3 py-2 whitespace-nowrap">
                                                    <div class="flex items-center">
                                                        <div class="ml-4">
                                                            <div class="text-sm font-medium text-gray-900">
                                                            {{ $supplier->code }}
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>

                                                <td class="px-3 py-2 whitespace-nowrap">
                                                    <div class="flex items-center">
                                                        <div class="ml-4">
                                                            <div class="text-sm font-medium text-gray-900">
                                                            {{ $supplier->name }}
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>

                                                <td class="px-6 py-2 whitespace-nowrap">
                                                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full {{ $supplier->active == 'Actif' ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-800' }}">
                                                        {{ $supplier->active }}
                                                    </span>
                                                </td>

                                                <td class="px-6 py-2 whitespace-nowrap text-sm text-gray-500">
                                                    {{ $supplier->zip }} {{ $supplier->city }}
                                                </td>

                                                <td class=" whitespace-nowrap py-2 flex">
                                                        <a href="{{ route('suppliers.create') }}">
                                                            <x-buttons.show-button-sm class="ml-4">

                                                            </x-buttons.show-button-sm>
                                                        </a>

                                                        <a href="{{ route('suppliers.create') }}">
                                                            <x-buttons.edit-button-sm class="ml-4">

                                                            </x-buttons.edit-button-sm>
                                                        </a>

                                                         <a href="{{ route('suppliers.create') }}">
                                                            <x-buttons.delete-button-sm class="ml-4">
                                                                {{ __('') }}
                                                            </x-buttons.delete-button-sm>
                                                        </a>
                                                </td>



                                            </tr>
                                            @empty
                                            <h3>Il n'y a pas de Fournisseurs enregistrés</h3>
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
    {{-- </div> --}}
</x-app-layout>
