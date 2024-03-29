<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
    use HasFactory;

    protected $dateFormat = 'd/m/y';

    protected $casts =[
        'active'=>'boolean'
    ];

    protected $fillable=['name','cpf','cnh','cat_cnh','birth','active'];

    public function refuel()
    {
        return $this->hasMany(Refuel::class);
    }
}
