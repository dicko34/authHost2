<?php

namespace App\Http\Controllers\Admin;

use App\Vendor;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class StudentController extends Controller
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
        $admins = Vendor::get();
        return view('admin.students.index',compact('admins'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.students.create');
    }
    
    public function store(Request $request)
    {  
        Vendor::create([
            'name'=>$request->name,
            'password'=>Hash::make($request->password),
            'email'=>$request->email, 
            'phone' => $request->phone,
            'state'=> 'accept',
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
        $subject = Vendor::find($id);
        return view('admin.students.show',compact('subject'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $subject = Vendor::find($id); 
        return view('admin.students.edit',compact('subject'));
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
        $subject = Vendor::find($id);  

        $subject->update([
            'name'=>$request->name,
            'email'=>$request->email, 
            'phone' => $request->phone,
            'state'=> $request->state,
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
        Vendor::destroy($id);
        return redirect()->back()->with('message','Done Successfully');
    }

    public function acceptState($id)
    {
        $subject = Vendor::find($id);  

        $subject->update([
            'state'=> 'accept',
        ]);
        return redirect()->back()->with('success','accepted Successfully');
    } 

    public function refuceState($id)
    {
        $subject = Vendor::find($id);  

        $subject->update([
            'state'=> 'refuce',
        ]);
        return redirect()->back()->with('success','refuced Successfully');
    } 
}
