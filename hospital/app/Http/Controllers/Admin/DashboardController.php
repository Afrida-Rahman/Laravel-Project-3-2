<?php

namespace App\Http\Controllers\Admin;
use App\Department;
use App\Doctor;
use App\Reservation;
use App\Contact;
use App\Slider;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index(){
            $departmentCount = Department::count();
            $doctorCount =Doctor::count();
            $sliderCount =Slider::count();
            $reservations =Reservation::where('doc_fee',false)->get();
            $contactCount =Contact::count();
            return view('admin.dashboard',compact('departmentCount','doctorCount','sliderCount','reservations','contactCount'));
        
    }
}
