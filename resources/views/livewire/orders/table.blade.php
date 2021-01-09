<div class="py-4 space-y-4 ">

    <div class="w-1/4">
        <x-input class="min-w-full focus:m-5" type="text" wire:model.debounce.400ms="search" placeholder="Rechercher une commande..." />
    </div>


    <div class="flex-col space-y-4">

        <x-tables.table>

            <x-slot name="head">

                <x-tables.heading sortable wire:click="sortBy('order_ref')" :direction="$sortField === 'order_ref' ? $sortDirection : null">No Appro</x-tables.heading>

                <x-tables.heading sortable wire:click="sortBy('supplier_id')" :direction="$sortField === 'supplier_id' ? $sortDirection : null">Fournisseur</x-tables.heading>

                <x-tables.heading sortable wire:click="sortBy('order_date')" :direction="$sortField === 'order_date' ? $sortDirection : null">Date Commande</x-tables.heading>

                <x-tables.heading sortable wire:click="sortBy('delivery_date')" :direction="$sortField === 'delivery_date' ? $sortDirection : null">Date Livraison</x-tables.heading>

                <x-tables.heading sortable wire:click="sortBy('active')">Statut</x-tables.heading>

                <x-tables.heading/>

            </x-slot>

            <x-slot name="body">
                @forelse ($orders as $order)

                <x-tables.row wire:loading.class.delay="opacity-50">

                    <x-tables.cell>{{$order->order_ref}}</x-tables.cell>

                    <x-tables.cell>{{$order->supplier->name}}</x-tables.cell>

                    <x-tables.cell>{{$order->order_date_for_humans}}</x-tables.cell>

                    <x-tables.cell>{{$order->delivery_date_for_humans}}</x-tables.cell>

                    <x-tables.cell>

                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium leading-4 bg-{{ $order->active_color }}-100 text-{{ $order->active_color }}-800 capitalize">
                            {{ $order->active }}
                        </span>

                    </x-tables.cell>

                     <x-tables.cell>

                        {{-- <x-buttons.edit-button-sm wire:click="edit"></x-buttons.edit-button-sm> --}}
                        <x-buttons.edit-button-modal-sm wire:click="edit({{ $order->id }})"></x-buttons.edit-button-modal-sm>


                        <x-buttons.show-button-sm href="{{ route('orders.show', ['order' => $order]) }}" class="ml-4"></x-buttons.show-button-sm>

                    </x-tables.cell>

                </x-tables.row>

                @empty
                    <x-tables.row >
                        <x-tables.cell colspan="5">
                            <div class="flex justify-center items-center">
                                <span class="py-8 text-gray-400 font-medium text-xl">Aucune commande trouvée</span>
                            </div>
                        </x-tables.cell>
                    </x-tables.row>
                @endforelse

            </x-slot>

        </x-tables.table>

        <div class="">
            {{ $orders->links() }}
        </div>

    </div>



{{-- Modal for edit --}}
    <div>
        <form wire:submit.prevent="save">
            <x-dialog-modal wire:model.defer="showEditModal">

                <x-slot name="title">Mettre à Jour l'approvisionnement</x-slot>

                <x-slot name="content">
                    <!-- Order ref -->

                    <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start">
                        <x-label for="order_ref" :value="__('Référence Commande')" class="py-2 text-base"/>
                        <div class="col-span-2">
                            <x-input id="order_ref" wire:model="editing.order_ref" class="block w-full " type="text"  autofocus />
                            <x-input-error for="editing.order_ref" class="mt-1" />
                        </div>
                    </div>

                    <x-input.group for='order_ref' label="No Commande" :error="$errors->first('editing.order_ref')">
                        <x-input.text wire:model="editing.order_ref" id="order_ref" />
                    </x-input.group>

                    {{-- <!-- Order date -->
                    <div class="mt-4">
                        <x-label for="order_date" :value="__('Date commande')" />
                        <x-input id="order_date" class="mt-1 w-full" type="date" name="order_date" :value="old('order_date') ?? $order->order_date" required autofocus />
                        <x-input-error for="order_date" class="mt-2" />
                    </div>

                    <!-- delivery date -->
                    <div class="mt-4">
                        <x-label for="delivery_date" :value="__('Date de livraison')" />
                        <x-input id="delivery_date" class="mt-1 w-full" type="date" name="delivery_date" :value="old('delivery_date') ?? $order->delivery_date" autofocus />
                        <x-input-error for="delivery_date" class="mt-2" />
                    </div>

                    <!-- Statut -->
                    <div class="mt-4">
                        <x-label for="active" :value="__('Statut')" />
                        <select id="active" name="active"  class="mt-1 block w-full py-2 px-3 rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                        <option value="" disabled>Position de la commande</option>
                            @foreach ($order->activeOptions() as $activeOptionKey => $activeOptionValue)
                                <option value="{{ $activeOptionKey }}" {{ (old('active') == $activeOptionValue || $order->active == $activeOptionValue) ? 'selected' : '' }}>{{ $activeOptionValue }}</option>
                            @endforeach
                        </select>
                    </div>


                    <!-- order confirmation number-->
                    <div class="mt-4">
                        <x-label for="confirmation_no" :value="__('Numéro Confirmation de Commande')" />
                        <x-input id="confirmation_no" class="block mt-1 w-full" type="text" name="confirmation_no" :value="old('confirmation_no') ?? $order->confirmation_no"  autofocus/>
                        <x-input-error for="confirmation_no" class="mt-2" />
                    </div>

                    <!-- bl number-->
                    <div class="mt-4">
                        <x-label for="bl_no" :value="__('Numéro de BL')" />
                        <x-input id="bl_no" class="block mt-1 w-full" type="text" name="bl_no" :value="old('bl_no') ?? $order->bl_no"  autofocus/>
                        <x-input-error for="bl_no" class="mt-2" />
                    </div>

                    <!-- invoice number -->
                    <div class="mt-4">
                        <x-label for="invoice_no" :value="__('Numéro Facture')" />
                        <x-input id="invoice_no" class="block mt-1 w-full" type="text" name="invoice_no" :value="old('invoice_no') ?? $order->invoice_no"/>
                        <x-input-error for="invoice_no" class="mt-2" />
                    </div>

                    <!-- Infos -->
                    <div class="mt-4">
                        <x-label for="infos" :value="__('Informations')" />
                        <x-textarea id="infos" class="block mt-1 w-full" rows="5" name="infos" :value="old('infos') ?? $order->infos"/>
                        <x-input-error for="infos" class="mt-2" />
                    </div>--}}
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
