<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
use App\Order;
use App\Coupon;
use App\Seller;
use App\Booking;

class AdminController extends Controller
{
    //
    
    public function login(Request $request)
	{
		if(!Session::has('admin'))
		{
			return view('admin/login');
		}else
		{
			return redirect('/admin/dashboard');
		}
		
	}

	public function post_login(Request $request)
	{
		$validate = Validator::make($request->all(), [
				'username' => 'required',
				'password' => 'required|min:6',
		]);
		
		if(!$validate->fails())
		{
			 $username = $request->username;
			 $password = md5($request->password);
			
			
			$result = DB::table('admin')->select('*')->where(['username' => $username,'password' => $password])->first();
			if($result)
			{
				Session::put(['admin'=>$result]);
				return redirect('/admin/dashboard')->with('success', 'Successfully logged in');
				
			}else
			{
				return redirect()->back()->with('error','Please enter valid Username/Password');
			}
		
		}else
		{
			return redirect()->back()->withErrors($validate);
		}			
		
	} 


	public function dashboard()
	{
		return view('admin/dashboard');
	}

	public function addService()
	{
		return view('admin/add-service');
	}

	
	public function postAddService(Request $request)
	{
		$validate = Validator::make($request->all(), [
				'name' => 'required',
							
		]);
		
		if(!$validate->fails())
		{
			$data['name'] = $request->name;
			
			$data['slug'] = str_slug($request->name, "-").time();
			
			
			if($request->file('image'))
			{
				$data['image'] = time().'.'.$request->image->extension();  
				$request->image->move(public_path('front/service/'), $data['image']);

			}
			
			$result = Service::insert($data);
			
			if($result)
			{
				return redirect()->back()->with('success', 'Successfully Added');
				
			}else
			{
				return redirect()->back()->with('error','Please enter valid Details');
			}
		
		}else
		{
			return redirect()->back()->withErrors($validate);
		}			
		
	}

	public function serviceList()
	{
		$result = Service::get();
		return view('admin/service-list')->with('services',$result);
	}

	public function serviceDelete(Request $request, $id)
	{
		$result = Service::where(['id'=>$id])->delete();
		
		if($result)
		{
			return redirect()->back()->with('success', 'Successfully Deleted');
			
		}else
		{
			return redirect()->back()->with('error','Deleted fails');
		}
	}

	public function serviceEdit(Request $request, $id)
	{
		
		$result['service'] = Service::where(['id'=>$id])->first();
		
		return view('admin/edit-service',$result);
	}



	public function postServiceEdit(Request $request,$id)
	{
		$validate = Validator::make($request->all(), [
				'name' => 'required'
		]);
		
		if(!$validate->fails())
		{
			$data['name'] = $request->name;
			
			if($request->file('image'))
			{
				$data['image'] = time().'.'.$request->image->extension();  
				$request->image->move(public_path('front/service/'), $data['image']);

			}
		
			$result = Service::where(['id'=>$id])->update($data);
			
			if($result)
			{
				return redirect()->back()->with('success', 'Successfully Updated');
				
			}else
			{
				return redirect()->back()->with('error','Please enter valid Details');
			}
		
		}else
		{
			return redirect()->back()->withErrors($validate);
		}			
		
	}



/*************** specilist *************************************/


	public function addSpecialists()
	{
		return view('admin/add-specialists');
	}

	
	public function postAddSpecialists(Request $request)
	{
		$validate = Validator::make($request->all(), [
				'name' => 'required',
							
		]);
		
		if(!$validate->fails())
		{
			$data['name'] = $request->name;
			$data['details'] = $request->details;
			
			$data['slug'] = str_slug($request->name, "-").time();
			
			
			if($request->file('image'))
			{
				$data['image'] = time().'.'.$request->image->extension();  
				$request->image->move(public_path('front/specialists/'), $data['image']);

			}
			
			$result = Specialist::insert($data);
			
			if($result)
			{
				return redirect()->back()->with('success', 'Successfully Added');
				
			}else
			{
				return redirect()->back()->with('error','Please enter valid Details');
			}
		
		}else
		{
			return redirect()->back()->withErrors($validate);
		}			
		
	}

	public function specialistsList()
	{
		$result = Specialist::get();
		return view('admin/specialists-list')->with('specialists',$result);
	}

	public function specialistsDelete(Request $request, $id)
	{
		$result = Specialist::where(['id'=>$id])->delete();
		
		if($result)
		{
			return redirect()->back()->with('success', 'Successfully Deleted');
			
		}else
		{
			return redirect()->back()->with('error','Deleted fails');
		}
	}

	public function specialistsEdit(Request $request, $id)
	{
		
		$result['specialist'] = Specialist::where(['id'=>$id])->first();
		
		return view('admin/edit-specialists',$result);
	}



	public function postSpecialistsEdit(Request $request,$id)
	{
		$validate = Validator::make($request->all(), [
				'name' => 'required'
		]);
		
		if(!$validate->fails())
		{
			$data['name'] = $request->name;
			$data['details'] = $request->details;
			
			if($request->file('image'))
			{
				$data['image'] = time().'.'.$request->image->extension();  
				$request->image->move(public_path('front/specialists/'), $data['image']);

			}
		
			$result = Specialist::where(['id'=>$id])->update($data);
			
			if($result)
			{
				return redirect()->back()->with('success', 'Successfully Updated');
				
			}else
			{
				return redirect()->back()->with('error','Please enter valid Details');
			}
		
		}else
		{
			return redirect()->back()->withErrors($validate);
		}			
		
	}





/*************** specilist *************************************/



/*************** doctor *************************************/


	public function addDoctors()
	{
	    $result['specialists'] = Specialist::get();
		return view('admin/add-doctors',$result);
	}

	
	public function postAddDoctors(Request $request)
	{
		$validate = Validator::make($request->all(), [
				'name' => 'required',
				'specialist' => 'required',
				'mobile' => 'required|regex:/[0-9]{10}/',
				'password' => 'required',
		]);
		
		if(!$validate->fails())
		{
		    
		    $check_mobile = Doctor::where(['mobile'=>$request->mobile])->count();
		    
		    if(!$check_mobile)
		    {
		        
		        $data['name'] = $request->name;
    			$data['specialists'] = $request->specialist;
    			$data['mobile'] = $request->mobile;
    			$data['password'] = $request->password;
    			$data['fee'] = $request->fee;
    			$data['experience'] = $request->experience;
    			$data['address'] = $request->address;
    			$data['pincode'] = $request->pincode;
    			$data['timing'] = $request->timing;
    			$data['qualifications'] = $request->qualifications;
    			$data['memberships'] = $request->memberships;
    			$data['awards'] = $request->awards;
    			$data['discription'] = strip_tags($request->discription);
    			$data['professional_experience'] = strip_tags($request->professional_experience);
    			
    			$data['slug'] = str_slug($request->name, "-").time();
    			
    			
    			if($request->file('image'))
    			{
    				$data['image'] = time().'.'.$request->image->extension();  
    				$request->image->move(public_path('front/doctors/'), $data['image']);
    
    			}
    			
    			$result = Doctor::insert($data);
    			
    			if($result)
    			{
    				return redirect()->back()->with('success', 'Successfully Added');
    				
    			}else
    			{
    				return redirect()->back()->with('error','Please enter valid Details');
    			}
		        
		    }else
		    {
		        return redirect()->back()->with('error','Mobile all ready registred, Please try again');
		    }
			
		
		}else
		{
			return redirect()->back()->withErrors($validate);
		}			
		
	}

	public function doctorsList()
	{
		$result = Doctor::get();
		return view('admin/doctors-list')->with('doctors',$result);
	}

	public function doctorsDelete(Request $request, $id)
	{
		$result = Doctor::where(['id'=>$id])->delete();
		
		if($result)
		{
			return redirect()->back()->with('success', 'Successfully Deleted');
			
		}else
		{
			return redirect()->back()->with('error','Deleted fails');
		}
	}

	public function doctorsEdit(Request $request, $id)
	{
		$result['specialists'] = Specialist::get();
		$result['doctor'] = Doctor::where(['id'=>$id])->first();
		
		return view('admin/edit-doctors',$result);
	}



	public function postDoctorsEdit(Request $request,$id)
	{
		$validate = Validator::make($request->all(), [
				'name' => 'required',
				'specialist' => 'required',
				'mobile' => 'required|regex:/[0-9]{10}/',
				'password' => 'required',
		]);
		
		if(!$validate->fails())
		{
		    
		    $check_mobile = Doctor::where('mobile',$request->mobile)->where('id','!=',$id)->count();
		    
		    if(!$check_mobile)
		    {
		        
		        $data['name'] = $request->name;
    			$data['specialists'] = $request->specialist;
    			$data['mobile'] = $request->mobile;
    			$data['password'] = $request->password;
    			$data['fee'] = $request->fee;
    			$data['experience'] = $request->experience;
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
    		
    			$result = Doctor::where(['id'=>$id])->update($data);
    			
    			if($result)
    			{
    				return redirect()->back()->with('success', 'Successfully Updated');
    				
    			}else
    			{
    				return redirect()->back()->with('error','Please enter valid Details');
    			}

		        
		    }else
		    {
		        return redirect()->back()->with('error', 'mobile already registred, Please try again');
		    }
		    
		    
		
		}else
		{
			return redirect()->back()->withErrors($validate);
		}			
		
	}


/*************** doctor *************************************/



/*************** lab test *************************************/


	public function addLabtest()
	{
		return view('admin/add-labtest');
	}

	
	public function postAddLabtest(Request $request)
	{
		$validate = Validator::make($request->all(), [
				'name' => 'required',
				'oldprice' => 'required',
				'newprice' => 'required',
				'labtestType' => 'required',
							
		]);
		
		if(!$validate->fails())
		{
			$data['name'] = $request->name;
			$data['oldprice'] = $request->oldprice;
			$data['newprice'] = $request->newprice;
			$data['labtestType'] = $request->labtestType;
			$data['discription'] = trim($request->discription);
			
			$data['slug'] = str_slug($request->name, "-").time();
			
			
			if($request->file('image'))
			{
				$data['image'] = time().'.'.$request->image->extension();  
				$request->image->move(public_path('front/labtest/'), $data['image']);

			}
			
			$result = Labtest::insert($data);
			
			if($result)
			{
				return redirect()->back()->with('success', 'Successfully Added');
				
			}else
			{
				return redirect()->back()->with('error','Please enter valid Details');
			}
		
		}else
		{
			return redirect()->back()->withErrors($validate);
		}			
		
	}

	public function labtestList()
	{
		$result = Labtest::get();
		return view('admin/labtest-list')->with('labtests',$result);
	}

	public function labtestDelete(Request $request, $id)
	{
		$result = Labtest::where(['id'=>$id])->delete();
		
		if($result)
		{
			return redirect()->back()->with('success', 'Successfully Deleted');
			
		}else
		{
			return redirect()->back()->with('error','Deleted fails');
		}
	}

	public function labtestEdit(Request $request, $id)
	{
		
		$result['labtest'] = Labtest::where(['id'=>$id])->first();
		
		return view('admin/edit-labtest',$result);
	}



	public function postLabtestEdit(Request $request,$id)
	{
		$validate = Validator::make($request->all(), [
				'name' => 'required',
				'oldprice' => 'required',
				'newprice' => 'required',
				'labtestType' => 'required',

		]);
		
		if(!$validate->fails())
		{
			$data['name'] = $request->name;
			$data['oldprice'] = $request->oldprice;
			$data['newprice'] = $request->newprice;
			$data['labtestType'] = $request->labtestType;
			$data['discription'] = trim($request->discription);
			
			if($request->file('image'))
			{
				$data['image'] = time().'.'.$request->image->extension();  
				$request->image->move(public_path('front/labtest/'), $data['image']);

			}
		
			$result = Labtest::where(['id'=>$id])->update($data);
			
			if($result)
			{
				return redirect()->back()->with('success', 'Successfully Updated');
				
			}else
			{
				return redirect()->back()->with('error','Please enter valid Details');
			}
		
		}else
		{
			return redirect()->back()->withErrors($validate);
		}			
		
	}





/*************** lab test *************************************/



/*************** pharmacy *************************************/


	public function addPharmacy()
	{
		return view('admin/add-pharmacy');
	}

	
	public function postAddPharmacy(Request $request)
	{
		$validate = Validator::make($request->all(), [
				'name' => 'required',
				'oldprice' => 'required',
				'newprice' => 'required',
				'category' => 'required',
							
		]);
		
		if(!$validate->fails())
		{
			$data['name'] = $request->name;
			$data['oldprice'] = $request->oldprice;
			$data['newprice'] = $request->newprice;
			$data['category'] = $request->category;
			$data['short_discription'] = $request->short_discription;
			$data['highlight'] = $request->highlight;
			
			$data['slug'] = str_slug($request->name, "-").time();
			
			if($request->file('image'))
			{
				$data['image'] = time().'.'.$request->image->extension();  
				$request->image->move(public_path('front/pharmacy/'), $data['image']);

			}
			
			$result = Pharmacy::insert($data);
			
			if($result)
			{
				return redirect()->back()->with('success', 'Successfully Added');
				
			}else
			{
				return redirect()->back()->with('error','Please enter valid Details');
			}
		
		}else
		{
			return redirect()->back()->withErrors($validate);
		}			
		
	}

	public function pharmacyList()
	{
		$result = Pharmacy::get();
		return view('admin/pharmacy-list')->with('pharmacys',$result);
	}

	public function pharmacyDelete(Request $request, $id)
	{
		$result = Pharmacy::where(['id'=>$id])->delete();
		
		if($result)
		{
			return redirect()->back()->with('success', 'Successfully Deleted');
			
		}else
		{
			return redirect()->back()->with('error','Deleted fails');
		}
	}

	public function pharmacyEdit(Request $request, $id)
	{
		
		$result['pharmacy'] = Pharmacy::where(['id'=>$id])->first();
		
		return view('admin/edit-pharmacy',$result);
	}



	public function postPharmacyEdit(Request $request,$id)
	{
		$validate = Validator::make($request->all(), [
				'name' => 'required',
				'oldprice' => 'required',
				'newprice' => 'required',
				'category' => 'required',
		]);
		
		if(!$validate->fails())
		{
			$data['name'] = $request->name;
			$data['oldprice'] = $request->oldprice;
			$data['newprice'] = $request->newprice;
			$data['category'] = $request->category;
			$data['short_discription'] = $request->short_discription;
			$data['highlight'] = $request->highlight;
			
			if($request->file('image'))
			{
				$data['image'] = time().'.'.$request->image->extension();  
				$request->image->move(public_path('front/pharmacy/'), $data['image']);

			}
		
			$result = Pharmacy::where(['id'=>$id])->update($data);
			
			if($result)
			{
				return redirect()->back()->with('success', 'Successfully Updated');
				
			}else
			{
				return redirect()->back()->with('error','Please enter valid Details');
			}
		
		}else
		{
			return redirect()->back()->withErrors($validate);
		}			
		
	}


/*************** pharmacy *************************************/


/*************** health store *************************************/


	public function addHealthstore()
	{
		return view('admin/add-healthstore');
	}

	
	public function postAddHealthstore(Request $request)
	{
		$validate = Validator::make($request->all(), [
				'name' => 'required',
				'oldprice' => 'required',
				'newprice' => 'required',
							
		]);
		
		if(!$validate->fails())
		{
			$data['name'] = $request->name;
			$data['oldprice'] = $request->oldprice;
			$data['newprice'] = $request->newprice;
			
			$data['slug'] = str_slug($request->name, "-").time();
			
			
			if($request->file('image'))
			{
				$data['image'] = time().'.'.$request->image->extension();  
				$request->image->move(public_path('front/healthstore/'), $data['image']);

			}
			
			$result = Healthstore::insert($data);
			
			if($result)
			{
				return redirect()->back()->with('success', 'Successfully Added');
				
			}else
			{
				return redirect()->back()->with('error','Please enter valid Details');
			}
		
		}else
		{
			return redirect()->back()->withErrors($validate);
		}			
		
	}

	public function healthstoreList()
	{
		$result = Healthstore::get();
		return view('admin/healthstore-list')->with('healthstores',$result);
	}

	public function healthstoreDelete(Request $request, $id)
	{
		$result = Healthstore::where(['id'=>$id])->delete();
		
		if($result)
		{
			return redirect()->back()->with('success', 'Successfully Deleted');
			
		}else
		{
			return redirect()->back()->with('error','Deleted fails');
		}
	}

	public function healthstoreEdit(Request $request, $id)
	{
		
		$result['healthstore'] = Healthstore::where(['id'=>$id])->first();
		
		return view('admin/edit-healthstore',$result);
	}



	public function postHealthstoreEdit(Request $request,$id)
	{
		$validate = Validator::make($request->all(), [
				'name' => 'required',
				'oldprice' => 'required',
				'newprice' => 'required',
		]);
		
		if(!$validate->fails())
		{
			$data['name'] = $request->name;
			$data['oldprice'] = $request->oldprice;
			$data['newprice'] = $request->newprice;
			
			if($request->file('image'))
			{
				$data['image'] = time().'.'.$request->image->extension();  
				$request->image->move(public_path('front/healthstore/'), $data['image']);

			}
		
			$result = Healthstore::where(['id'=>$id])->update($data);
			
			if($result)
			{
				return redirect()->back()->with('success', 'Successfully Updated');
				
			}else
			{
				return redirect()->back()->with('error','Please enter valid Details');
			}
		
		}else
		{
			return redirect()->back()->withErrors($validate);
		}			
		
	}


/*************** health store *************************************/



/*************** Slider Start *************************************/

	public function addSlider()
	{
		return view('admin/add-slider');
	}

	
	public function postAddSlider(Request $request)
	{
		$validate = Validator::make($request->all(), [
				'sliderImage' => 'required|mimes:jpeg,bmp,png'				
		]);
		
		if(!$validate->fails())
		{
			
			if($request->file('sliderImage'))
			{
				$data['sliderImage'] = time().'.'.$request->sliderImage->extension();  
				$request->sliderImage->move(public_path('front/slider/'), $data['sliderImage']);

				$slider = new Slider();
				$result = $slider->insert($data);
				if($result)
				{
					return redirect('/admin/add-slider')->with('success', 'Successfully Added');
					
				}else
				{
					return redirect()->back()->with('error','Please upload valid slider image');
				}			

				
			}else{
				
				return redirect()->back()->with('error','Please upload  slider image');
			}

		}else
		{
			return redirect()->back()->withErrors($validate);
		}
	  		
	}

	public function sliderList()
	{
		$slider = new Slider();
		$result = $slider->get();
		return view('admin/slider-list')->with('sliders',$result);
	}

	public function sliderDelete(Request $request, $id)
	{
		$slider = new Slider();
		$result = $slider::where(['id'=>$id])->delete();
		if($result)
		{
			return redirect()->back()->with('success', 'Successfully Deleted');
			
		}else
		{
			return redirect()->back()->with('error','Deleted fails');
		}
	}

    public function sliderPublish(Request $request, $id)
	{

		$slider = new Slider();
		$result = $slider::where(['id'=>$id])->update(['status'=>'1']);
		if($result)
		{
			return redirect()->back()->with('success', 'Successfully Publish');
			
		}else
		{
			return redirect()->back()->with('error','Publish fails');
		}
	}

    public function sliderUnpublish(Request $request, $id)
	{

		$slider = new Slider();
		$result = $slider::where(['id'=>$id])->update(['status'=>'0']);
		if($result)
		{
			return redirect()->back()->with('success', 'Successfully Unpublish');
			
		}else
		{
			return redirect()->back()->with('error','Unpublish fails');
		}
	}
	
	
	/************************** Slider End ******************************/
	
	/************************** order End ******************************/	
	
	public function orderList()
	{
		$result = Order::get();
		return view('admin/order-list')->with('orders',$result);
	}
	
	
	public function orderDelete(Request $request, $id)
	{
		$result = Order::where(['id'=>$id])->delete();
		if($result)
		{
			return redirect()->back()->with('success', 'Successfully Deleted');
			
		}else
		{
			return redirect()->back()->with('error','Deleted fails');
		}
	}
	
	/************************** order End ******************************/
	
	/************************** Users End ******************************/	
	
	public function usersList()
	{
		$result = DB::table('users')->get();
		return view('admin/users-list')->with('users',$result);
	}
	
	
	public function usersDelete(Request $request, $id)
	{
		$result = DB::table('users')->where(['id'=>$id])->delete();
		if($result)
		{
			return redirect()->back()->with('success', 'Successfully Deleted');
			
		}else
		{
			return redirect()->back()->with('error','Deleted fails');
		}
	}
	
	/************************** Users End ******************************/
	
	
	
	
	public function editHomePageEdit()
	{
		$result = DB::table('homepage')->where(['id'=>'1'])->first();
		return view('admin/edit-homepage')->with(['about'=>$result]);
	}

    
    public function postEditHomePageEdit(Request $request)
	{
		$validate = Validator::make($request->all(), [
				'title' => 'required',
				'content' => 'required',				
		]);
		
		if(!$validate->fails())
		{
			$data['title']   = $request->title;
			$data['content'] = strip_tags($request->content);
			

			$result = DB::table('homepage')->where(['id'=>1])->update($data);
			if($result)
			{
				return redirect()->back()->with('success', 'Successfully Edited');
				
			}else
			{
				return redirect()->back()->with('error','Please enter valid page Details');
			}
		
		}else
		{
			return redirect()->back()->withErrors($validate);
		}			
		
	}

	public function addTestimonial()
	{
		return view('admin/add-testimonial');
	}


	public function postAddTestimonial(Request $request)
	{

		
		$data['name'] = $request->name;
		$data['content'] = strip_tags($request->content);
		
		if($_FILES['image']['name'] != '')
		{
			$data['image'] = time().'.'.$request->image->extension();  
			$request->image->move(public_path('front/testimonials/'), $data['image']);	
		}	

		$result = DB::table('testimonials')->insert($data);
		if($result)
		{
			return redirect()->back()->with('success', 'Successfully Added');
			
		}else
		{
			return redirect()->back()->with('error','Please enter valid  Details');
		}
		
		
	}

	
	public function testimonialList()
	{
		$result = DB::table('testimonials')->get();
		return view('admin/testimonial-list')->with('testimonials',$result);
	}

	public function testimonialDelete(Request $request, $id)
	{
		$result = DB::table('testimonials')->where(['id'=>$id])->delete();
		if($result)
		{
			return redirect()->back()->with('success', 'Successfully Deleted');
			
		}else
		{
			return redirect()->back()->with('error','Deleted fails');
		}
	}


    public function testimonialEdit(Request $request, $id)
	{
		$result['testimonial'] = DB::table('testimonials')->where(['id'=>$id])->first();
		
		return view('admin/edit-testimonial',$result);
	}


    public function postTestimonialEdit(Request $request,$id)
	{

		$data['name'] = $request->name;
		$data['content'] = strip_tags($request->content);
		
		if($_FILES['image']['name'] != '')
		{
			$data['image'] = time().'.'.$request->image->extension();  
			$request->image->move(public_path('front/testimonials/'), $data['image']);	
		}	

		$result = DB::table('testimonials')->where(['id'=>$id])->update($data);
		if($result)
		{
			return redirect()->back()->with('success', 'Successfully Edited');
			
		}else
		{
			return redirect()->back()->with('error','Please enter valid  Details');
		}
		
		
	}
	
	public function addBlog()
	{
		return view('admin/add-blog');
	}

	
	public function postAddBlog(Request $request)
	{
		$validate = Validator::make($request->all(), [
				'title' => 'required',
				'content' => 'required',			
		]);
		
		if(!$validate->fails())
		{
			$data['title'] = $request->title;
			$data['content'] = $request->content;
			$data['slug'] = str_slug($request->title, "-").time();
			
			if($_FILES['image']['name'] != '')
			{
				$data['image'] = time().'.'.$request->image->extension();  
				$request->image->move(public_path('front/blog/'), $data['image']);	
			}
            			 
			$result = DB::table('blogs')->insert($data);
			
			if($result)
			{
				return redirect()->back()->with('success', 'Successfully Added');
				
			}else
			{
				return redirect()->back()->with('error','Please enter valid  Details');
			}
		
		}else
		{
			return redirect()->back()->withErrors($validate);
		}			
		
	}

	public function blogList()
	{
		$result = DB::table('blogs')->get();
		return view('admin/blog-list')->with('blogs',$result);
	}

	public function blogDelete(Request $request, $id)
	{
		$result = DB::table('blogs')->where(['id'=>$id])->delete();
		
		if($result)
		{
			return redirect()->back()->with('success', 'Successfully Deleted');
			
		}else
		{
			return redirect()->back()->with('error','Deleted fails');
		}
	}

	public function blogEdit(Request $request, $id)
	{
		
		$result['blog'] = DB::table('blogs')->where(['id'=>$id])->first();
		
		return view('admin/edit-blog',$result);
	}



	public function postblogEdit(Request $request,$id)
	{
		$validate = Validator::make($request->all(), [
				'title' => 'required',
				'content' => 'required',			
		]);
		
		if(!$validate->fails())
		{
			$data['title'] = $request->title;
			$data['content'] = $request->content;
			
			
			if($_FILES['image']['name'] != '')
			{
				$data['image'] = time().'.'.$request->image->extension();  
				$request->image->move(public_path('front/blog/'), $data['image']);	
			}
            			 
			$result = DB::table('blogs')->where(['id'=>$id])->update($data);
			
			if($result)
			{
				return redirect()->back()->with('success', 'Successfully Edited');
				
			}else
			{
				return redirect()->back()->with('error','Please enter valid  Details');
			}
		
		}else
		{
			return redirect()->back()->withErrors($validate);
		}			
		
	}


    /*********************** Coupon Start ***********************************/
    
    public function addCoupon()
	{
		return view('admin/add-coupon');
	}

	
	public function postAddCoupon(Request $request)
	{
		$validate = Validator::make($request->all(), [
				'code' => 'required',
				'amount' => 'required',
		]);
		
		if(!$validate->fails())
		{
			$data['code'] = $request->code;
			$data['amount'] = $request->amount;
			
			$result = Coupon::insert($data);
			
			if($result)
			{
				return redirect()->back()->with('success', 'Successfully Added');
				
			}else
			{
				return redirect()->back()->with('error','Please enter valid Details');
			}
		
		}else
		{
			return redirect()->back()->withErrors($validate);
		}			
		
	}

	public function couponList()
	{
		$result = Coupon::get();
		return view('admin/coupon-list')->with('coupons',$result);
	}

	public function couponDelete(Request $request, $id)
	{
		$result = Coupon::where(['id'=>$id])->delete();
		
		if($result)
		{
			return redirect()->back()->with('success', 'Successfully Deleted');
			
		}else
		{
			return redirect()->back()->with('error','Deleted fails');
		}
	}

	public function couponEdit(Request $request, $id)
	{
		
		$result['coupon'] = Coupon::where(['id'=>$id])->first();
		
		return view('admin/edit-coupon',$result);
	}



	public function postCouponEdit(Request $request,$id)
	{
		$validate = Validator::make($request->all(), [
				'code' => 'required',
				'amount' => 'required'
		]);
		
		if(!$validate->fails())
		{
			$data['code'] = $request->code;
			$data['amount'] = $request->amount;
			
			$result = Coupon::where(['id'=>$id])->update($data);
			
			if($result)
			{
				return redirect()->back()->with('success', 'Successfully Updated');
				
			}else
			{
				return redirect()->back()->with('error','Please enter valid Details');
			}
		
		}else
		{
			return redirect()->back()->withErrors($validate);
		}			
		
	}
	
	public function postcouponActive(Request $request,$id)
	{

        $data['status'] = 1;
		$result = Coupon::where(['id'=>$id])->update($data);
		
		if($result)
		{
			return redirect()->back()->with('success', 'Successfully Updated');
			
		}else
		{
			return redirect()->back()->with('error','Please enter valid Details');
		}
	
					
		
	}
	
	public function postcouponDeactive(Request $request,$id)
	{

        $data['status'] = 2;
		$result = Coupon::where(['id'=>$id])->update($data);
		
		if($result)
		{
			return redirect()->back()->with('success', 'Successfully Updated');
			
		}else
		{
			return redirect()->back()->with('error','Please enter valid Details');
		}
	
					
		
	}
	
	public function updatedoctorstatus(Request $request)
	{
        $doctor_id = $request->doctor_id;
        $data['status'] = $request->status;

		$result = Doctor::where(['id'=>$doctor_id])->update($data);
		
		if($result)
		{
			echo true;
			
		}else
		{
			echo false;
		}
	
					
		
	}
	
	public function updatestorestatus(Request $request)
	{
        $store_id = $request->store_id;
        $data['status'] = $request->status;

		$result = Store::where(['id'=>$store_id])->update($data);
		
		if($result)
		{
			echo true;
			
		}else
		{
			echo false;
		}
	
					
		
	}

    /*********************** Coupon Start ***********************************/
    
    /******************* Seller List *************************************/
    
        public function seller_list()
    	{
    		$result = Seller::get();
    		return view('admin/seller-list')->with('sellers',$result);
    	}
    	
    	public function seller_delete(Request $request, $id)
    	{
    		$result = Seller::where(['id'=>$id])->delete();
    		
    		if($result)
    		{
    			return redirect()->back()->with('success', 'Successfully Deleted');
    			
    		}else
    		{
    			return redirect()->back()->with('error','Deleted fails');
    		}
    	}
    	
    	public function seller_details(Request $request, $id)
    	{
    		$result = Seller::where(['id'=>$id])->first();
    		
    		return view('admin/seller-details')->with('seller',$result);
    	}
    
    
    /******************* Seller List *************************************/
	
    /******************* Doctor Enquiry  List Start *************************************/
	
	public function doctor_enquiry_list()
	{
	    
	    $result['enquiry'] = Booking::get();
		return view('admin/enquiry-list',$result);
	}
	
	public function enquiry_details(Request $request,$id)
	{	    
	    $result['enquiry'] = Booking::where(['id'=>$id])->first();
		return view('admin/enquiry-details',$result);
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
	
    /******************* Doctor Enquiry  List End *************************************/
    
    
    
/*************** store *************************************/


	
	public function storesList()
	{
		$result = Store::get();
		return view('admin/stores-list')->with('stores',$result);
	}

	public function storesDelete(Request $request, $id)
	{
		$result = Store::where(['id'=>$id])->delete();
		
		if($result)
		{
			return redirect()->back()->with('success', 'Successfully Deleted');
			
		}else
		{
			return redirect()->back()->with('error','Deleted fails');
		}
	}
	
	
    public function storesView(Request $request, $id)
	{
		$result = Store::where(['id'=>$id])->first();
		return view('admin/stores-details')->with('stores',$result);
	
	}


	public function qrcodeView(Request $request, $id)
	{
		$result['url'] = route('storeform',base64_encode($id));
	
		return view('admin/qrcode',$result);
	
	}
	
    public function storesEnquiryList()
	{
		$result = DB::table('store_enquiry')->get();
		return view('admin/stores-enquiry-list')->with('enquiry',$result);
	}
	
	public function storesEnquiryDelete(Request $request, $id)
	{
		$result = DB::table('store_enquiry')->where(['id'=>$id])->delete();
		
		if($result)
		{
			return redirect()->back()->with('success', 'Successfully Deleted');
			
		}else
		{
			return redirect()->back()->with('error','Deleted fails');
		}
	}
	
	public function storesEnquiryDetails(Request $request, $id)
	{
		
		$result = DB::table('store_enquiry')->where(['id'=>$id])->first();
		return view('admin/stores-enquiry-details')->with('enquiry',$result);
	
	}

/*************** store *************************************/

    
	 

	public function logout(Request $request)
	{	
		Session::forget('admin');
        return redirect('/admin')->with('success', 'Logged Out Successfully');
	}  
	

}
