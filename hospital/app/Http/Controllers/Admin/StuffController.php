<?php

namespace App\Http\Controllers\Admin;

use App\Stuff;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StuffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stuffs = Stuff::all();
        return view('admin.stuff.index',compact('stuffs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.stuff.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required',
           
           
        ]);
        $stuff=new Stuff();
        $stuff->name=$request->name;
        $stuff->phone =$request->phone;
        $stuff->department =$request->department;
        $stuff->save();
        return redirect()->route('stuff.index')->with('successMsg','Stuff Successfully Saved');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $stuff = Stuff::find($id);
        return view('admin.stuff.edit',compact('stuff'));
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
        $this->validate($request,[
            'name' => 'required',
            
        ]);
        $stuff = Stuff::find($id);
        $stuff->name=$request->name;
        $stuff->phone =$request->phone;
        $stuff->department =$request->department;
        $stuff->save();
     
        return redirect()->route('stuff.index')->with('successMsg','Stuff Successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Stuff ::find($id)->delete();
       
        return redirect()->back()->with('successMsg','Stuff Successfully Deleted');
    }
}
