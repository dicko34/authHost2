<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class VendorRegisterController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:vendor');
    }

    }
