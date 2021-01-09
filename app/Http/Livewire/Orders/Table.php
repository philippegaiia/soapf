<?php

namespace App\Http\Livewire\Orders;

use App\Models\Order;
use Livewire\Component;
use Livewire\WithPagination;

class Table extends Component
{
    use WithPagination;

    public $search = '';
    public $sortField = 'order_ref';
    public $sortDirection = 'asc';
    public $showEditModal = false;
    public Order $editing;

    protected $queryString = ['sortField', 'sortDirection'];

    protected $rules = [
        'editing.order_ref' => 'required',
    ];

    public function sortBy($field)
    {
        if ($this->sortField === $field) {
            $this->sortDirection = $this->sortDirection === 'asc' ? 'desc' : 'asc';
        } else {
            $this->sortDirection = 'asc';
        }

        $this->sortField = $field;
    }

    public function edit(Order $order)
    {
        $this->editing  = $order;
        $this->showEditModal = true;

    }

    public function save()
    {
        $this->validate();
        $this->editing->save();
        $this->showEditModal = false;
    }

    public function render()
    {
        return view('livewire.orders.table', [
            'orders' =>Order::search('order_ref', $this->search)
            ->orderBy($this->sortField, $this->sortDirection)
            ->paginate(10),
        ]);
    }
}
