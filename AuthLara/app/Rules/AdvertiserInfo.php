<?php
namespace App\Rules;

use Illuminate\Support\Facades\Auth;
use Illuminate\Contracts\Validation\Rule;

class AdvertiserInfo implements Rule
{
    public function passes($attribute, $value)
    {
        return  Auth::id() == null ? !empty($value) : true  ;
    }

    public function message()
    {
        return 'The :attribute field is required.';
    }
}