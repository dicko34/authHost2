<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Land extends Model
{
    use HasFactory;
    protected $fillable = ['brief','area','price','located_on','surrounded_by' ,'features','description','img', 'gov','city','street','address','ad_duration_per_day','advertiser_name','phone_number','mobile','email','city','advertiser_address','state'];
}
