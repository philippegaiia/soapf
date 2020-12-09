<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Créer un fournisseur') }}
        </h2>
    </x-slot>

    <div class="py-10">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="max-w-4xl mx-auto p-6 bg-white border-b border-gray-200">

                    <form method="POST" action="{{ route('suppliers.store') }}">
                    @csrf

                    <!-- Code -->
                    <div class="mt-4">
                        <x-label for="code" :value="__('Code Fournisseur')" />
                        <x-input id="code" class="block mt-1 w-full" type="text" name="code" :value=" old('code')" required autofocus />
                        @error('code')
                            <span class="text-red-400 text-sm">
                                <span>{{ $message }}</span>
                            </span>
                        @enderror
                     </div class="mt-4">



                    <!-- Name -->
                    <div class="mt-4">
                        <x-label for="name" :value="__('Société')" />

                        <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
                         @error('name')
                            <span class="text-red-400 text-sm">
                                <span>{{ $message }}</span>
                            </span>
                        @enderror
                    </div>

                    <!-- Statut -->
                    <div class="mt-4">
                        {{-- <x-label for="active" :value="__('Statut')" /> --}}
                        {{-- <x-select id="active" class="block mt-1 w-full"  name="active" autofocus />
                         <option value="" disabled>Sélectionner une situation</option>
                            @foreach ($supplier->activeOptions() as $activeOptionKey => $activeOptionValue)
                                <option value="{{ $activeOptionKey }}">{{ $activeOptionValue }}</option>
                            @endforeach
                        </x-select> --}}
                        <label for="active" class="block text-sm font-medium text-gray-700">Statut</label>
                        <select id="active" name="active"  class="mt-1 block w-full py-2 px-3 rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                        <option value="" disabled>Sélectionner une situation</option>
                            @foreach ($supplier->activeOptions() as $activeOptionKey => $activeOptionValue)
                                <option value="{{ $activeOptionKey }}" {{ $supplier->active == $activeOptionValue ? 'selected' : '' }}>{{ $activeOptionValue }}</option>
                            @endforeach
                        </select>
                    </div>

                    <!-- Contact -->
                    <div class="mt-4">
                        <x-label for="contact" :value="__('Nom Contact')" />

                        <x-input id="contact" class="block mt-1 w-full" type="text" name="contact" :value="old('contact')"/>
                         @error('contact')
                            <span class="text-red-400 text-sm">
                                <span>{{ $message }}</span>
                            </span>
                        @enderror
                    </div>


                    <!-- Email Address -->
                    <div class="mt-4">
                        <x-label for="email" :value="__('Email')" />

                        <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"/>
                         @error('email')
                            <span class="text-red-400 text-sm">
                                <span>{{ $message }}</span>
                            </span>
                        @enderror
                    </div>

                    <!-- Tel -->
                    <div class="mt-4">
                        <x-label for="tel" :value="__('Tel')" />

                        <x-input id="tel" class="block mt-1 w-full" type="tel" name="tel" :value="old('tel')"/>
                         @error('tel')
                            <span class="text-red-400 text-sm">
                                <span>{{ $message }}</span>
                            </span>
                        @enderror
                    </div>

                    <!-- Address 1 -->
                    <div class="mt-4">
                        <x-label for="address1" :value="__('Adresse')" />

                        <x-input id="address1" class="block mt-1 w-full" type="text" name="address1" :value="old('address1')"/>
                         @error('address1')
                            <span class="text-red-400 text-sm">
                                <span>{{ $message }}</span>
                            </span>
                        @enderror
                    </div>

                    <!-- Address 2 -->
                    <div class="mt-4">
                        <x-label for="address2" :value="__('Adresse - suite')" />
                        <x-input id="address2" class="block mt-1 w-full" type="text" name="address2" :value="old('address2')"/>
                         @error('address2')
                            <span class="text-red-400 text-sm">
                                <span>{{ $message }}</span>
                            </span>
                        @enderror
                    </div>

                    <!-- ZIP CODE -->
                    <div class="mt-4">
                        <x-label for="zip" :value="__('Code Postal')" />
                        <x-input id="zip" class="block mt-1 w-full" type="text" name="zip" :value="old('zip')"/>
                         @error('zip')
                            <span class="text-red-400 text-sm">
                                <span>{{ $message }}</span>
                            </span>
                        @enderror
                    </div>

                    <!-- City -->
                    <div class="mt-4">
                        <x-label for="city" :value="__('Ville')" />
                        <x-input id="city" class="block mt-1 w-full" type="text" name="city" :value="old('city')"/>
                         @error('city')
                            <span class="text-red-400 text-sm">
                                <span>{{ $message }}</span>
                            </span>
                        @enderror
                    </div>

                    <!-- Country -->
                    <div class="mt-4">
                        <x-label for="country" :value="__('Pays')" />
                        <x-input id="country" class="block mt-1 w-full" type="text" name="country" :value="old('country')"/>
                         @error('country')
                            <span class="text-red-400 text-sm">
                                <span>{{ $message }}</span>
                            </span>
                        @enderror
                    </div>





                    <div class="flex items-center justify-end mt-4">
                        <x-button class="ml-4">
                            {{ __('Enregister') }}
                        </x-button>
                    </div>
                </form>

            </div>
        </div>

    </div>
</x-app-layout>
