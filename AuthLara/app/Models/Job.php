<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;
    protected $fillable = ['specialization','workplace','night_work' ,'permanence','description','img','ad_duration_per_day','advertiser_name', 'address', 'city','phone_number','mobile','email','state'];
}
