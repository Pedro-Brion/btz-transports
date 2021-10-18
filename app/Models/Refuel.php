<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Refuel extends Model
{
    use HasFactory;

    protected $dateFormat = 'd/m/y';

    protected $fillable = [
        'id',
        'vehicle_id',
        'driver_id',
        'date',
        'type_fuel',
        'refuel_amount',
        'vehicle_id',
        'driver_id',
        'price'
    ];

    public function driver()
    {
        return $this->belongsTo(Driver::class);
    }

    public function vehicle()
    {
        return $this->belongsTo(Vehicle::class);
    }
}
