<?php

namespace App\Http\Livewire\Formulas;

use App\Models\Formula;
use Livewire\Component;
use App\Models\Ingredient;
use App\Models\FormulaItem;

class Items extends Component
{

    public $search = '';
    public $sortField = 'phase';
    public $sortDirection = 'asc';
    public $showEditModal = false;
    // public $showFilters = false;
    // public $filters = [
    //     'status' => '',
    //     'amount-min' => null,
    //     'amount-max' => null,
    //     'date-min' => null,
    //     'date-max' => null
    // ];

    public $ingredients;

    public $formulaId;

    public FormulaItem $editing;

    protected $queryString = ['sortField', 'sortDirection'];

    protected function rules() {

        return [
            'editing.ingredient_id' => 'required',
            'editing.formula_id' => 'required',
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
        $this->editing = $this->makeBlankOrder();

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

    public function makeBlankOrder()
    {
        return FormulaItem::make([
            'organic' => 0,
            'phase' => 0,
            'ingredient_id' => 1,
            'formula_id' => $this->formulaId,
        ]);
    }


    public function create()
    {
        if ($this->editing->getKey()) $this->editing = $this->makeBlankOrder();
        // dd($this->editing);
        $this->showEditModal = true;
    }


    public function edit(FormulaItem $item)
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
        return view('livewire.formulas.items', [
            'items' => FormulaItem::where('formula_id', $this->formulaId)
            ->orderBy($this->sortField, $this->sortDirection)
            ->get(),
        ]);
    }
}