<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Refuel extends Model
{
    use HasFactory;

    protected $dates = ['date'];

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

    public function setPriceAtribute($value)
    {
        $fuel = "Gasolina";
        $amount = 10;
        if ($fuel === "Gasolina")
            $amount *= 4.29;
        if ($fuel === "Etanol")
            $amount *= 2.99;
        if ($fuel === "Diesel")
            $amount *= 2.09;

        $this->attributes['price'] = $amount;
    }
}
