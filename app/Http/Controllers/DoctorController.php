<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Razorpay\Api\Api;

use Illuminate\Support\Str;
use Validator;
use DB;
use Session;

use App\Slider;
use App\Service;
use App\Specialist;
use App\Doctor;
use App\Labtest;
use App\Pharmacy;
use App\Healthstore;
use App\Slot;
use App\Booking;

class DoctorController extends Controller
{
    public function dashboard()
	{
	    $id = session('doctor');
	    $result['doctor'] = Doctor::where(['id' => $id])->first();
		return view('doctor/dashboard',$result);
	}
	
	public function edit_profile()
	{
	    $id = session('doctor');
	    $result['doctor'] = Doctor::where(['id' => $id])->first();
		return view('doctor/edit-profile',$result);
	}
	
	public function post_edit_profile(Request $request)
	{
		$validate = Validator::make($request->all(), [
				'name' => 'required',
				'email' => 'required|email',
		]);
		
		if(!$validate->fails())
		{
			 $data['name'] = $request->name;
			 $data['email'] = $request->email;
			 $data['gender'] = $request->gender;
			 $data['specialists'] = $request->specialists;
			 $data['experience'] = $request->experience;
			 $data['fee'] = $request->fee;
			 $data['address'] = $request->address;
			 $data['pincode'] = $request->pincode;
			 $data['timing'] = $request->timing;
			 $data['qualifications'] = $request->qualifications;
			 $data['memberships'] = $request->memberships;
			 $data['awards'] = $request->awards;
			 $data['discription'] = strip_tags($request->discription);
			 $data['professional_experience'] = strip_tags($request->professional_experience);
			 
			 if($request->file('image'))
             {
                $data['image'] = time().'.'.$request->image->extension();  
                $request->image->move(public_path('front/doctors/'), $data['image']);
            
             }
			 
			 
			$id = session('doctor');
			$result = Doctor::where(['id' => $id])->update($data);
			if($result)
			{
				return redirect()->back()->with('msg','<div class="alert alert-success">profile updated</div>');
				
			}else
			{
				return redirect()->back()->with('msg','<div class="alert alert-danger">profile not updated</div>');
			}
		
		}else
		{
			return redirect()->back()->withErrors($validate);
		}			
		
	} 
	

	public function addSlot()
	{
	    $id = session('doctor');
	    $result['doctor'] = Doctor::where(['id' => $id])->first();
		return view('doctor/add-slot',$result);
	}
	
	
	public function postaddSlot(Request $request)
	{
		$validate = Validator::make($request->all(), [
				'slot' => 'required',
		]);
		
		if(!$validate->fails())
		{
            $id = session('doctor');
            
            $data['slot'] = $request->slot;
            $data['doctor'] = $id;
            
            $result = Slot::insert($data);
            if($result)
            {
                return redirect()->back()->with('msg','<div class="alert alert-success">Slot added</div>');
            
            }else
            {
                return redirect()->back()->with('msg','<div class="alert alert-danger">Slot not added, Please try again</div>');
            }
		
		}else
		{
			return redirect()->back()->withErrors($validate);
		}			
		
	}
	
	
	public function slotlist()
	{
	    $id = session('doctor');
	    $result['doctor'] = Doctor::where(['id' => $id])->first();
	    
	    $result['slots'] = Slot::where('doctor',$id)->get();
		return view('doctor/slot-list',$result);
	}
	
	public function deleteSlot(Request $request,$id)
	{

	    $result = Slot::where('id',$id)->delete();
		if($result)
        {
            return redirect()->back()->with('msg','<div class="alert alert-success">Slot deleted</div>');
        
        }else
        {
            return redirect()->back()->with('msg','<div class="alert alert-danger">Slot not deleted, Please try again</div>');
        }
	}
	
	public function enquiry()
	{
	    $id = session('doctor');
	    $result['doctor'] = Doctor::where(['id' => $id])->first();
	    
	    $result['enquiry'] = Booking::where('doctor_id',$id)->get();
		return view('doctor/enquiry-list',$result);
	}
	
	
	public function delete_enquiry(Request $request,$id)
	{
	   
        $result= Booking::where(['id' => $id])->delete(); 
        
        if($result)
        {
        	return redirect()->back()->with('msg','<div class="alert alert-success">booking deleted</div>');
        	
        }else
        {
        	return redirect()->back()->with('msg','<div class="alert alert-danger">booking not deleted</div>');
        }
	}
	
	public function enquiry_details(Request $request,$enquiry_id)
	{
	    $id = session('doctor');
	    $result['doctor'] = Doctor::where(['id' => $id])->first();
	    
	    $result['enquiry'] = Booking::where(['doctor_id'=>$id,'id'=>$enquiry_id])->first();
		return view('doctor/enquiry-details',$result);
	}
	
	public function logout(Request $request)
	{	
		Session::forget('doctor');
        return redirect('/')->with('success', 'Logged Out Successfully');
	} 
}
