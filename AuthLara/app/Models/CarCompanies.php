<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CarCompanies extends Model
{
    //use HasFactory;
    protected $table = 'car_companies';

    public function models()
    {
        return $this->hasMany(CarModel::class, 'car_companies', 'name');
    }

}
