<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    use HasFactory;

    protected $dates = ['year'];

    protected $fillable=['name','placa','type_fuel','brand','year','tank','observation'];

    public function refuel()
    {
        return $this->hasMany(Refuel::class);
    }
}
