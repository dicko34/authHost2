<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarModels extends Model
{
    use HasFactory;
    protected $fillable = ['model_name', 'car_company_name'];

    public function carCompany()
    {
        return $this->belongsTo(CarCompanies::class, 'car_company_name', 'name');
    }
}
