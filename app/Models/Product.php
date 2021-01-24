<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;
    use SoftDeletes;

    public function productSubcategory()
    {
         return $this->belongsTo(ProductSubcategory::class);
    }

    public function productCollection()
    {
         return $this->belongsTo(ProductCollection::class);
    }
}
