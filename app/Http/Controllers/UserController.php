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
use App\Booking;
use App\Slot;

class UserController extends Controller
{
    public function dashboard()
	{
	    $id = session('user');
	    $result['user'] = DB::table('users')->select('*')->where(['id' => $id])->first();
		return view('user/dashboard',$result);
	}
	
	public function edit_profile()
	{
	    $id = session('user');
	    $result['user'] = DB::table('users')->select('*')->where(['id' => $id])->first();
		return view('user/edit-profile',$result);
	}
	
	
	public function post_edit_profile(Request $request)
	{
		$validate = Validator::make($request->all(), [
				'name' => 'required',
				'email' => 'required|email',
				'gender' => 'required',
		]);
		
		if(!$validate->fails())
		{
			 $data['name'] = $request->name;
			 $data['email'] = $request->email;
			 $data['gender'] = $request->gender;
			 $data['address'] = $request->address;
			 $data['city'] = $request->city;
			 $data['state'] = $request->state;
			 $data['pincode'] = $request->pincode;
			 $data['country'] = $request->country;
			 $data['shipping_name'] = $request->shipping_name;
			 $data['shipping_email'] = $request->shipping_email;
			 $data['shipping_mobile'] = $request->shipping_mobile;
			 $data['shipping_country'] = $request->shipping_country;
			 $data['shipping_city'] = $request->shipping_city;
			 $data['shipping_state'] = $request->shipping_state;
			 $data['shipping_pincode'] = $request->shipping_pincode;
			 $data['shipping_address'] = $request->shipping_address;
			
			$id = session('user');
			$result = DB::table('users')->where(['id' => $id])->update($data);
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
	
	
	public function book_appointment(Request $request)
	{
		$validate = Validator::make($request->all(), [
				'mode' => 'required',
				'date' => 'required',
				'time' => 'required',
				'doctor_id' => 'required',
				'doctor_fee' => 'required',
				'payment_type' => 'required',
		]);
		
		if(!$validate->fails())
		{
		     $id = session('user');
	         $user = DB::table('users')->select('*')->where(['id' => $id])->first();
		    
			 $data['user_id'] = $id;
			 $data['doctor_id'] = $request->doctor_id;
			 $data['name'] = $user->name;
			 $data['mobile'] = $user->mobile;
			 $data['email'] = $user->email;
			 $data['mode'] = $request->mode;
			 $data['date'] = $request->date;
			 $data['time'] = $request->time;
			 $totalAmount = $request->doctor_fee;
			 $data['fee'] = $totalAmount;
			 $data['payment_type'] = $request->payment_type;
			 
			if($request->file('prescription'))
			{
				$data['prescription'] = time().'.'.$request->prescription->extension();  
				$request->prescription->move(public_path('front/prescription/'), $data['prescription']);

			}
			/********* rozar pay *********/
				
			$api = new Api(env('RAZOR_KEY'), env('RAZOR_SECRET'));
			
			$order = $api->order->create(array(
			  'receipt' => '123',
			  'amount' => $totalAmount*100,
			  'payment_capture' => 0,
			  'currency' => 'INR'
			  )
			);
							
			$paynow['order'] = $order;
			$paynow['total_amount'] = $totalAmount*100;
			$paynow['name'] = $user->name;
			$paynow['email'] = $user->email;

			/********* rozar pay *********/
			
			$data['booking_id'] = $order['id'];
			$data['payment_status'] = 'Pending';
			
			$result = Booking::insert($data);
            
            if($data['payment_type'] == 'Online')
            {
               return view('front.booking-pay',$paynow);
               
            }else
            {
                
                return redirect(route('user.booking-list'))->with('msg','<div class="alert alert-success">booking completed</div>');
            }
            
			
			
		
		}else
		{
			return redirect()->back()->withErrors($validate);
		}			
		
	}
	
	
	
	public function booking_responce(Request $request)
    {

        //Input items of form
        $input = $request->all();
        //get API Configuration 
        $api = new Api(env('RAZOR_KEY'), env('RAZOR_SECRET'));
        //Fetch payment information by razorpay_payment_id
        $payment = $api->payment->fetch($input['razorpay_payment_id']);
          
        if(count($input)  && !empty($input['razorpay_payment_id'])) {
            try {
                $response = $api->payment->fetch($input['razorpay_payment_id'])->capture(array('amount'=>$payment['amount'])); 

            } catch (\Exception $e) {
                return  $e->getMessage();
                
                \Session::put('error',$e->getMessage());
                return redirect()->back();
            }
               
                $paymentDetail = [
                  'payment_status' => $response['status']
                ];
                
                Booking::where('booking_id',$response['order_id'])->update($paymentDetail);

            
        }
        
        return redirect()->route('user.booking-list');
    }
	
	

	public function order_history()
	{
	    $id = session('user');
	    $result['user'] = DB::table('users')->select('*')->where(['id' => $id])->first();
		return view('user/order-history',$result);
	}
	
	public function booking_list()
	{
	    $id = session('user');
	    $result['user'] = DB::table('users')->select('*')->where(['id' => $id])->first();
	    $result['booking'] = Booking::where(['user_id' => $id])->get();
		return view('user/booking-list',$result);
	}
	
	public function delete_booking(Request $request,$id)
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
	
	public function booking_details(Request $request,$booking_id)
	{
	    $id = session('user');
	    $result['user'] = DB::table('users')->select('*')->where(['id' => $id])->first();
	    
	    $result['booking'] = Booking::where(['user_id'=>$id,'id'=>$booking_id])->first();
		return view('user/booking-details',$result);
	}
	
	
	public function logout(Request $request)
	{	
		Session::forget('user');
        return redirect('/')->with('success', 'Logged Out Successfully');
	} 
}
