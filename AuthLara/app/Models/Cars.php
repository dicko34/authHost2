<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Cars extends Model
{
    use HasFactory;
    protected $fillable = ['model','company','reset_model','model_year','car_color','car_usage', 'power','passengers','drive_type','speedmotors','origin','price','ad_duration_per_day','driving_license','fuel_type','lime_type','glass','shown','pay_method','extras','description','img','advertiser_name','phone_number','mobile','email','city','address','state'];
}
