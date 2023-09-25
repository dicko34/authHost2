<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Home extends Model
{
    use HasFactory;
    protected $fillable = ['show','home_type','status','rooms_number','kitchen_number', 'bathrooms_number', 'balcony','loung','area','land_area','price','city','address','ad_duration_per_day','extras','description','img','advertiser_name','phone_number','mobile','email','state'];
}
