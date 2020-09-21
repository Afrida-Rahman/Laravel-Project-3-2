<?php

namespace App\Http\Controllers\Admin;
use App\Department;
use App\Doctor;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $doctors = Doctor::all();
        return view('admin.doctor.index',compact('doctors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $departments = Department::all();
        return view('admin.doctor.create',compact('departments'));
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
            'department' => 'required',
            'name' => 'required',
            'description' => 'required',
            'doc_fee' => 'required',
            'image' => 'required|mimes:jpeg,jpg,bmp,png',
        ]);
        $image = $request->file('image');
        $slug = str_slug($request->name);
        if (isset($image))
        {
            $currentDate = Carbon::now()->toDateString();
            $imagename = $slug.'-'.$currentDate.'-'. uniqid() .'.'. $image->getClientOriginalExtension();

            if (!file_exists('uploads/doctor'))
            {
                mkdir('uploads/doctor',0777,true);
            }
            $image->move('uploads/doctor',$imagename);
        }else{
            $imagename = "default.png";
        }
        $doctor = new Doctor();
        $doctor->department_id = $request->department;
        $doctor->name = $request->name;
        $doctor->description = $request->description;
        $doctor->doc_fee = $request->doc_fee;
        $doctor->image = $imagename;
        $doctor->save();
        return redirect()->route('doctor.index')->with('successMsg','doctor Successfully Saved');
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
        $doctor = Doctor::find($id);
        $departments = Department::all();
        return view('admin.doctor.edit',compact('doctor','departments'));
  
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
        'department' =>'required',
        'name' => 'required',
        'description' => 'required',
        'doc_fee' => 'required',
        'image' => 'mimes:jpeg,jpg,bmp,png',
    ]);
    $doctor = Doctor::find($id);
    $image = $request->file('image');
    $slug = str_slug($request->name);
    if (isset($image))
    {
        $currentDate = Carbon::now()->toDateString();
        $imagename = $slug.'-'.$currentDate.'-'. uniqid() .'.'. $image->getClientOriginalExtension();

        if (!file_exists('uploads/doctor'))
        {
            mkdir('uploads/doctor',0777,true);
        }
        //unlink('uploads/doctor/'.$doctor->image);
        $image->move('uploads/doctor',$imagename);
    }else{
        $imagename = $doctor->image;
    }

    $doctor->department_id = $request->department;
    $doctor->name = $request->name;
    $doctor->description = $request->description;
    $doctor->doc_fee = $request->doc_fee;
    $doctor->image = $imagename;
    $doctor->save();
    return redirect()->route('doctor.index')->with('successMsg','doctor Successfully Updated');
}


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       
        $doctor = Doctor::find($id);
        if (file_exists('uploads/doctor/'.$doctor->image))
        {
            unlink('uploads/doctor/'.$doctor->image);
        }
        $doctor->delete();
        return redirect()->back()->with('successMsg','doctor successfully Deleted');
  
    }
}
