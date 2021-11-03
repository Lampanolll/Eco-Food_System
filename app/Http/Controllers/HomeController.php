<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\User;

use App\Models\Foodcomp;

use App\Models\Booking;

class HomeController extends Controller
{
    public function redirect()
    {

        if(Auth::id())
        {
            if(Auth::user()->usertype=='0')
            {
                return view('admin.home');
            }

            elseif(Auth::user()->usertype=='1')
            {
                $foodcomp = foodcomp::all();
                return view('user.home',compact('foodcomp'));
            }

            else
            {
                return view('wastecomp.home');
            }

        }

        else
        {
            return redirect()->back();
        }
    }

    public function index()
    {
        if(Auth::id())
        {
            return redirect('homepage');
        }

        else
        {
        $foodcomp = foodcomp::all();
        return view('eco.home',compact('foodcomp'));
        }
    }

    public function booking(Request $request)
    {
        $data = new booking;

        $data->name=$request->name;
        $data->email=$request->email;
        $data->restaurantname=$request->restaurantname;
        $data->contact=$request->contact;
        $data->address=$request->address;
        $data->district=$request->district;
        $data->city=$request->city;
        $data->foodtype=$request->foodtype;
        $data->date=$request->date;
        $data->foodcomp=$request->foodcomp;
        $data->message=$request->message;
        $data->status='In Progress';

        if(Auth::id())
        {
            $data->user_id=Auth::user()->id;
        }

        $data->save();

        return redirect()->back()->with('message', 'Booking Request Successfull . We will contact you soon');
        
    }

    public function requestbooking()
    {
        if(Auth::id())
        {
            $userid=Auth::user()->id;

            $book=booking::where('user_id', $userid)->get();

            return view('user.request_booking', compact('book'));
        }
        
        else
        {
            return redirect()->back(); 
        }
    }

    public function cancel_request($id)
    {
        $data=booking::find($id);

        $data->delete();

        return redirect()->back();

    }
}
