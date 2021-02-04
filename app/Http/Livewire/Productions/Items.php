<?php

namespace App\Http\Livewire\Productions;

use Livewire\Component;
use App\Models\Ingredient;
use App\Models\ProductionItem;

class Items extends Component
{
     public $search = '';
    public $sortField = 'phase';
    public $sortDirection = 'asc';
    public $showEditModal = false;


    public $ingredients;

    public $formulaId;
    public $productionId;

    public ProductionItem $editing;

    protected $queryString = ['sortField', 'sortDirection'];

    protected function rules() {

        return [
            'editing.ingredient_id' => 'required',
            'editing.listing_id' => 'required',
            'editing.percentoils_dip' => 'required|numeric|min:0|max:100',
            'editing.percentoils_real' => 'required|numeric|min:0|max:100',
            'editing.percenttotal_dip' => 'required|numeric|min:0|max:100',
            'editing.percenttotal_real' => 'required|numeric|min:0|max:100',
            'editing.organic' => 'required',
            'editing.phase' => 'required',
        ];
    }

    public function mount()
    {

        $this->ingredients = Ingredient::all();
        $this->editing = $this->makeBlankSupply();

    }

    public function sortBy($field)
    {
        if ($this->sortField === $field) {
            $this->sortDirection = $this->sortDirection === 'asc' ? 'desc' : 'asc';
        } else {
            $this->sortDirection = 'asc';
        }

        $this->sortField = $field;
    }

    public function makeBlankSupply()
    {
        return ProductionItem::make([
            'organic' => 0,
            'phase' => 0,
            'ingredient_id' => 1,
            'production_id' => $this->productionId,
            'listing_id' => 1,
        ]);
    }


    public function create()
    {
        if ($this->editing->getKey()) $this->editing = $this->makeBlankSupply();
        // dd($this->editing);
        $this->showEditModal = true;
    }


    public function edit(ProductionItem $item)
    {
        if ($this->editing->isNot($item)) $this->editing = $item;
        $this->showEditModal = true;
    }


    public function save()
    {
        // dd($this->editing);
        $this->validate();
        $this->editing->save();
        $this->showEditModal = false;
    }

    public function render()
    {
        return view('livewire.productions.items', [
            'items' => ProductionItem::where('production_id', $this->productionId)
            ->orderBy($this->sortField, $this->sortDirection)
            ->get(),
        ]);

    }

}
