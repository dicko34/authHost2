<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mobile extends Model
{
    use HasFactory;
    protected $fillable = ['device_status','company','model' ,'model_year','reset_model','slides_number','screen_size','cameras','memory','storage','price','description','img','ad_duration_per_day','advertiser_name','phone_number','mobile', 'email','city','address','state'];
}