<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Ingredient;
use App\Models\IngredientCategory;

class CategoryIngredient extends Component
{
    public $categories;
    public $ingredients;

    public $selectedCategory = NULL;
    public $selectedIngredient = NULL;

    public function mount()
    {
        $this->categories = IngredientCategory::all();
        $this->ingredients = collect();
    }

    public function render()
    {
        return view('livewire.category-ingredient');
    }

    public function updatedSelectedCategory($category)
    {
        $this->ingredients = Ingredient::where('ingredient_category_id', $category)->get();
    }
}
