<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/clear-cache', function() {
    Artisan::call('cache:clear');
    return "Cache is cleared";
});

Route::get('/', 'FrontControler@index')->name('/');
Route::get('/spesilities', 'FrontControler@spesilities')->name('spesilities');
Route::get('/specialists/{slug}', 'FrontControler@specialists')->name('specialists');
Route::get('/labtest', 'FrontControler@labtest')->name('labtest');
Route::get('/epharmacy', 'FrontControler@epharmacy')->name('epharmacy');
Route::get('/product/product-detail/{slug}', 'FrontControler@productDetail')->name('product.product-detail');
Route::get('/health_store', 'FrontControler@health_store')->name('health_store');
Route::get('/doctors', 'FrontControler@doctors')->name('doctors');
Route::get('/search-doctor', 'FrontControler@search_doctor')->name('search-doctor');
Route::get('/doctor-profile/{slug}', 'FrontControler@doctorprofile')->name('doctor-profile');
Route::get('/addtocart', 'FrontControler@addtocart')->name('addtocart');
Route::get('/addtocart-lab', 'FrontControler@addtocartlab')->name('addtocart-lab');
Route::get('/updatecartminus', 'FrontControler@updatecartminus')->name('updatecartminus');
Route::get('/updatecartplus', 'FrontControler@updatecartplus')->name('updatecartplus');
Route::get('/cart', 'FrontControler@cart')->name('cart');
Route::get('/remove-cart/{id}', 'FrontControler@removecart')->name('remove-cart');
Route::get('/clearcart', 'FrontControler@clearCart')->name('clearcart');
Route::get('/checkout', 'FrontControler@checkout')->name('checkout');
Route::get('/blog', 'FrontControler@blog')->name('blog');
Route::get('/blog-details/{slug}', 'FrontControler@blogDetails')->name('blog-details');
Route::get('/privacy', 'FrontControler@privacy')->name('privacy');
Route::get('/faq', 'FrontControler@faq')->name('faq');
Route::get('/register', 'FrontControler@register')->name('register');
Route::get('/now-register', 'FrontControler@nowregister')->name('now-register');
Route::get('/verify-otp', 'FrontControler@verifyotp')->name('verify-otp');
Route::get('/submit-verify-otp', 'FrontControler@submit_verify_otp')->name('submit-verify-otp');
Route::get('/sendotp', 'FrontControler@sendotp')->name('sendotp');
Route::get('/resend-otp', 'FrontControler@resend_otp')->name('resend-otp');
Route::get('/seller-registration', 'FrontControler@seller_registration')->name('seller-registration');
Route::post('/post-seller-registration', 'FrontControler@post_seller_registration')->name('post-seller-registration');
Route::get('/doctor-send-otp', 'FrontControler@doctor_send_otp')->name('doctor-send-otp');
Route::get('/doctor-resend-otp', 'FrontControler@doctor_resend_otp')->name('doctor-resend-otp');

Route::get('/store-send-otp', 'FrontControler@store_send_otp')->name('store-send-otp');
Route::get('/store-resend-otp', 'FrontControler@store_resend_otp')->name('store-resend-otp');

Route::get('/details/{slug}', 'FrontControler@details')->name('details');
Route::get('/labtest-details/{slug}', 'FrontControler@labtest_details')->name('labtest-details');
Route::get('payment-razorpay', 'FrontControler@paywithrazorpay')->name('paywithrazorpay');
Route::get('user-forgot-password', 'FrontControler@user_forgot_password')->name('user-forgot-password');
Route::post('user-forgot-password', 'FrontControler@post_user_forgot_password')->name('user-forgot-password');
Route::get('doctor-forgot-password', 'FrontControler@doctor_forgot_password')->name('doctor-forgot-password');
Route::post('doctor-forgot-password', 'FrontControler@post_doctor_forgot_password')->name('doctor-forgot-password');

Route::get('store-forgot-password', 'FrontControler@store_forgot_password')->name('store-forgot-password');
Route::post('store-forgot-password', 'FrontControler@post_store_forgot_password')->name('store-forgot-password');

Route::get('about-us', 'FrontControler@about_us')->name('about-us');
Route::get('term-conditions', 'FrontControler@term_conditions')->name('term-conditions');

Route::get('/storeform/{id}', 'FrontControler@storeform')->name('storeform');
Route::post('/submit-store-enquiry', 'FrontControler@submit_store_enquiry')->name('submit-store-enquiry');



Route::get('/apply-coupon',[
'middleware' => 'UserMiddleware',
'uses' => 'FrontControler@applycoupon']
)->name('apply-coupon');

Route::post('/payment',[
'middleware' => 'UserMiddleware',
'uses' => 'FrontControler@payment']
)->name('payment');

Route::any('/response',[
'middleware' => 'UserMiddleware',
'uses' => 'FrontControler@response']
)->name('response');

Route::any('/booking_responce',[
'middleware' => 'UserMiddleware',
'uses' => 'FrontControler@booking_responce']
)->name('booking_responce');

/************************* Store Panel Start ***************************/

Route::get('/store-register', 'FrontControler@store_register')->name('store-register');
Route::get('/post-store-register', 'FrontControler@post_store_register')->name('post-store-register');
Route::post('/poststorelogin', 'FrontControler@poststorelogin')->name('poststorelogin');


Route::get('/store/dashboard',[
'middleware' => 'StoreMiddleware',
'uses' => 'StoreController@dashboard']
)->name('store.dashboard');

Route::get('/store/edit-profile',[
'middleware' => 'StoreMiddleware',
'uses' => 'StoreController@edit_profile']
)->name('store.edit-profile');

Route::post('/store/edit-profile',[
'middleware' => 'StoreMiddleware',
'uses' => 'StoreController@post_edit_profile']
)->name('store.edit-profile');


Route::get('/store/enquiry',[
'middleware' => 'StoreMiddleware',
'uses' => 'StoreController@enquiry']
)->name('store.enquiry');

Route::get('/store/stores-enquiry-details/{id}',[
'middleware' => 'StoreMiddleware',
'uses' => 'StoreController@enquiryDetail']
)->name('store.enquiryDetail');


Route::get('/store/logout',[
'middleware' => 'StoreMiddleware',
'uses' => 'StoreController@logout']
)->name('store.logout');


/************************* Store Panel End ***************************/


/************************ Doctor Panel Start ***************/

Route::get('/doctor-register', 'FrontControler@doctor_register')->name('doctor-register');
Route::get('/post-doctor-register', 'FrontControler@post_doctor_register')->name('post-doctor-register');
Route::post('/postdoctorlogin', 'FrontControler@postdoctorlogin')->name('postdoctorlogin');

Route::get('/doctor/dashboard',[
'middleware' => 'DoctorMiddleware',
'uses' => 'DoctorController@dashboard']
)->name('doctor.dashboard');

Route::get('/doctor/edit-profile',[
'middleware' => 'DoctorMiddleware',
'uses' => 'DoctorController@edit_profile']
)->name('doctor.edit-profile');

Route::post('/doctor/edit-profile',[
'middleware' => 'DoctorMiddleware',
'uses' => 'DoctorController@post_edit_profile']
)->name('doctor.edit-profile');

Route::get('/doctor/add-slot',[
'middleware' => 'DoctorMiddleware',
'uses' => 'DoctorController@addSlot']
)->name('doctor.add-slot');

Route::post('/doctor/add-slot',[
'middleware' => 'DoctorMiddleware',
'uses' => 'DoctorController@postaddSlot']
)->name('doctor.add-slot');

Route::get('/doctor/slot-list',[
'middleware' => 'DoctorMiddleware',
'uses' => 'DoctorController@slotlist']
)->name('doctor.slot-list');

Route::get('/doctor/delete-slot/{id}',[
'middleware' => 'DoctorMiddleware',
'uses' => 'DoctorController@deleteSlot']
)->name('doctor.delete-slot');

Route::get('/doctor/enquiry',[
'middleware' => 'DoctorMiddleware',
'uses' => 'DoctorController@enquiry']
)->name('doctor.enquiry');

Route::get('/doctor/delete-enquiry/{id}',[
'middleware' => 'DoctorMiddleware',
'uses' => 'DoctorController@delete_enquiry']
)->name('doctor.delete-enquiry');

Route::get('/doctor/enquiry-details/{id}',[
'middleware' => 'DoctorMiddleware',
'uses' => 'DoctorController@enquiry_details']
)->name('doctor.enquiry-details');


Route::get('/doctor/logout',[
'middleware' => 'DoctorMiddleware',
'uses' => 'DoctorController@logout']
)->name('doctor.logout');

/************************ Doctor Panel End ***************/

/************************ User Panel Start ***************/

Route::post('/postlogin', 'FrontControler@postlogin')->name('postlogin');

Route::get('/user/dashboard',[
'middleware' => 'UserMiddleware',
'uses' => 'UserController@dashboard']
)->name('user.dashboard');

Route::get('/user/edit-profile',[
'middleware' => 'UserMiddleware',
'uses' => 'UserController@edit_profile']
)->name('user.edit-profile');

Route::post('/user/edit-profile',[
'middleware' => 'UserMiddleware',
'uses' => 'UserController@post_edit_profile']
)->name('user.edit-profile');


Route::get('/user/order-history',[
'middleware' => 'UserMiddleware',
'uses' => 'UserController@order_history']
)->name('user.order-history');

Route::get('/user/booking-list',[
'middleware' => 'UserMiddleware',
'uses' => 'UserController@booking_list']
)->name('user.booking-list');

Route::get('/user/delete-booking/{id}',[
'middleware' => 'UserMiddleware',
'uses' => 'UserController@delete_booking']
)->name('user.delete-booking');

Route::post('/user/book-appointment',[
'middleware' => 'UserMiddleware',
'uses' => 'UserController@book_appointment']
)->name('user.book-appointment');

Route::get('/user/booking-details/{id}',[
'middleware' => 'UserMiddleware',
'uses' => 'UserController@booking_details']
)->name('user.booking-details');

Route::get('/user/logout',[
'middleware' => 'UserMiddleware',
'uses' => 'UserController@logout']
)->name('user.logout');

/************************ User Panel End ***************/


/********** Admin Panel Start **************/

Route::get('/admin','AdminController@login');
Route::post('/admin/login','AdminController@post_login');

Route::get('/admin/dashboard',[
'middleware' => 'AdminMiddleware',
'uses' => 'AdminController@dashboard']
);

Route::get('/admin/add-service',[
'middleware' => 'AdminMiddleware',
'uses' => 'AdminController@addService']
);

Route::post('/admin/add-service',[
'middleware' => 'AdminMiddleware',
'uses' => 'AdminController@postAddService']
);

Route::get('/admin/service-list',[
'middleware' => 'AdminMiddleware',
'uses' => 'AdminController@serviceList']
);

Route::get('/admin/service-delete/{id}',[
'middleware' => 'AdminMiddleware',
'uses' => 'AdminController@serviceDelete']
);

Route::get('/admin/service-edit/{id}',[
'middleware' => 'AdminMiddleware',
'uses' => 'AdminController@serviceEdit']
);
Route::post('/admin/service-edit/{id}',[
'middleware' => 'AdminMiddleware',
'uses' => 'AdminController@postServiceEdit']
)->name('admin.service-edit');



Route::get('/admin/add-specialists',[
'middleware' => 'AdminMiddleware',
'uses' => 'AdminController@addSpecialists']
);

Route::post('/admin/add-specialists',[
'middleware' => 'AdminMiddleware',
'uses' => 'AdminController@postAddSpecialists']
);

Route::get('/admin/specialists-list',[
'middleware' => 'AdminMiddleware',
'uses' => 'AdminController@specialistsList']
);

Route::get('/admin/specialists-delete/{id}',[
'middleware' => 'AdminMiddleware',
'uses' => 'AdminController@specialistsDelete']
);

Route::get('/admin/specialists-edit/{id}',[
'middleware' => 'AdminMiddleware',
'uses' => 'AdminController@specialistsEdit']
);
Route::post('/admin/specialists-edit/{id}',[
'middleware' => 'AdminMiddleware',
'uses' => 'AdminController@postSpecialistsEdit']
)->name('admin.specialists-edit');




Route::get('/admin/add-doctors',[
'middleware' => 'AdminMiddleware',
'uses' => 'AdminController@addDoctors']
);

Route::post('/admin/add-doctors',[
'middleware' => 'AdminMiddleware',
'uses' => 'AdminController@postAddDoctors']
);

Route::get('/admin/doctors-list',[
'middleware' => 'AdminMiddleware',
'uses' => 'AdminController@doctorsList']
);

Route::get('/admin/doctors-delete/{id}',[
'middleware' => 'AdminMiddleware',
'uses' => 'AdminController@doctorsDelete']
);

Route::get('/admin/doctors-edit/{id}',[
'middleware' => 'AdminMiddleware',
'uses' => 'AdminController@doctorsEdit']
);

Route::post('/admin/doctors-edit/{id}',[
'middleware' => 'AdminMiddleware',
'uses' => 'AdminController@postDoctorsEdit']
)->name('admin.doctors-edit');

Route::get('/admin/update-doctor-status/',[
'middleware' => 'AdminMiddleware',
'uses' => 'AdminController@updatedoctorstatus']
)->name('admin.update-doctor-status');


Route::get('/admin/stores-list',[
'middleware' => 'AdminMiddleware',
'uses' => 'AdminController@storesList']
);

Route::get('/admin/stores-delete/{id}',[
'middleware' => 'AdminMiddleware',
'uses' => 'AdminController@storesDelete']
);

Route::get('/admin/stores-enquiry-delete/{id}',[
'middleware' => 'AdminMiddleware',
'uses' => 'AdminController@storesEnquiryDelete']
);

Route::get('/admin/stores-enquiry-details/{id}',[
'middleware' => 'AdminMiddleware',
'uses' => 'AdminController@storesEnquiryDetails']
);

Route::get('/admin/stores-view/{id}',[
'middleware' => 'AdminMiddleware',
'uses' => 'AdminController@storesView']
);


Route::get('/admin/update-store-status/',[
'middleware' => 'AdminMiddleware',
'uses' => 'AdminController@updatestorestatus']
)->name('admin.update-store-status');

Route::get('/admin/stores-enquiry-list',[
'middleware' => 'AdminMiddleware',
'uses' => 'AdminController@storesEnquiryList']
);


Route::get('/admin/stores-enquiry-delete/{id}',[
'middleware' => 'AdminMiddleware',
'uses' => 'AdminController@storesEnquiryDelete']
);


Route::get('/admin/add-labtest',[
'middleware' => 'AdminMiddleware',
'uses' => 'AdminController@addLabtest']
);

Route::post('/admin/add-labtest',[
'middleware' => 'AdminMiddleware',
'uses' => 'AdminController@postAddLabtest']
);

Route::get('/admin/labtest-list',[
'middleware' => 'AdminMiddleware',
'uses' => 'AdminController@labtestList']
);

Route::get('/admin/labtest-delete/{id}',[
'middleware' => 'AdminMiddleware',
'uses' => 'AdminController@labtestDelete']
);

Route::get('/admin/labtest-edit/{id}',[
'middleware' => 'AdminMiddleware',
'uses' => 'AdminController@labtestEdit']
);
Route::post('/admin/labtest-edit/{id}',[
'middleware' => 'AdminMiddleware',
'uses' => 'AdminController@postLabtestEdit']
)->name('admin.labtest-edit');



Route::get('/admin/add-pharmacy',[
'middleware' => 'AdminMiddleware',
'uses' => 'AdminController@addPharmacy']
);

Route::post('/admin/add-pharmacy',[
'middleware' => 'AdminMiddleware',
'uses' => 'AdminController@postAddPharmacy']
);

Route::get('/admin/pharmacy-list',[
'middleware' => 'AdminMiddleware',
'uses' => 'AdminController@pharmacyList']
);

Route::get('/admin/pharmacy-delete/{id}',[
'middleware' => 'AdminMiddleware',
'uses' => 'AdminController@pharmacyDelete']
);

Route::get('/admin/pharmacy-edit/{id}',[
'middleware' => 'AdminMiddleware',
'uses' => 'AdminController@pharmacyEdit']
);
Route::post('/admin/pharmacy-edit/{id}',[
'middleware' => 'AdminMiddleware',
'uses' => 'AdminController@postPharmacyEdit']
)->name('admin.pharmacy-edit');




Route::get('/admin/add-healthstore',[
'middleware' => 'AdminMiddleware',
'uses' => 'AdminController@addHealthstore']
);

Route::post('/admin/add-healthstore',[
'middleware' => 'AdminMiddleware',
'uses' => 'AdminController@postAddHealthstore']
);

Route::get('/admin/healthstore-list',[
'middleware' => 'AdminMiddleware',
'uses' => 'AdminController@healthstoreList']
);

Route::get('/admin/healthstore-delete/{id}',[
'middleware' => 'AdminMiddleware',
'uses' => 'AdminController@healthstoreDelete']
);

Route::get('/admin/healthstore-edit/{id}',[
'middleware' => 'AdminMiddleware',
'uses' => 'AdminController@healthstoreEdit']
);
Route::post('/admin/healthstore-edit/{id}',[
'middleware' => 'AdminMiddleware',
'uses' => 'AdminController@postHealthstoreEdit']
)->name('admin.healthstore-edit');



Route::get('/admin/add-slider',[
'middleware' => 'AdminMiddleware',
'uses' => 'AdminController@addSlider']
);

Route::post('/admin/add-slider',[
'middleware' => 'AdminMiddleware',
'uses' => 'AdminController@postAddSlider']
);

Route::get('/admin/slider-list',[
'middleware' => 'AdminMiddleware',
'uses' => 'AdminController@sliderList']
);

Route::get('/admin/slider-delete/{id}',[
'middleware' => 'AdminMiddleware',
'uses' => 'AdminController@sliderDelete']
);

Route::get('/admin/slider-publish/{id}',[
'middleware' => 'AdminMiddleware',
'uses' => 'AdminController@sliderPublish']
);

Route::get('/admin/slider-unpublish/{id}',[
'middleware' => 'AdminMiddleware',
'uses' => 'AdminController@sliderUnpublish']
);

Route::get('/admin/slider-edit/{id}',[
'middleware' => 'AdminMiddleware',
'uses' => 'AdminController@sliderEdit']
);

Route::post('/admin/edit-slider/{id}',[
'middleware' => 'AdminMiddleware',
'uses' => 'AdminController@postsliderEdit']
)->name('admin/edit-slider');



Route::get('/admin/order-list',[
'middleware' => 'AdminMiddleware',
'uses' => 'AdminController@orderList']
);

Route::get('/admin/order-delete/{id}',[
'middleware' => 'AdminMiddleware',
'uses' => 'AdminController@orderDelete']
);


Route::get('/admin/users-list',[
'middleware' => 'AdminMiddleware',
'uses' => 'AdminController@usersList']
);

Route::get('/admin/user-delete/{id}',[
'middleware' => 'AdminMiddleware',
'uses' => 'AdminController@usersDelete']
);



Route::get('/admin/edit-aboutus',[
'middleware' => 'AdminMiddleware',
'uses' => 'AdminController@editAboutus']
);

Route::post('/admin/edit-aboutus',[
'middleware' => 'AdminMiddleware',
'uses' => 'AdminController@postEditAboutus']
);

Route::get('/admin/edit-about',[
'middleware' => 'AdminMiddleware',
'uses' => 'AdminController@editAbout']
);

Route::post('/admin/edit-about',[
'middleware' => 'AdminMiddleware',
'uses' => 'AdminController@postEditAbout']
);


Route::get('/admin/add-testimonial',[
'middleware' => 'AdminMiddleware',
'uses' => 'AdminController@addTestimonial']
);

Route::post('/admin/add-testimonial',[
'middleware' => 'AdminMiddleware',
'uses' => 'AdminController@postAddTestimonial']
);

Route::get('/admin/testimonial-list',[
'middleware' => 'AdminMiddleware',
'uses' => 'AdminController@testimonialList']
);

Route::get('/admin/testimonial-delete/{id}',[
'middleware' => 'AdminMiddleware',
'uses' => 'AdminController@testimonialDelete']
);


Route::get('/admin/testimonial-edit/{id}',[
'middleware' => 'AdminMiddleware',
'uses' => 'AdminController@testimonialEdit']
);

Route::post('/admin/edit-testimonial/{id}',[
'middleware' => 'AdminMiddleware',
'uses' => 'AdminController@postTestimonialEdit']
);


Route::get('/admin/add-blog',[
'middleware' => 'AdminMiddleware',
'uses' => 'AdminController@addBlog']
);

Route::post('/admin/add-blog',[
'middleware' => 'AdminMiddleware',
'uses' => 'AdminController@postAddBlog']
);

Route::get('/admin/blog-list',[
'middleware' => 'AdminMiddleware',
'uses' => 'AdminController@blogList']
);

Route::get('/admin/blog-delete/{id}',[
'middleware' => 'AdminMiddleware',
'uses' => 'AdminController@blogDelete']
);

Route::get('/admin/blog-edit/{id}',[
'middleware' => 'AdminMiddleware',
'uses' => 'AdminController@blogEdit']
);
Route::post('/admin/edit-blog/{id}',[
'middleware' => 'AdminMiddleware',
'uses' => 'AdminController@postblogEdit']
)->name('admin.edit-blog');


Route::get('/admin/add-coupon',[
'middleware' => 'AdminMiddleware',
'uses' => 'AdminController@addCoupon']
);

Route::post('/admin/add-coupon',[
'middleware' => 'AdminMiddleware',
'uses' => 'AdminController@postAddCoupon']
);

Route::get('/admin/coupon-list',[
'middleware' => 'AdminMiddleware',
'uses' => 'AdminController@couponList']
);

Route::get('/admin/coupon-delete/{id}',[
'middleware' => 'AdminMiddleware',
'uses' => 'AdminController@couponDelete']
);

Route::get('/admin/coupon-edit/{id}',[
'middleware' => 'AdminMiddleware',
'uses' => 'AdminController@couponEdit']
);

Route::post('/admin/edit-coupon/{id}',[
'middleware' => 'AdminMiddleware',
'uses' => 'AdminController@postcouponEdit']
)->name('admin.edit-coupon');

Route::get('/admin/coupon-active/{id}',[
'middleware' => 'AdminMiddleware',
'uses' => 'AdminController@postcouponActive']
);

Route::get('/admin/coupon-deactive/{id}',[
'middleware' => 'AdminMiddleware',
'uses' => 'AdminController@postcouponDeactive']
);

Route::get('/admin/seller-list',[
'middleware' => 'AdminMiddleware',
'uses' => 'AdminController@seller_list']
);

Route::get('/admin/seller-delete/{id}',[
'middleware' => 'AdminMiddleware',
'uses' => 'AdminController@seller_delete']
);

Route::get('/admin/seller-details/{id}',[
'middleware' => 'AdminMiddleware',
'uses' => 'AdminController@seller_details']
);

Route::get('/admin/doctor-enquiry-list',[
'middleware' => 'AdminMiddleware',
'uses' => 'AdminController@doctor_enquiry_list']
);

Route::get('/admin/delete-enquiry/{id}',[
'middleware' => 'AdminMiddleware',
'uses' => 'AdminController@delete_enquiry']
)->name('admin.delete-enquiry');

Route::get('/admin/enquiry-details/{id}',[
'middleware' => 'AdminMiddleware',
'uses' => 'AdminController@enquiry_details']
)->name('admin.enquiry-details');

Route::get('/admin/qrcode-view/{id}',[
'middleware' => 'AdminMiddleware',
'uses' => 'AdminController@qrcodeView']
);

Route::get('/admin/logout',[
'middleware' => 'AdminMiddleware',
'uses' => 'AdminController@logout']
);

/********** Admin Panel End **************/

