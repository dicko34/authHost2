<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $table ='categories';
    protected $fillable = [
            'name',
            'img', 
    ];
}
