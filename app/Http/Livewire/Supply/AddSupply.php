<?php

namespace App\Http\Livewire\Supply;

use Livewire\Component;

class AddSupply extends Component
{
     public $modalFormVisible = false;

    /**
     * Shows the form modal of the public function
     *
     * @return void
     */
    public function createShowModal()
    {
        $this->modalFormVisible = true;
    }

    public function create()
    {

    }

    public function render()
    {
        return view('livewire.supply.add-supply');
    }
}
