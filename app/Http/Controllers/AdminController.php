<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Foodcomp;

use App\Models\Booking;

class AdminController extends Controller
{
    public function addview()
    {

        return view('admin.add_foodcomp');
    }

    public function upload(Request $request)
    {
        $foodcomp = new foodcomp;

        $image=$request->companyimage;

        $imagename=time().'.'.$image->getClientOriginalExtension();

        $request->companyimage->move('companyimage',$imagename);

        $foodcomp->image=$imagename;

        $foodcomp->companyname=$request->companyname;

        $foodcomp->managername=$request->managername;

        $foodcomp->email=$request->email;

        $foodcomp->number=$request->number;

        $foodcomp->address=$request->address;

        $foodcomp->password=$request->password;

        $foodcomp->save();

        return redirect()->back()->with('message','Company Added Successfully');
       
    }

    public function showbooking()
    {
        $data=booking::all();
        return view('admin.showbooking',compact('data'));
    }

    public function approve_request($id)
    {
        $data=booking::find($id);

        $data->status='approved';

        $data->save();

        return redirect()->back();

    }

    public function canceled_request($id)
    {
        $data=booking::find($id);

        $data->status='canceled';

        $data->save();

        return redirect()->back();

    }

    public function showfoodcomp()
    {
        $data = foodcomp::all();

        return view('admin.showfoodcomp',compact('data'));
    }

    public function deletefoodcomp($id)
    {
        $data=foodcomp::find($id);

        $data->delete();

        return redirect()->back();

    }

    public function updatefoodcomp($id)
    {
        $data = foodcomp::find($id);

        return view('admin.update_foodcomp',compact('data'));
    }
}
