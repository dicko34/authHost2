<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Controllers\Controller;
use App\Product;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admins = Category::get();
        return view('admin.subjects.index',compact('admins'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.subjects.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */ 
    public function store(Request $request)
    {
        $fileName = $request->img->getClientOriginalName();
        $file_to_store = time() . '_' . $fileName ;
        $request->img->move(public_path('assets/images/category/'), $file_to_store);
        
        Category::create([
            'name'=>$request->name, 
            'img'=> $file_to_store,
        ]);
        return redirect()->back()->with('success','Done Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $subject = Category::find($id);
        return view('admin.subjects.show',compact('subject'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $subject = Category::find($id);
        return view('admin.subjects.edit',compact('subject'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $subject = Category::find($id);
        if($request->img){
            $fileName = $request->img->getClientOriginalName();
            $file_to_store = time() . '_' . $fileName ;
            $request->img->move(public_path('assets/images/category/'), $file_to_store);
        
           $img = $file_to_store;
        }else{
            $img = $subject->img;
        }

        $subject->update([
            'name'=>$request->name, 
            'img'=> $img
        ]);

        return redirect()->back()->with('success','Done Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Category::destroy($id);
        return redirect()->back()->with('success','Done Successfully');
    }

    public function categoryImage($id)
    {
        $images = Product::where('category_id', $id)->get();
        $cat = Category::find($id);
        return view('admin.subjects.showImages', compact('images','cat'));
    }

    public function categoryAddImage($id)
    {
        $cat = Category::find($id);
        return view('admin.subjects.createimg', compact('cat'));
    }

    public function categoryStoreImage(Request $request, $id)
    {
        for ($i=0; $i < count($request->img); $i++) { 

            $fileName = $request->img[$i]->getClientOriginalName();
            $file_to_store = time() . '_' . $fileName ;
            $request->img[$i]->move(public_path('assets/images/category/'), $file_to_store);
            
            Product::create([
                'category_id'=>$id, 
                'img'=> $file_to_store,
            ]);
        }
        return redirect()->back()->with('success','Done Successfully');
    }
}
