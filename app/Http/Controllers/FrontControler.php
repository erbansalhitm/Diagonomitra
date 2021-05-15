<?php

namespace App\Http\Controllers;
use Cart;
use Illuminate\Http\Request;
use Razorpay\Api\Api;

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
use App\Order;
use App\Coupon;
use App\Booking;
use App\Slot;
use App\Seller;
use App\User;


class FrontControler extends Controller
{
    //
    
	public function index()
	{
		$result['slideractive'] = Slider::where(['status'=>'1'])->first();
		$result['sliders'] = Slider::where(['status'=>'1'])->get();
		$result['services'] = Service::get();
		$result['specialists'] = Specialist::get();
		$result['doctors'] = Doctor::where(['status'=>'1'])->get();
		$result['doctor'] = Doctor::where(['status'=>'1'])->first();
		$result['labtest'] = Labtest::first();
		$result['labtests'] = Labtest::get();
		$result['pharmacy'] = Pharmacy::where(['category'=>'1'])->first();
		$result['pharmacys'] = Pharmacy::where(['category'=>'1'])->get();
		$result['healthstore'] = Pharmacy::where(['category'=>'2'])->first();
		$result['healthstores'] = Pharmacy::where(['category'=>'2'])->get();
		$result['testimonials'] = DB::table('testimonials')->get();

		return view('front.index',$result);
	}
	
	public function spesilities()
	{
	    $result['specialists'] = Specialist::get();
		return view('front.spesilities',$result);
	}
	
	public function specialists(Request $request,$slug)
	{
	    $result['doctors'] = Doctor::where(['specialists'=>$slug,'status'=>'1'])->get();
		return view('front.specialists',$result);
	}
	
	
	public function labtest()
	{
	    $result['labtests'] = Labtest::get();
		return view('front.labtest',$result);
	}
	
	public function epharmacy()
	{
	    $result['pharmacys'] = Pharmacy::where(['category'=>'1'])->get();
		return view('front.epharmacy',$result);
	}
	
	public function health_store()
	{
	    $result['healthstores'] = Pharmacy::where(['category'=>'2'])->get();
		return view('front.health_store',$result);
	}
	
	public function doctors()
	{
	    $result['specialists'] = Specialist::get();
	    $result['doctors'] = Doctor::where(['status'=>'1'])->get();
		return view('front.doctors',$result);
	}
	
	public function search_doctor(Request $request)
	{
	    $place = $request->place;
	    $specialist = $request->specialist;
	    $doctor_name = $request->doctor_name;
	    
	    $result['doctors'] = Doctor::where(['status'=>'1']);
	    
	    if($request->place)
	    {
	       $place = $request->place;
	       $result['doctors'] = $result['doctors']->where(['pincode'=>$place]);
	    }
	    
	    if($request->specialist)
	    {
	       $specialist = $request->specialist;
	       $result['doctors'] = $result['doctors']->where(['specialists'=>$specialist]);
	    }
	    
	    if($request->doctor_name)
	    {
	       $doctor_name = $request->doctor_name;
	       $result['doctors'] = $result['doctors']->where('name', 'like', '%'.$doctor_name.'%');;
	    }
	    
	    $result['specialists'] = Specialist::get();
	    $result['doctors'] = $result['doctors']->get();
		return view('front.doctors',$result);
	}
	
	
	public function doctorprofile(Request $request,$slug)
	{
		$result['doctors'] = Doctor::where(['status'=>'1'])->get();
		
	    $result['doctor'] = Doctor::where(['slug'=>$slug,'status'=>'1'])->first();
	    
	    $doctor_id = $result['doctor']->id;
	    
	    $result['slots'] = Slot::where(['doctor'=>$doctor_id])->get();
	    
		return view('front.doctorprofile',$result);
	}
	
	
	public function details(Request $request,$slug)
	{
		
	    $result['detail'] = Pharmacy::where(['slug'=>$slug])->first();
		return view('front.detailpage',$result);
	}
	
	public function labtest_details(Request $request,$slug)
	{
		
	    $result['detail'] = Labtest::where(['slug'=>$slug])->first();
		return view('front.labtest-detailpage',$result);
	}
	
		
	
	public function addtocart(Request $request)
	{
		$productId = $request->productId;
		$pharmacys = Pharmacy::where(['id'=>$productId])->first();
		
		$qty = $request->qty;
		$uniqid = uniqid();
		$name = $pharmacys->name;
		$price = $pharmacys->newprice;
		$oldprice = $pharmacys->oldprice;
		$image = asset('/public/front/pharmacy').'/'.$pharmacys->image;
		
		$options = $request->except('_token', 'productId', 'price', 'qty');
		$options = array(
						'image'=>$image,
						'oldprice'=>$oldprice,
						);
						
		Cart::add($uniqid, $name, $price, $qty, $options);
		
		return true;

	}
	
	public function addtocartlab(Request $request)
	{
		$labId = $request->labId;
		$labtest = Labtest::where(['id'=>$labId])->first();
		
		$qty = $request->qty;
		$uniqid = uniqid();
		$name = $labtest->name;
		$price = $labtest->newprice;
		$oldprice = $labtest->oldprice;
		$image = asset('/public/front/labtest').'/'.$labtest->image;
		
		$options = $request->except('_token', 'productId', 'price', 'qty');
		$options = array(
						'image'=>$image,
						'oldprice'=>$oldprice,
						);
						
		Cart::add($uniqid, $name, $price, $qty, $options);
		
		return true;

	}
	
	public function cart()
	{
		$result['carts'] = Cart::getContent();
		$result['total'] = Cart::getTotal();
		$result['totalcart'] = Cart::getContent()->count();
		return view('front.cart',$result);
	}
	
	public function removecart(Request $request,$id)
	{
		Cart::remove($id);

		return redirect()->back();
	}
	
	public function clearCart()
	{
		Cart::clear();

		return redirect()->back();
	}
	
	
	public function updatecartminus(Request $request)
	{
		$cartid = $request->cartid;		
		$qty = -1;
								
		Cart::update($cartid,['quantity' =>$qty]);
		
		return true;
	}
	
	public function updatecartplus(Request $request)
	{
		$cartid = $request->cartid;		
		$qty = 1;
								
		Cart::update($cartid,['quantity' =>$qty]);
		
		return true;
	}
	
	public function blog()
	{
		$result['blogs'] = DB::table('blogs')->get();

		return view('front.blog',$result);
	}
	
	public function blogDetails(Request $request,$slug)
	{
	    $result['blogs'] = DB::table('blogs')->get();
		$result['blog'] = DB::table('blogs')->where('slug',$slug)->first();

		return view('front.blog-detail',$result);
	}
	
	public function privacy()
	{
		return view('front.privacy');
	}
	
	public function faq()
	{
		return view('front.faq');
	}
	
	public function about_us()
	{
		return view('front.about-us');
	}
	
	public function term_conditions()
	{
		return view('front.term-conditions');
	}
	
	
	
	public function seller_registration()
	{
		return view('front.becomeaseller');
	}
	
	
	public function postlogin(Request $request)
	{
		$validate = Validator::make($request->all(), [
				'mobile' => 'required',
				'password' => 'required|min:6',
		]);
		
		if(!$validate->fails())
		{
			 $mobile = $request->mobile;
			 $password = $request->password;
			
			
			$result = DB::table('users')->select('*')->where(['mobile' => $mobile,'password' => $password])->first();
			if($result)
			{
				Session::put(['user'=>$result->id]);
				echo '1';
				
			}else
			{
				echo '<div class="alert alert-danger">Login details Mobile/Password incorrect</div>';
			}
		
		}else
		{
			echo '<div class="alert alert-danger">Please enter valid Username/Password</div>';
		}			
		
	} 
	
	public function register(Request $request)
	{
		return view('front.register');
	}
	
	
	public function nowregister(Request $request)
    {
		$validate = Validator::make($request->all(), [
				'register_name' => 'required',
				'register_email' => 'required|email',
				'register_password' => 'required',
				'register_cpassword' => 'required',
				'register_mobile' => 'required',
		]);
		
		if(!$validate->fails())
		{
		    if($request->register_password == $request->register_cpassword)
		    {
		        
		        $count = DB::table('users')->where(['mobile'=>$request->register_mobile])->count();
		        
		        if(!$count)
		        {
		           
		            $data['name'] = $request->register_name;
                    $data['email'] = $request->register_email;
                    $data['mobile'] = $request->register_mobile;
                    $data['password'] = $request->register_password;
                    $data['otp'] = rand(1000,10000);
                    
                    Session::put(['user_details'=>$data]);
                    
                    $msg= "OTP is ".$data['otp'];
            
                    $sms = urlencode($msg);
                    
                    $url = "http://staticking.org/index.php/smsapi/httpapi/?uname=rahul345&password=123456&sender=DIAGNO&receiver=".$data['mobile']."&route=TA&msgtype=3&sms=".$sms;
                    $request_timeout = 60; // 60 seconds timeout
                    $ch = curl_init();
                    curl_setopt($ch, CURLOPT_URL, $url);
                    curl_setopt($ch, CURLOPT_TIMEOUT, $request_timeout);
                    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $request_timeout);
                    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                    $output = curl_exec($ch);
                    $curl_error = curl_errno($ch);
                    $getserver= curl_getinfo($ch);
                    curl_close($ch);
                    
                    echo '1';
                    
                    
		        }else
		        {
		            echo '<div class="alert alert-danger">Sorry ! mobile already registred.</div>';
		        }
                
                
		       
		    }else
		    {
		        echo '<div class="alert alert-danger">Sorry ! Your password mismatch</div>';
		    }

		}else
		{
			echo '<div class="alert alert-danger">Sorry ! Please enter correct details.  </div>';
		}
				
        
    }
    
    
    public function verifyotp(Request $request)
    {
        return view('front.verifyotp');
    }
    
    
    public function submit_verify_otp(Request $request)
    {
        $validate = Validator::make($request->all(), [
				'register_otp' => 'required'
		]);
		
		if(!$validate->fails())
		{
		    
		    if($request->register_otp == session('user_details')['otp'])
		    {
		        
		        $data['name'] = session('user_details')['name'];
                $data['email'] = session('user_details')['email'];
                $data['mobile'] = session('user_details')['mobile'];
                $data['password'] = session('user_details')['password'];
                
                $resultId = DB::table('users')->insertGetId($data);
                
                if($resultId)
                {
                    
				    Session::put(['user'=>$resultId]);
                    
                    echo '1';
                
                }else
                {
                    echo '<div class="alert alert-danger">Sorry! registration failed, Please try again.</div>';
                }
		        
		    }else
		    {
		       echo '<div class="alert alert-danger">Sorry! OTP Incorrect, Please try again.</div>'; 
		    }
		 
		}else
		{
		    echo '<div class="alert alert-danger">Please enter OTP</div>';
		}
		
        
    }
    
    
    
    public function resend_otp(Request $request)
    {
        
            $data['name'] = session('user_details')['name'];
            $data['email'] = session('user_details')['email'];
            $data['mobile'] = session('user_details')['mobile'];
            $data['password'] = session('user_details')['password'];
            $data['otp'] = rand(1000,10000);
            
            Session::put(['user_details'=>$data]);
                    
            $msg= "OTP is ".$data['otp'];
    
            $sms = urlencode($msg);
            
            $url = "http://staticking.org/index.php/smsapi/httpapi/?uname=rahul345&password=123456&sender=DIAGNO&receiver=".$data['mobile']."&route=TA&msgtype=3&sms=".$sms;
            $request_timeout = 60; // 60 seconds timeout
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_TIMEOUT, $request_timeout);
            curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $request_timeout);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            $output = curl_exec($ch);
            $curl_error = curl_errno($ch);
            $getserver= curl_getinfo($ch);
            curl_close($ch);
            
            echo '<div class="alert alert-success">OTP resent at your mobile number.</div>'; ;
    }

	
	
	public function applycoupon(Request $request)
	{

	    if(session('user'))
	    {
	        if($request->coupon)
	        {
	           $coupon = $request->coupon;
	           $check = Coupon::where(['code'=>$coupon,'status'=>'1'])->count();
	           
	           if($check)
	           {
	              $result = Coupon::where(['code'=>$coupon,'status'=>'1'])->first();    
	              $data['status'] = 1;
	              $data['amount'] = $result->amount;
	              $data['msg'] = '<div class="alert alert-success">Coupon Code Valid</div>';
	              
	              return $data;
	              
	              
	           }else
	           {
	               
	              $data['status'] =2 ;
	              $data['amount'] = 0;
	              $data['msg'] = '<div class="alert alert-danger">Coupon Code Invalid</div>';
	              
	              return $data;
	              
	           }
	           
	        }else
	        {
	            
                $data['status'] = 2;
                $data['amount'] = 0;
                $data['msg'] = '<div class="alert alert-danger">Please enter Coupon Code</div>';
                
                return $data;
	        }
	     	
	    }else
	    {
            $data['status'] = 2;
            $data['amount'] = 0;
            $data['msg'] = '<div class="alert alert-danger">Please login now</div>';
            
            return $data;
	    }
		
	}
	
	
	public function checkout(Request $request)
	{
	    $result['user'] = '';
	    if(session('user'))
	    {
	     	$id = session('user');
	        $result['user'] = DB::table('users')->select('*')->where(['id' => $id])->first();   
	    }
		
		$result['carts'] = Cart::getContent();
		$result['total'] = Cart::getTotal();

		return view('front.checkout',$result);
	}
	
	
	public function payment(Request $request)
    {
		$validate = Validator::make($request->all(), [
				'name' => 'required',
				'email' => 'required|email',
				'mobile' => 'required',
				'address' => 'required',
				'city' => 'required',
				'state' => 'required',
				'pincode' => 'required',
				'country' => 'required',
		]);
		
		if(!$validate->fails())
		{
			 $data['user_id'] = session('user');			 
			 
			 $data['billing_name'] = $request->name;
			 $data['billing_email'] = $request->email;
			 $data['billing_mobile'] = $request->mobile;
			 $data['billing_address'] = $request->address.' '.$request->address2;
			 $data['billing_city'] = $request->city;
			 $data['billing_state'] = $request->state;
			 $data['billing_pincode'] = $request->pincode;
			 $data['billing_country'] = $request->country;
			 $discount_amount = $request->discount_amount;
			 
			 if($request->different_address)
			 {
				$data['shipping_name'] = $request->shipping_name;
				$data['shipping_email'] = $request->shipping_email;
				$data['shipping_mobile'] = $request->shipping_mobile;
				$data['shipping_country'] = $request->shipping_country;
				$data['shipping_city'] = $request->shipping_city;
				$data['shipping_state'] = $request->shipping_state;
				$data['shipping_pincode'] = $request->shipping_pincode;
				$data['shipping_address'] = $request->shipping_address.' '.$request->shipping_address2;
				
			 }else
			 {
				$data['shipping_name'] = $request->name;
				$data['shipping_email'] = $request->email;
				$data['shipping_mobile'] = $request->mobile;
				$data['shipping_country'] = $request->country;
				$data['shipping_city'] = $request->city;
				$data['shipping_state'] = $request->state;
				$data['shipping_pincode'] = $request->pincode;
				$data['shipping_address'] = $request->address.' '.$request->address2;
				 
			 }
				$data['order_notes'] = $request->order_notes;
				$data['order_details'] = json_encode(Cart::getContent());
				$data['total_amount'] = Cart::getTotal();
				
				$totalAmount = $data['total_amount']-$discount_amount;
				
				$uniqueId = time().rand(100,1000);
    	        $data['order_id'] = $uniqueId;
				
				/********* payu pay *********/
												
				$paynow['totalamount'] = $totalAmount;
				$paynow['first_name'] = $request->name;
				$paynow['email'] = $request->email;
				$paynow['mobile'] = $request->mobile;
				$paynow['product'] = $uniqueId;

				/********* payu pay *********/
								
				$result = Order::insert($data);

				return view('front.payu',$paynow);
		
		}else
		{
			return redirect()->back()->withErrors($validate);
		}
				
        
    }
	
	public function response(Request $request)
	{
		if($_REQUEST['status'] == 'success')
		{
			$id = session('user');
			$paymentAmt = $_REQUEST['amount'];
                $paymentDetail = [
                  'payment_amount'=>$paymentAmt,  
                  'payment_method'=>$_REQUEST['method'],
                  'bank'=>$_REQUEST['bank'],
                  'razorpay_payment_id'=>$_REQUEST['id'],
                  'payment_status' => $_REQUEST['status'],
                  'bank_transaction_id' => $_REQUEST['acquirer_data']['bank_transaction_id']
                ];
                
                Order::where('order_id',$response['order_id'])->update($paymentDetail);
			
			return view('front.response');
		}else
		{
			return view('front.cancel');
		}	

	}
	
	
	public function response1(Request $request)
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
               
                $paymentAmt = $response['amount']/100;
                $paymentDetail = [
                  'payment_amount'=>$paymentAmt,  
                  'payment_method'=>$response['method'],
                  'bank'=>$response['bank'],
                  'razorpay_payment_id'=>$response['id'],
                  'payment_status' => $response['status'],
                  'bank_transaction_id' => $response['acquirer_data']['bank_transaction_id']
                ];
                
                Order::where('order_id',$response['order_id'])->update($paymentDetail);

            
        }
        
        Cart::clear();

        return redirect()->route('cart');
    }

    
	
	public function logout(Request $request)
	{	
		Session::forget('user');
        return redirect('/login')->with('success', 'Logged Out Successfully');
	} 
	
	
	/*************** Doctor Start **********************************/
	
	
	public function doctor_register(Request $request)
	{
	    if(!Session::get('doctor'))
	    {
	        $result['specialists'] = Specialist::get();
		    return view('front.doctor-register',$result);
	    }else
	    {
	        return redirect(route('doctor.dashboard'));
	    }
	    
	}
	
	
	public function doctor_send_otp(Request $request)
    {
		$validate = Validator::make($request->all(), [
				'register_mobile' => 'required'
		]);
		
		if(!$validate->fails())
		{

	        $count = Doctor::where(['mobile'=>$request->register_mobile])->count();
	        
	        if(!$count)
	        {
	           

                $data['mobile'] = $request->register_mobile;
                $data['otp'] = rand(1000,10000);
                Session::put(['doctor_details'=>$data]);
                    
                $msg= "OTP is ".$data['otp'];
        
                $sms = urlencode($msg);
                
                $url = "http://staticking.org/index.php/smsapi/httpapi/?uname=rahul345&password=123456&sender=DIAGNO&receiver=".$data['mobile']."&route=TA&msgtype=3&sms=".$sms;
                $request_timeout = 60; // 60 seconds timeout
                $ch = curl_init();
                curl_setopt($ch, CURLOPT_URL, $url);
                curl_setopt($ch, CURLOPT_TIMEOUT, $request_timeout);
                curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $request_timeout);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                $output = curl_exec($ch);
                $curl_error = curl_errno($ch);
                $getserver= curl_getinfo($ch);
                curl_close($ch);
                
                echo 'OTP Sent your mobile number.';
                
                
	        }else
	        {
	            echo 'Sorry ! Mobile already registred.';
	        }
                

		}else
		{
			echo 'Sorry ! Please enter correct details.';
		}
				
        
    }
    
    public function doctor_resend_otp(Request $request)
    {
		$validate = Validator::make($request->all(), [
				'register_mobile' => 'required'
		]);
		
		if(!$validate->fails())
		{

	        $count = Doctor::where(['mobile'=>$request->register_mobile])->count();
	        
	        if(!$count)
	        {
	           

                $data['mobile'] = $request->register_mobile;
                $data['otp'] = rand(1000,10000);
                Session::put(['doctor_details'=>$data]);
                    
                $msg= "OTP is ".$data['otp'];
        
                $sms = urlencode($msg);
                
                $url = "http://staticking.org/index.php/smsapi/httpapi/?uname=rahul345&password=123456&sender=DIAGNO&receiver=".$data['mobile']."&route=TA&msgtype=3&sms=".$sms;
                $request_timeout = 60; // 60 seconds timeout
                $ch = curl_init();
                curl_setopt($ch, CURLOPT_URL, $url);
                curl_setopt($ch, CURLOPT_TIMEOUT, $request_timeout);
                curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $request_timeout);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                $output = curl_exec($ch);
                $curl_error = curl_errno($ch);
                $getserver= curl_getinfo($ch);
                curl_close($ch);
                
                echo 'OTP Sent your mobile number.';
                
                
	        }else
	        {
	            echo 'Sorry ! Mobile already registred.';
	        }
                

		}else
		{
			echo 'Sorry ! Please enter correct details.';
		}
				
        
    }
    
	
	public function post_doctor_register(Request $request)
    {
		$validate = Validator::make($request->all(), [
				'register_name' => 'required',
				'register_otp' => 'required',
				'register_specialization' => 'required',
				'register_password' => 'required',
				'register_cpassword' => 'required',
				'register_mobile' => 'required',
		]);
		
		if(!$validate->fails())
		{
		    if($request->register_password == $request->register_cpassword)
		    {
		        
		        $count = Doctor::where(['mobile'=>$request->register_mobile])->count();
		        
		        if(!$count)
		        {
		          
		           if($request->register_otp == session('doctor_details')['otp'])
		           {
		               
		               
		                $data['name'] = $request->register_name;
    		            $data['slug'] = str_slug($request->register_name, "-").time();
                        $data['mobile'] = $request->register_mobile;
                        $data['password'] = $request->register_password;
                        $data['specialists'] = $request->register_specialization;
                        
                        $result = Doctor::insert($data);
                        
                        if($result)
                        {
                            echo '1';
                            
                        }else
                        {
                            echo '<div class="alert alert-danger">Sorry ! Registration failed, Please try again.</div>';
                        }
		               
		               
		               
		           }else
		           {
		               echo '<div class="alert alert-danger">Sorry ! OTP Incorrect , Please enter correct OTP.</div>';
		           }
		           
		           
		            
                    
		        }else
		        {
		            echo '<div class="alert alert-danger">Sorry ! Mobile already registred.</div>';
		        }
                
                
		       
		    }else
		    {
		        echo '<div class="alert alert-danger">Sorry ! Your password mismatch</div>';
		    }

		}else
		{
			echo '<div class="alert alert-danger">Sorry ! Please enter correct details.  </div>';
		}
				
        
    }
    
    public function post_seller_registration(Request $request)
    {
		$validate = Validator::make($request->all(), [
				'seller_name' => 'required',
				'seller_mobile' => 'required',
				'seller_email' => 'required',
				'seller_state' => 'required',
				'seller_city' => 'required',
				'seller_address' => 'required',
		]);
		
		if(!$validate->fails())
		{
		    
	        $count = Seller::where(['mobile'=>$request->seller_mobile])->count();
	        
	        if(!$count)
	        {
	                $data['name'] = $request->seller_name;
                    $data['mobile'] = $request->seller_mobile;
                    $data['email'] = $request->seller_email;
                    $data['state'] = $request->seller_state;
                    $data['city'] =  $request->seller_city;
                    $data['address'] = $request->seller_address;
                    $data['discription'] = strip_tags($request->seller_discription);
                    
                    $result = Seller::insert($data);
                    
                    if($result)
                    {
                        echo '1';
                        
                    }else
                    {
                        echo '<div class="alert alert-danger">Sorry ! registration failed, Please try again.</div>';
                    }
	               
	        }else
	        {
	            echo '<div class="alert alert-danger">Sorry ! mobile already registred.</div>';
	        }
            

		}else
		{
			echo '<div class="alert alert-danger">Sorry ! Please enter correct details.  </div>';
		}
				
        
    }
	
	
	
	
	public function postdoctorlogin(Request $request)
	{
		$validate = Validator::make($request->all(), [
				'mobile' => 'required',
				'password' => 'required|min:6',
		]);
		
		if(!$validate->fails())
		{
			 $mobile = $request->mobile;
			 $password = $request->password;
			
			
			$result = Doctor::where(['mobile' => $mobile,'password' => $password])->first();
			if($result)
			{
				Session::put(['doctor'=>$result->id]);
				echo '1';
				
			}else
			{
				echo '<div class="alert alert-danger">Login details Mobile/Password incorrect</div>';
			}
		
		}else
		{
			echo '<div class="alert alert-danger">Please enter valid mobile/Password</div>';
		}			
		
	} 
		
	/*************** Doctor End **********************************/
	
	/*************** User forgot passord start **********************************/
	
	
	public function user_forgot_password(Request $request)
	{		
		if(!Session::get('user'))
	    {
	        return view('front.user-forgot-password');
			
	    }else
	    {
	        return redirect(route('user.dashboard'));
	    }
		
	}
		
	public function post_user_forgot_password(Request $request)
    {
		$validate = Validator::make($request->all(), [

				'register_mobile' => 'required|regex:/[0-9]{10}/'
		]);
		
		if(!$validate->fails())
		{
		        
			$count = User::where(['mobile'=>$request->register_mobile])->count();
	
			if($count)
			{
				$mobile = $request->register_mobile;

				$userDetails = User::select('password')->where(['mobile'=>$request->register_mobile])->first();				
				
				$password = $userDetails->password;
				
				$msg= "Hi Your Passwword is ".$password;
		
				$sms = urlencode($msg);
				
				$url = "http://staticking.org/index.php/smsapi/httpapi/?uname=rahul345&password=123456&sender=DIAGNO&receiver=".$mobile."&route=TA&msgtype=3&sms=".$sms;
				$request_timeout = 60; // 60 seconds timeout
				$ch = curl_init();
				curl_setopt($ch, CURLOPT_URL, $url);
				curl_setopt($ch, CURLOPT_TIMEOUT, $request_timeout);
				curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $request_timeout);
				curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
				$output = curl_exec($ch);
				$curl_error = curl_errno($ch);
				$getserver= curl_getinfo($ch);
				curl_close($ch);
				
				echo '1';
				
				
			}else
			{
				echo '<div class="alert alert-danger">Sorry ! mobile not registred.</div>';
			}
                

		}else
		{
			echo '<div class="alert alert-danger">Sorry ! Please enter correct mobile number.  </div>';
		}
				
        
    }
	
	/*************** User forgot passord end **********************************/
	
	
	
	/*************** Doctor forgot passord start **********************************/
	
	public function doctor_forgot_password(Request $request)
	{		
		if(!Session::get('doctor'))
	    {
	        return view('front.doctor-forgot-password');
			
	    }else
	    {
	        return redirect(route('doctor.dashboard'));
	    }
		
	}
		
	public function post_doctor_forgot_password(Request $request)
    {
		$validate = Validator::make($request->all(), [

				'register_mobile' => 'required|regex:/[0-9]{10}/'
		]);
		
		if(!$validate->fails())
		{
		        
			$count = Doctor::where(['mobile'=>$request->register_mobile])->count();
	
			if($count)
			{
				$mobile = $request->register_mobile;

				$doctorDetails = Doctor::select('password')->where(['mobile'=>$request->register_mobile])->first();				
				
				$password = $doctorDetails->password;
				
				$msg= "Hi Your Passwword is ".$password;
		
				$sms = urlencode($msg);
				
				$url = "http://staticking.org/index.php/smsapi/httpapi/?uname=rahul345&password=123456&sender=DIAGNO&receiver=".$mobile."&route=TA&msgtype=3&sms=".$sms;
				$request_timeout = 60; // 60 seconds timeout
				$ch = curl_init();
				curl_setopt($ch, CURLOPT_URL, $url);
				curl_setopt($ch, CURLOPT_TIMEOUT, $request_timeout);
				curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $request_timeout);
				curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
				$output = curl_exec($ch);
				$curl_error = curl_errno($ch);
				$getserver= curl_getinfo($ch);
				curl_close($ch);
				
				echo '1';
				
				
			}else
			{
				echo '<div class="alert alert-danger">Sorry ! mobile not registred.</div>';
			}
                

		}else
		{
			echo '<div class="alert alert-danger">Sorry ! Please enter correct mobile number.  </div>';
		}
				
        
    }
	
	/*************** Doctor forgot passord end **********************************/
	
	
	/*************** Store forgot passord start **********************************/
	
	public function store_forgot_password(Request $request)
	{		
		if(!Session::get('store'))
	    {
	        return view('front.store-forgot-password');
			
	    }else
	    {
	        return redirect(route('store.dashboard'));
	    }
		
	}
		
	public function post_store_forgot_password(Request $request)
    {
		$validate = Validator::make($request->all(), [

				'register_mobile' => 'required|regex:/[0-9]{10}/'
		]);
		
		if(!$validate->fails())
		{
		        
			$count = Store::where(['mobile'=>$request->register_mobile])->count();
	
			if($count)
			{
				$mobile = $request->register_mobile;

				$storeDetails = Store::select('password')->where(['mobile'=>$request->register_mobile])->first();				
				
				$password = $storeDetails->password;
				
				$msg= "Hi Your Passwword is ".$password;
		
				$sms = urlencode($msg);
				
				$url = "http://staticking.org/index.php/smsapi/httpapi/?uname=rahul345&password=123456&sender=DIAGNO&receiver=".$mobile."&route=TA&msgtype=3&sms=".$sms;
				$request_timeout = 60; // 60 seconds timeout
				$ch = curl_init();
				curl_setopt($ch, CURLOPT_URL, $url);
				curl_setopt($ch, CURLOPT_TIMEOUT, $request_timeout);
				curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $request_timeout);
				curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
				$output = curl_exec($ch);
				$curl_error = curl_errno($ch);
				$getserver= curl_getinfo($ch);
				curl_close($ch);
				
				echo '1';
				
				
			}else
			{
				echo '<div class="alert alert-danger">Sorry ! mobile not registred.</div>';
			}
                

		}else
		{
			echo '<div class="alert alert-danger">Sorry ! Please enter correct mobile number.  </div>';
		}
				
        
    }
	
	/*************** Store forgot passord end **********************************/
	
	
	
	/*************** store Start **********************************/
	
	
	public function store_register(Request $request)
	{
	    if(!Session::get('store'))
	    {
		    return view('front.store-register');
	    }else
	    {
	        return redirect(route('store.dashboard'));
	    }
	    
	}
	
	
	public function store_send_otp(Request $request)
    {
		$validate = Validator::make($request->all(), [
				'register_mobile' => 'required'
		]);
		
		if(!$validate->fails())
		{

	        $count = Store::where(['mobile'=>$request->register_mobile])->count();
	        
	        if(!$count)
	        {
	           

                $data['mobile'] = $request->register_mobile;
                $data['otp'] = rand(1000,10000);
                Session::put(['store_details'=>$data]);
                    
                $msg= "OTP is ".$data['otp'];
        
                $sms = urlencode($msg);
                
                $url = "http://staticking.org/index.php/smsapi/httpapi/?uname=rahul345&password=123456&sender=DIAGNO&receiver=".$data['mobile']."&route=TA&msgtype=3&sms=".$sms;
                $request_timeout = 60; // 60 seconds timeout
                $ch = curl_init();
                curl_setopt($ch, CURLOPT_URL, $url);
                curl_setopt($ch, CURLOPT_TIMEOUT, $request_timeout);
                curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $request_timeout);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                $output = curl_exec($ch);
                $curl_error = curl_errno($ch);
                $getserver= curl_getinfo($ch);
                curl_close($ch);
                
                echo 'OTP Sent your mobile number.';
                
                
	        }else
	        {
	            echo 'Sorry ! Mobile already registred.';
	        }
                

		}else
		{
			echo 'Sorry ! Please enter correct details.';
		}
				
        
    }
    
    public function store_resend_otp(Request $request)
    {
		$validate = Validator::make($request->all(), [
				'register_mobile' => 'required'
		]);
		
		if(!$validate->fails())
		{

	        $count = Store::where(['mobile'=>$request->register_mobile])->count();
	        
	        if(!$count)
	        {
	           

                $data['mobile'] = $request->register_mobile;
                $data['otp'] = rand(1000,10000);
                Session::put(['store_details'=>$data]);
                    
                $msg= "OTP is ".$data['otp'];
        
                $sms = urlencode($msg);
                
                $url = "http://staticking.org/index.php/smsapi/httpapi/?uname=rahul345&password=123456&sender=DIAGNO&receiver=".$data['mobile']."&route=TA&msgtype=3&sms=".$sms;
                $request_timeout = 60; // 60 seconds timeout
                $ch = curl_init();
                curl_setopt($ch, CURLOPT_URL, $url);
                curl_setopt($ch, CURLOPT_TIMEOUT, $request_timeout);
                curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $request_timeout);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                $output = curl_exec($ch);
                $curl_error = curl_errno($ch);
                $getserver= curl_getinfo($ch);
                curl_close($ch);
                
                echo 'OTP Sent your mobile number.';
                
                
	        }else
	        {
	            echo 'Sorry ! Mobile already registred.';
	        }
                

		}else
		{
			echo 'Sorry ! Please enter correct details.';
		}
				
        
    }
    
	
	public function post_store_register(Request $request)
    {
		$validate = Validator::make($request->all(), [
				'register_name' => 'required',
				'register_otp' => 'required',
				'register_password' => 'required',
				'register_cpassword' => 'required',
				'register_mobile' => 'required',
		]);
		
		if(!$validate->fails())
		{
		    if($request->register_password == $request->register_cpassword)
		    {
		        
		        $count = Store::where(['mobile'=>$request->register_mobile])->count();
		        
		        if(!$count)
		        {
		          
		           if($request->register_otp == session('store_details')['otp'])
		           {
		               
		               
		                $data['name'] = $request->register_name;
    		            $data['slug'] = str_slug($request->register_name, "-").time();
                        $data['mobile'] = $request->register_mobile;
                        $data['password'] = $request->register_password;

                        $result = Store::insert($data);
                        
                        if($result)
                        {
                            echo '1';
                            
                        }else
                        {
                            echo '<div class="alert alert-danger">Sorry ! Registration failed, Please try again.</div>';
                        }
		               
		               
		               
		           }else
		           {
		               echo '<div class="alert alert-danger">Sorry ! OTP Incorrect , Please enter correct OTP.</div>';
		           }
		           
		           
		            
                    
		        }else
		        {
		            echo '<div class="alert alert-danger">Sorry ! Mobile already registred.</div>';
		        }
                
                
		       
		    }else
		    {
		        echo '<div class="alert alert-danger">Sorry ! Your password mismatch</div>';
		    }

		}else
		{
			echo '<div class="alert alert-danger">Sorry ! Please enter correct details.  </div>';
		}
				
        
    }
    
    	
	
	public function poststorelogin(Request $request)
	{
		$validate = Validator::make($request->all(), [
				'mobile' => 'required',
				'password' => 'required|min:6',
		]);
		
		if(!$validate->fails())
		{
			 $mobile = $request->mobile;
			 $password = $request->password;
			
			
			$result = Store::where(['mobile' => $mobile,'password' => $password])->first();
			if($result)
			{
				Session::put(['store'=>$result->id]);
				echo '1';
				
			}else
			{
				echo '<div class="alert alert-danger">Login details Mobile/Password incorrect</div>';
			}
		
		}else
		{
			echo '<div class="alert alert-danger">Please enter valid mobile/Password</div>';
		}			
		
	} 
		
	public function storeform(Request $request,$id)
	{
		$data['store_id'] = base64_decode($id);
		return view('front.store-form',$data);
	    
	}
	
	
	public function submit_store_enquiry(Request $request)
	{
				
		$validate = Validator::make($request->all(), [
				'store_id' => 'required',
				'name' => 'required',
				'email' => 'required',
				'address' => 'required',
				'contact' => 'required',
				'alternate_contact' => 'required',
							
		]);
		
		if(!$validate->fails())
		{
			$data['store_id'] = $request->store_id;
			$data['name'] = $request->name;
			$data['email'] = $request->email;
			$data['address'] = $request->address;
			$data['contact'] = $request->contact;
			$data['alternate_contact'] = $request->alternate_contact;
					
			if($request->file('prescription'))
			{
				$data['prescription'] = time().'.'.$request->prescription->extension();  
				$request->prescription->move(public_path('front/prescription/'), $data['prescription']);

			}
			
			$result = DB::table('store_enquiry')->insert($data);
			
			if($result)
			{
				echo true;
				
			}else
			{
				return response()->json(['errors'=>'Sorry! Your Store Enquiry Failed, Please try again']);
			}
		
		}else
		{
			return response()->json(['errors'=>$validate->errors()->all()]);
		}			
		
	}
		
	/*************** store End **********************************/

	
	
	

		

}
