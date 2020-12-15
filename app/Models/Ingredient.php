<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Ingredient extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $guarded = [];

    protected $attributes =[
        'active' => 1,
    ];

    public function ingredientCategory()
    {
        return $this->belongsTo(IngredientCategory::class);
    }

    public function listings()
    {
        return $this->hasMany(Listing::class);
    }

    public function getActiveAttribute($attribute){
        return $this->activeOptions()[$attribute];
    }

     public function activeOptions(){
        return [
            1 => 'Actif',
            0 => 'Inactif',
        ];
    }
}
