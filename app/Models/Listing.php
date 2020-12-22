<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Listing extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $guarded =[];

    protected $attributes =[
        'active' => 1,
    ];

public function ingredient()
    {
        return $this->belongsTo(Ingredient::class);
    }

    public function supplier()
    {
        return $this->belongsTo(Supplier::class);
    }

    public function supplies()
    {
        return $this->hasMany(Supply::class);
    }

    public function getActiveAttribute($attribute){
        return $this->activeOptions()[$attribute];
    }

    //  public function getBioAttribute($attribute){
    //     return $this->bioOptions()[$attribute];
    // }

    public function activeOptions(){
        return [
            1 => 'Actif',
            0 => 'Inactif',
        ];
    }

    public static function search($search)
    {
        return empty($search) ? static::query()
             : static::where('supplier_ref', 'like', '%'.$search.'%')
                ->orWhere('name', 'like', '%'.$search.'%')
                ->orWhere('supplier_id', 'like', '%'.$search.'%')
                ;
    }

    //  public function bioOptions(){
    //     return [
    //         1 => 'Biologique',
    //         0 => 'Conventionnel',
    //     ];
    // }


}
