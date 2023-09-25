<?php

namespace App\Http\Controllers\Site;

use App\Models\Shop;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ShopController extends Controller
{
    public function index()
    {
        $shopes =Shop::paginate(6);
        return view('vendor.shopes.index',compact('shopes'));
    }

    public function search()
    {
        return view('vendor.shopes.search');
    }

    public function  product(Request $request)
    {
        $shops = Shop::all();
        $shop = Shop::find($request->shop);
        $similar = $this->similar($shops, $shop, ['model' => 30,'reset_model'=>70]);
        return view('vendor.shops.details',compact('shops','shop','similar'));
    }

    public function add()
    {
        return view('vendor.shopes.add');
    }

}
