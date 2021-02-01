<div class="py-4 space-y-4 ">
    <div class="flex justify-between">

        <div class="w-2/4 flex space-x-4">
            {{-- <x-input class=" focus:m-5" type="text" wire:model.debounce.400ms="search" placeholder="Rechercher..." />
            <x-buttons.link wire:click="$toggle('showFilters')">@if ($showFilters) Masquer les @endIf Filtres...</x-buttons.link> --}}
        </div>
        <div>
            <x-buttons.primary wire:click="create" ><x-icons.plus />Nouvelle ligne de commande</x-buttons.primary>
        </div>
    </div>



        {{-- Supply items --}}
    <div class="flex-col space-y-4">

        <x-tables.table>

            <x-slot name="head">

                <x-tables.heading class="text-left">Ingrédient</x-tables.heading>

                <x-tables.heading class="text-left">No Lot</x-tables.heading>

                <x-tables.heading class="text-left">Packing</x-tables.heading>

                <x-tables.heading class="text-left">Qté U</x-tables.heading>

                <x-tables.heading class="text-left">Total</x-tables.heading>

                <x-tables.heading class="text-left">Statut</x-tables.heading>


                <x-tables.heading/>

            </x-slot>

            <x-slot name="body">

                @forelse ($supplies as $supply)

                <x-tables.row wire:loading.class.delay="opacity-50">

                    <x-tables.cell>{{\Illuminate\Support\Str::limit($supply->listing->name, 50, $end='...')}}</x-tables.cell>

                    <x-tables.cell>{{$supply->batch_no}}</x-tables.cell>

                    <x-tables.cell>{{ $supply->listing->pkg}} - {{ $supply->listing->unit_weight }} @if ($supply->listing->pkg != 'Unitaire') kg @endif</x-tables.cell>

                    <x-tables.cell>{{$supply->qty}}</x-tables.cell>

                    <x-tables.cell>{{$supply->qty * $supply->listing->unit_weight}} @if ($supply->listing->pkg != 'Unitaire') kg @endif</x-tables.cell>

                    <x-tables.cell>

                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium leading-4 bg-{{ $supply->active_color }}-100 text-{{ $supply->active_color }}-800 capitalize">
                            {{ $supply->active_name }}
                        </span>

                    </x-tables.cell>

                     <x-tables.cell>

                        <x-buttons.edit-button-modal-sm wire:click="edit({{ $supply->id }})"></x-buttons.edit-button-modal-sm>

                        {{-- <x-buttons.show-button-sm href="{{ route('orders.show', ['supply' => $supply]) }}" class="ml-2"></x-buttons.show-button-sm> --}}

                    </x-tables.cell>

                </x-tables.row>

                @empty
                    <x-tables.row >
                        <x-tables.cell colspan="9">
                            <div class="flex justify-center items-center">
                                <span class="py-8 text-gray-400 font-medium text-xl">Aucune lignes de commande trouvées</span>
                            </div>
                        </x-tables.cell>
                    </x-tables.row>
                @endforelse

            </x-slot>

        </x-tables.table>

        {{-- <div class="">
            {{ $orders->links() }}
        </div> --}}

    </div>

<!-- Modal for edit -->
    <div >
        <form wire:submit.prevent="save">
            <x-dialog-modal wire:model.defer="showEditModal" >

                <x-slot name="title">Ajouter un ingrédient à la commande</x-slot>

                <x-slot name="content">
                    <!-- Select a listing delonging to the supplier -->
                    <x-input.group for="listing" label="Ingrédient" :error="$errors->first('editing.listing_id')">
                        <x-input.select wire:model="editing.listing_id" id="listing">
                            @foreach ($listings as $listing)
                                <option value="{{ $listing->id }}">{{ $listing->name }}</option>
                            @endforeach
                        </x-input.select>
                    </x-input.group>

                    <!-- Batch No -->
                    <x-input.group for="batch_no" label="Batch" :error="$errors->first('editing.batch_no')">
                        <x-input.text wire:model="editing.batch_no" id="batch_no" />
                    </x-input.group>

                    <!-- Order date -->
                    <x-input.group for="expiry_date_for_editing" label="DLUO" :error="$errors->first('editing.expiryr_date_for_editing')">
                        <x-input.date wire:model="editing.expiry_date_for_editing" id="expiry_date_for_editing" />
                    </x-input.group>

                     <!-- Ordered quantity-->
                    <x-input.group for="qty" label="Quqntité unitaire" :error="$errors->first('qty')">
                        <x-input.text type="text" wire:model="editing.qty" id="qty" pattern="[0-9]+([\.|,][0-9]+)?" step="0.01" placeholder="000.00" required/>
                    </x-input.group>

                    <!-- Prix achat unitaire-->
                    <x-input.group  for="price" label="Montant HT" :error="$errors->first('editing.price')">
                        <x-input.money wire:model.lazy="editing.price" id="price" />
                    </x-input.group>

                    <!-- Statut -->
                    <x-input.group for="active" label="Statut" :error="$errors->first('editing.active')">
                        <x-input.select wire:model="editing.active" id="active">
                            @foreach (App\Models\Supply::STOCKSTATUSES as $value => $label)
                                <option value="{{ $value }}">{{ $label }}</option>
                            @endforeach
                        </x-input.select>
                    </x-input.group>

                </x-slot>
                    <x-slot name="footer">
                        <x-secondary-button
                        wire:click="$toggle('showEditModal')"
                        wire:loading.attr="disabled" >
                            {{ __('Annuler') }}
                        </x-secondary-button>

                        <x-button class="ml-2" wire:loading.attr="disabled">
                            {{ __('Save') }}
                        </x-button>
                    </x-slot>
            </x-dialog-modal>
        </form>
    </div>
</div>
