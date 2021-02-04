<?php

namespace App\Http\Livewire\Productions;

use App\Models\Formula;
use Livewire\Component;
use App\Models\Production;
use App\Models\FormulaItem;
use Livewire\WithPagination;
use App\Models\ProductionItem;

class Index extends Component

{
    use WithPagination;

    public $search = '';
    public $sortField = 'code';
    public $sortDirection = 'asc';
    public $showEditModal = false;
    public $showFilters = false;
    public $filters = [
        'status' => '',
        'amount-min' => null,
        'amount-max' => null,
        'date-min' => null,
        'date-max' => null
    ];

    public $formulas;

    public $formulaId;

    public $formulaItems;

    public $productionId;

    public Production $editing;

    protected $queryString = ['sortField', 'sortDirection'];

    protected function rules() {

        return [
            'editing.formula_id' => 'required',
            'editing.code' => 'required|max:18',
            'editing.production_date_for_editing' => 'required|date',
            'editing.ready_date_for_editing' => 'after_or_equal:editing.production_date_for_editing',
            'editing.status' =>'required|in:'.collect(Production::STATUSES)->keys()->implode(','),
            'editing.infos' => 'nullable|max:500',
            'editing.oil_qty' => 'numeric|min:0|max:200000',
            'editing.total_qty' => 'numeric|min:0|max:200000',
            'editing.masterbatch' => 'required',
            'editing.cosmecert' => 'required',
        ];
    }

    public function mount()
    {
        $this->formulas = Formula::all();
        $this->editing = $this->makeBlankProduction();
    }

    public function createItems($id, $formula_id)
    {
        $formulaItems = FormulaItem::where('formula_id', $formula_id)
                ->select('ingredient_id','percentoils_dip','percentoils_real','percenttotal_dip','percenttotal_real','organic','phase')
                ->get();

        $listingId = 1;

        foreach($formulaItems as $formulaItem){
            // $formulaItem['listing_id' => $listingId];
            // dd($listingId);
            // FormulaItem::create([
            //     'production_id' => $id,
            //     'ingredient_id' => $formulaItem->ingredient_id,
            //     'listing_id'  => $listingId,
            //     'percentoils_real'  => $formulaItem->percentoils_real,
            //     'percenttotal_dip'  => $formulaItem->percenttotal_dip,
            //     'percenttotal_real'  => $formulaItem->percenttotal_real,
            //     'organic'  => $formulaItem->organic,
            //     'phase'  => $formulaItem->phase,
            // ]);
            // $formulaItem->save();

            $item = new ProductionItem([
                'production_id' => $id,
                'ingredient_id' => $formulaItem->ingredient_id,
                'listing_id'  => $listingId,
                'percentoils_real'  => $formulaItem->percentoils_real,
                'percenttotal_dip'  => $formulaItem->percenttotal_dip,
                'percenttotal_real'  => $formulaItem->percenttotal_real,
                'organic'  => $formulaItem->organic,
                'phase'  => $formulaItem->phase,

            ]);
            $production = Production::find($id);

            $production->production_items()->save($item);
            }

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

    public function makeBlankProduction()
    {
        return Production::make(['production_date' => now(),
                            'ready_date' =>now(),
                            'status' => 0,
                            'formula_id' => 1,
                            'total_oils' => 0,
                            'total_qty' => 0
                            ]);
    }

    public function create()
    {
        if ($this->editing->getKey()) $this->editing = $this->makeBlankProduction();
        $this->showEditModal = true;
    }

    public function edit(Production $production)
    {
        if ($this->editing->isNot($production)) $this->editing  = $production;
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
        return view('livewire.productions.index', [
            'productions' => Production::search('code', $this->search)
            ->orderBy($this->sortField, $this->sortDirection)
            ->paginate(10)
        ]);
    }
}


