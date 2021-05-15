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
use App\Store;
use App\Labtest;
use App\Pharmacy;
use App\Healthstore;
use App\Slot;
use App\Booking;

class StoreController extends Controller
{
    public function dashboard()
	{
	    $id = session('store');
	    $result['store'] = Store::where(['id' => $id])->first();
		return view('store/dashboard',$result);
	}
	
	public function edit_profile()
	{
	    $id = session('store');
	    $result['store'] = Store::where(['id' => $id])->first();
		return view('store/edit-profile',$result);
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
			 
			 $data['address'] = $request->address;
			 $data['pincode'] = $request->pincode;
			
			 $data['discription'] = strip_tags($request->discription);

			 if($request->file('image'))
             {
                $data['image'] = time().'.'.$request->image->extension();  
                $request->image->move(public_path('front/stores/'), $data['image']);
            
             }
			 
			 
			$id = session('store');
			$result = Store::where(['id' => $id])->update($data);
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
	
	
	public function enquiry()
	{
		$id = session('store');
	    $result['store'] = Store::where(['id' => $id])->first();
		$result['enquiry'] = DB::table('store_enquiry')->where('store_id',$id)->get();
		return view('store/enquiry-list',$result);
	}
	
	public function enquiryDetail(Request $request, $store_id)
	{
		$id = session('store');
	    $result['store'] = Store::where(['id' => $id])->first();
		$result['enquiry'] = DB::table('store_enquiry')->where(['id'=>$store_id])->first();
		return view('store/enquiry-details',$result);
	
	}

	

	public function logout(Request $request)
	{	
		Session::forget('store');
        return redirect('/')->with('success', 'Logged Out Successfully');
	} 
}
