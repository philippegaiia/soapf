<x-app-layout>
    <x-slot name="header">
        <h2 class="flex items-center font-semibold text-xl text-gray-900 leading-tight">
            {{ __('Détails de la formule ') }} {{ $formula->code }} {{ $formula->name }}
        </h2>
    </x-slot>

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        {{-- <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg"> --}}
            {{-- <div class=" mx-auto px-6 py-3 bg-white border-b border-gray-200"> --}}
                <div class="flex items-center pb-3 text-right sm:justify-center md:justify-end ">

                    <x-buttons.add-button href="{{ route('formulas.create')}}" class="block bg-white">
                        {{ __('Ajouter un autre formule') }}
                    </x-buttons.add-button>

                    <x-buttons.edit-button-sm href="{{ route('formulas.edit', ['formula' => $formula]) }}" class="block ml-3">
                        {{ __('') }}
                    </x-buttons.edit-button-sm>

                    <form action="{{ route('formulas.destroy', ['formula' => $formula] )}}" method="POST">
                        @method('DELETE')
                        @csrf
                        <x-buttons.delete-button-sm class="ml-3" onclick="return confirm('Etes-vous certain d effacer la formule {{ $formula->name }}?')">
                        </x-buttons.delete-button-sm>
                    </form>

                    <x-buttons.liste-button
                        href="{{ route('formulas.index')}}" class="ml-3">
                    </x-buttons.liste-button>

                </div>

                <div class="bg-white shadow overflow-hidden sm:rounded-lg">

                    <div class="border-t border-gray-200">
                        <dl>
                            <div class="bg-gray-50 px-4 py-4 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                <dt class="description-dt">Nom de la formule</dt>
                                <dd class="description-dd">
                                {{ $formula->name }}
                                </dd>
                            </div>
                            <div class="bg-white px-4 py-4 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                <dt class="description-dt">
                                Code
                                </dt>
                                <dd class="description-dd">
                                {{ $formula->code }}
                                </dd>
                            </div>
                            <div class="bg-gray-50 px-4 py-4 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                <dt class="description-dt">
                                Référence
                                </dt>
                                <dd class="description-dd">
                                {{ $formula->ref_dip }}
                                </dd>
                            </div>

                            <div class="bg-white px-4 py-4 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                <dt class="description-dt">
                                Date d'application
                                </dt>
                                <dd class="description-dd">
                                {{ $formula->start_date_for_humans}}
                                </dd>
                            </div>

                            </div>
                            <div class="bg-gray-50 px-4 py-4 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                <dt class="description-dt">
                                Statut
                                </dt>
                                <dd class="description-dd">
                                {{ $formula->active  }}
                                </dd>
                            </div>

                            <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                <dt class="description-dt">Informations supplémentaires</dt>
                                <dd class="description-dd">
                                    {{ $formula->infos }}
                                </dd>
                            </div>


                        {{-- <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                <dt class="text-sm font-medium text-gray-500">
                                Attachments
                                </dt>
                                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                <ul class="border border-gray-200 rounded-md divide-y divide-gray-200">
                                    <li class="pl-3 pr-4 py-3 flex items-center justify-between text-sm">
                                        <div class="w-0 flex-1 flex items-center">
                                            <!-- Heroicon name: paper-clip -->
                                            <svg class="flex-shrink-0 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd" d="M8 4a3 3 0 00-3 3v4a5 5 0 0010 0V7a1 1 0 112 0v4a7 7 0 11-14 0V7a5 5 0 0110 0v4a3 3 0 11-6 0V7a1 1 0 012 0v4a1 1 0 102 0V7a3 3 0 00-3-3z" clip-rule="evenodd" />
                                            </svg>
                                            <span class="ml-2 flex-1 w-0 truncate">
                                            resume_back_end_developer.pdf
                                            </span>
                                        </div>
                                        <div class="ml-4 flex-shrink-0">
                                            <a href="#" class="font-medium text-indigo-600 hover:text-indigo-500">
                                            Download
                                            </a>
                                        </div>
                                    </li>
                                    <li class="pl-3 pr-4 py-3 flex items-center justify-between text-sm">
                                        <div class="w-0 flex-1 flex items-center">
                                            <!-- Heroicon name: paper-clip -->
                                            <svg class="flex-shrink-0 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd" d="M8 4a3 3 0 00-3 3v4a5 5 0 0010 0V7a1 1 0 112 0v4a7 7 0 11-14 0V7a5 5 0 0110 0v4a3 3 0 11-6 0V7a1 1 0 012 0v4a1 1 0 102 0V7a3 3 0 00-3-3z" clip-rule="evenodd" />
                                            </svg>
                                            <span class="ml-2 flex-1 w-0 truncate">
                                            coverletter_back_end_developer.pdf
                                            </span>
                                        </div>
                                        <div class="ml-4 flex-shrink-0">
                                            <a href="#" class="font-medium text-indigo-600 hover:text-indigo-500">
                                            Download
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                                </dd>
                            </div> --}}
                        </dl>
                    </div>
                </div>
            {{-- </div>
        </div> --}}
        <div class="max-w-7xl mt-4 mx-auto sm:px-6 lg:px-8 ">
            <div class="border-t-2 border-dashed border-indigo-200"></div>
            <livewire:formulas.items :formulaId="$formula->id">
        </div>
    </div>
</x-app-layout>
