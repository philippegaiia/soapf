<div class="space-y-4 py-4">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="flex items-center pb-3 text-right sm:justify-center md:justify-end ">
            <x-buttons.edit-button-modal-sm wire:click="edit({{ $production->id }})" class="ml-3"></x-buttons.edit-button-modal-sm>
            <x-buttons.liste-button
                href="{{ route('productions.index')}}" class="ml-3">
            </x-buttons.liste-button>
        </div>
        <div class="bg-white shadow-lg overflow-hidden sm:rounded-lg">

            <div class="bproduction-t bproduction-gray-200">
                <dl>
                    <div class="bg-white px-4 py-4 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="description-dt">Ingrédient</dt>
                        <dd class="description-dd">{{ $production->formula->name }}</dd>
                    </div>

                    <div class="bg-white px-4 py-4 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="description-dt">No Production</dt>
                        <dd class="description-dd">{{ $production->code }}</dd>
                    </div>

                    <div class="bg-gray-50 px-4 py-4 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="description-dt">No BL</dt>
                        <dd class="description-dd">{{ $production->bl_no}} </dd>
                    </div>

                    <div class="bg-white px-4 py-4 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="description-dt">No Facture</dt>
                        <dd class="description-dd">{{ $production->invoice_no}}</dd>
                    </div>
                    <div class="bg-gray-50 px-4 py-4 sm:grid sm:grid-cols-9 sm:gap-4 sm:px-6">
                        <dt class="description-dt col-span-3">Détail facture</dt>

                        <dt class="description-dt">Montant HT:</dt>
                        <dd class="description-dd">{{ $production->amount}} Euros</dd>

                        <dt class="description-dt">Freight:</dt>
                        <dd class="description-dd">{{ $production->freight}} Euros</dd>
                    </div>

                    <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="description-dt">
                        Informations supplémentaires
                        </dt>
                        <dd class="description-dd">
                            {{ $production->infos }}
                        </dd>
                    </div>
                </dl>
            </div>
            {{-- Modal for edit --}}
            <div >
                <form wire:submit.prevent="save">
                    <x-dialog-modal wire:model.defer="showEditModal" >

                        <x-slot name="title">Mettre à Jour l'approvisionnement</x-slot>

                        <x-slot name="content">
                            <!-- Supplier -->
                            {{-- <x-input.group for="supplier" label="Statut" :error="$errors->first('editing.supplier_id')">
                                <x-input.select wire:model="editing.supplier_id" id="supplier">
                                    @foreach ($suppliers as $supplier)
                                        <option value="{{ $supplier->id }}">{{ $supplier->name }}</option>
                                    @endforeach
                                </x-input.select>
                            </x-input.group> --}}

                            <!-- production ref -->
                            <x-input.group for="production_ref" label="Référence Commande" :error="$errors->first('editing.production_ref')">
                                <x-input.text wire:model.debounce.2000="editing.production_ref" id="production_ref" />
                            </x-input.group>

                            <!-- production date -->
                            <x-input.group for="production_date_for_editing" label="Date commande" :error="$errors->first('editing.production_date_for_editing')">
                                <x-input.date wire:model="editing.production_date_for_editing" id="production_date_for_editing" />
                            </x-input.group>

                            <!-- delivery date -->
                            <x-input.group for="delivery_date_for_editing" label="Date de livraison" :error="$errors->first('editing.delivery_date_for_editing')">
                                <x-input.date wire:model="editing.delivery_date_for_editing" id="delivery_date_for_editing" />
                            </x-input.group>

                            <!-- production confirmation number -->
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
                                    @foreach (App\Models\production::STATUSES as $value => $label)
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

                            {{-- <x-button class="ml-2" wire:loading.attr="disabled">
                                {{ __('Save') }}
                            </x-button> --}}
                            <x-buttons.primary type="submit">{{ __('Enregistrer') }}</x-buttons.primary>
                        </x-slot>
                    </x-dialog-modal>
                </form>
            </div>
        </div>
        <div >
            <div class="border-t-2 mt-4 border-dashed border-indigo-200"></div>
            {{-- <livewire:productions.items  :productionId="$production->id" :ingredientId="$production->ingredient_id"> --}}
        </div>
    </div>
</div>
