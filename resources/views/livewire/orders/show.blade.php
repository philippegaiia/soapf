<div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        {{-- <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg"> --}}
            {{-- <div class=" mx-auto px-6 py-3 bg-white border-b border-gray-200"> --}}
                <div class="flex items-center pb-3 text-right sm:justify-center md:justify-end ">

                    {{-- <x-buttons.secondary-button href="{{ route('ingredients.create') }}" class="block">
                        {{ __('Créer un nouvel ingrédient') }}
                    </x-buttons.secondary-button>

                    <x-buttons.edit-button-sm href="{{ route('ingredients.edit', ['ingredient' => $ingredient]) }}" class="block ml-3">
                        {{ __('') }}
                    </x-buttons.edit-button-sm>

                    <form action="{{ route('ingredients.destroy', ['ingredient' => $ingredient] )}}" method="POST">
                        @method('DELETE')
                        @csrf
                        <x-buttons.delete-button-sm class="ml-4" onclick="return confirm('Etes-vous certain de supprimer {{ $ingredient->name }}?')">
                        </x-buttons.delete-button-sm>
                    </form>--}}
                    <x-buttons.primary wire:click="create" ><x-icons.plus />Nouvelle commande</x-buttons.primary>

                    <x-buttons.edit-button-modal-sm wire:click="edit({{ $order->id }})" class="ml-3"></x-buttons.edit-button-modal-sm>

                    <x-buttons.liste-button
                        href="{{ route('orders.index')}}" class="ml-3">
                    </x-buttons.liste-button>

                </div>

                <div class="bg-white shadow-lg overflow-hidden sm:rounded-lg">

                    <div class="border-t border-gray-200">
                        <dl>
                            <div class="bg-white px-4 py-4 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                <dt class="description-dt">Fournisseur</dt>
                                <dd class="description-dd">{{ $order->supplier->name }}</dd>
                            </div>

                            <div class="bg-white px-4 py-4 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                <dt class="description-dt">No Commande</dt>
                                <dd class="description-dd">{{ $order->order_ref }}
                                <span class="ml-12 px-3 py-1 rounded-full text-lg font-semibold leading-4 bg-{{ $order->active_color }}-100 text-{{ $order->active_color }}-800 capitalize">
                                    {{ $order->active_name }}
                                </span></dd>
                            </div>

                            <div class="bg-white px-4 py-4 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                <dt class="description-dt">Date Commande</dt>
                                <dd class="description-dd">{{ $order->order_date_for_humans }}</dd>
                            </div>

                            <div class="bg-gray-50 px-4 py-4 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                <dt class="description-dt">Date de livraison</dt>
                                <dd class="description-dd">{{ $order->delivery_date_for_humans }}</dd>
                            </div>

                            <div class="bg-white px-4 py-4 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                <dt class="description-dt">No Confirmation de Commande</dt>
                                <dd class="description-dd">{{ $order->confirmation_no }}</dd>
                            </div>

                            <div class="bg-gray-50 px-4 py-4 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                <dt class="description-dt">No BL</dt>
                                <dd class="description-dd">{{ $order->bl_no}} </dd>
                            </div>

                            <div class="bg-gray-50 px-4 py-4 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                <dt class="description-dt">No Facture</dt>
                                <dd class="description-dd">{{ $order->invoice_no}}</dd>
                            </div>


                                <div class="bg-white px-4 py-4 sm:grid sm:grid-cols-8 sm:gap-4 sm:px-6">

                                        <dt class="description-dt">Montant HT</dt>
                                        <dd class="description-dd">{{ $order->amount}} Euros</dd>

                                        <dt class="description-dt">Freight</dt>
                                        <dd class="description-dd">{{ $order->freight}} Euros</dd>

                                </div>

                            <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                <dt class="description-dt">
                                Informations supplémentaires
                                </dt>
                                <dd class="description-dd">
                                    {{ $order->infos }}
                                </dd>
                            </div>
                            <div>

                            </div>

                        </dl>
                    </div>
            {{-- </div> --}}
        {{-- </div> --}}

{{-- </div>
</div> --}}

{{-- Modal for edit --}}
    <div >
        <form wire:submit.prevent="save">
            <x-dialog-modal wire:model.defer="showEditModal" >

                <x-slot name="title">Mettre à Jour l'approvisionnement</x-slot>

                <x-slot name="content">
                    <!-- Supplier -->
                    <x-input.group for="supplier" label="Statut" :error="$errors->first('editing.supplier_id')">
                        <x-input.select wire:model="editing.supplier_id" id="supplier">
                            @foreach ($suppliers as $supplier)
                                <option value="{{ $supplier->id }}">{{ $supplier->name }}</option>
                            @endforeach
                        </x-input.select>
                    </x-input.group>

                    <!-- Order ref -->
                    <x-input.group for="order_ref" label="Référence Commande" :error="$errors->first('editing.order_ref')">
                        <x-input.text wire:model="editing.order_ref" id="order_ref" />
                    </x-input.group>

                    <!-- Order date -->
                    <x-input.group for="order_date_for_editing" label="Date commande" :error="$errors->first('editing.order_date_for_editing')">
                        <x-input.date wire:model="editing.order_date_for_editing" id="order_date_for_editing" />
                    </x-input.group>

                    <!-- delivery date -->
                    <x-input.group for="delivery_date_for_editing" label="Date de livraison" :error="$errors->first('editing.delivery_date_for_editing')">
                        <x-input.date wire:model="editing.delivery_date_for_editing" id="delivery_date_for_editing" />
                    </x-input.group>

                    <!-- Order confirmation number -->
                    <x-input.group for="confirmation_no" label="No Confirmation" :error="$errors->first('editing.confirmation_no')">
                        <x-input.text wire:model="editing.confirmation_no" id="bl_no" />
                    </x-input.group>

                    <!-- BL  number -->
                    <x-input.group for="bl_no" label="No Bon de Livraison" :error="$errors->first('editing.bl_no')">
                        <x-input.text wire:model="editing.bl_no" id="bl_no" />
                    </x-input.group>

                    <!-- Invoice number-->
                    <x-input.group for="invoice_no" label="No Facture" :error="$errors->first('editing.invoice_no')">
                        <x-input.text wire:model="editing.invoice_no" id="invoice_no" />
                    </x-input.group>

                    <!-- Statut -->
                    <x-input.group for="active" label="Statut" :error="$errors->first('editing.active')">
                        <x-input.select wire:model="editing.active" id="active">
                            @foreach (App\Models\Order::STATUSES as $value => $label)
                                <option value="{{ $value }}">{{ $label }}</option>
                            @endforeach
                        </x-input.select>
                    </x-input.group>

                    <x-input.group  for="amount" label="Montant HT" :error="$errors->first('editing.amount')">
                        <x-input.money wire:model.lazy="editing.amount" id="amount" />
                    </x-input.group>

                    <x-input.group  for="freight" label="Freight" :error="$errors->first('editing.freight')">
                        <x-input.money wire:model.lazy="editing.freight" id="freight" />
                    </x-input.group>

                    <!-- Infos -->
                    {{-- <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start mt-3">
                        <x-label for="infos" :value="__('Informations')" />
                        <div class="col-span-2">
                            <x-textarea id="infos" class="block mt-1 w-full" rows="5" name="infos" :value="old('infos') ?? $order->infos"/>
                            <x-input-error for="infos" class="mt-2" />
                        </div>
                    </div> --}}

                    <x-input.group for="infos" label="Infos" :error="$errors->first('editing.infos')">
                        <x-input.textarea wire:model="editing.infos" id="infos" />
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
<div>
    <livewire:supply.add-supply :supplierId="$order->supplier_id" :orderId="$order->id" />
</div>


