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

                        <x-buttons.edit-button-sm wire:model="edit"></x-buttons.edit-button-sm>

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

</div>
