<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Carbon\Carbon;

class Order extends Model
{
    use HasFactory;
    use SoftDeletes;


    //
    protected $guarded = [];

    //  protected $casts = [
    //     'order_date' => 'date:ymd-s',
    //     'delivery_date' => 'date:ymd-s',
    // ];

    protected $casts = [
        'order_date' => 'date',
        'delivery_date' => 'date',
    ];

    protected $attributes =[
        'active' => 0,
    ];

    public function supplier()
    {
        return $this->belongsTo(Supplier::class);
    }

    public function supplies()
    {
        return $this->hasMany(Supply::class);
    }

     public function getActiveAttribute($attribute)
    {
        return $this->activeOptions()[$attribute];
    }

     public function activeOptions(){
        return [
            0 => 'Draft',
            1 => 'Passée',
            2 => 'Confirmée',
            3 => 'Livrée',
        ];
    }

    public function getActiveColorAttribute()
    {
        return [
            'Draft' => 'blue',
            'Passée' => 'yellow',
            'Confirméé' => 'indigo',
            'Livrée' => 'green'
        ][$this->active] ?? 'gray';
    }

    public function getOrderDateForHumansAttribute()
    {
        return $this->order_date->format('M, d, Y');
    }

    public function getDeliveryDateForHumansAttribute()
    {
        return $this->delivery_date->format('M, d, Y');
    }
}
