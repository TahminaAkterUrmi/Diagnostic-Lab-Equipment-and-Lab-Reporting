<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UserController as AdminPatientController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\SlotController;
use App\Http\Controllers\RequestController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\AppointmentController as AdminAppointmentController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EquipmentController;
use App\Http\Controllers\MachineController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\website\AddtocartController;
use App\Http\Controllers\website\TestController as WebsiteTestController;
use App\Http\Controllers\website\UserController;
use App\Http\Controllers\website\PanelController; 
use App\Http\Controllers\website\AppointmentController;
use App\Http\Controllers\website\ProfileController;

/*
|---------------------------------------------s-----------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// Route::get('/', function () {
// return view("website.pages.home");
//   });
 Route::get('/',[PanelController::class,'panel'])->name('website.panel');

//admin login


Route::get('/admin/login',[AdminPatientController::class,'login'])->name('admin.login');
Route::post('/admin/do-login',[AdminPatientController::class,'doLogin'])->name('admin.doLogin');
Route::get('/admin/logout',[AdminPatientController::class,'logout'])->name('admin.logout');
 //dashboard
 Route::get('/dashboard',[DashboardController::class,'designdashboard'])->name('admin.dashboard');



Route::group(['prefix'=>'admin','middleware'=>['auth','admin']],function(){


  Route::get('/', function () {
    // dd(auth()->user());
    return view('admin_dashboard.dashboard');
  })->name('admin');





//test
Route::get('/test',[TestController::class,'test'])->name('admin.test');
Route::get('/test_add',[TestController::class,'test_add'])->name('admin.test.add');
 Route::get('/test/view{test_id}',[TestController::class, 'view'])->name('admin.test.view');
 Route::get('/test/delete{test_id}',[TestController::class, 'delete'])->name('admin.test.delete');

Route::post('/test_store',[TestController::class,'test_store'])->name('admin.test.store');
Route::get('/test/edit/{test_id}',[TestController::class, 'test_edit'])->name('admin.test.edit');
Route::post('/test/update/{test_id}',[TestController::class, 'test_update'])->name('admin.test.update');






//category

Route::get('/category_list',[CategoryController::class,'categorylist'])->name('admin.category.list');
Route::get('/category_add',[CategoryController::class,'categoryadd'])->name('admin.category.add');
Route::post('/category_store',[CategoryController::class,'categorystore'])->name('admin.category.store');
Route::get('/category/delete/{category_id}',[CategoryController::class, 'delete_category'])->name('admin.category.delete');

  //registered user

Route::get('/patients_list',[AdminPatientController::class,'patientlist'])->name('admin.patient.registerlist');
// appoinment_user
Route::get('/appointment_userlist',[PatientController::class,'userAppointment'])->name('admin.patient.appointment');
//slot 
Route::get('/slot_list',[SlotController::class,'slotlist'] )->name('admin.slotlist');
Route::get('/slot_add',[SlotController::class,'slotadd'])->name('admin.slotadd');
Route::post('/slot_store',[SlotController::class,'slotstore'])->name('admin.slotstore');
Route::get('/slot/delete{slot_id}',[SlotController::class,'slotremove'])->name('admin.slot.remove');

//user request
Route::get('/appointment_request',[RequestController::class,'request_add'])->name('admin.appointment.request');
Route::get('/appointment_accept/{id}',[RequestController::class,'request_accept'])->name('admin.appointment.accept');
Route::get('/appointment_decline/reason/{id}',[RequestController::class,'request_decline_reason'])->name('admin.appointment.decline.reason');
Route::post('/appointment_decline/{id}',[RequestController::class,'request_decline'])->name('admin.appointment.decline');
Route::get('/appointment_cancel', [RequestController::class,'request_cancel'])->name('admin.appointment.cancel');
Route::get('/appointment_details/{id}',[AdminAppointmentController::class,'appointment_details'])->name('appointment_details');

});
//equipments details
 Route::get('/equipment_list',[EquipmentController::class,'list'])->name('equipment.list');
 Route::get('/equipment_add',[EquipmentController::class, 'addequipment'])->name('equipment.add');
 Route::post('/equipment_store',[EquipmentController::class,'store_equipment'])->name('equipment.store');
 Route::get('/equipment/delete/{equipment_id}',[EquipmentController::class,'equipment_delete'])->name('equipment.delete');


 //machine slots 
 Route::get('/machine_slot',[MachineController::class,'slot_list'])->name('machine.slot');
 Route::get('/machine_slot_add',[MachineController::class,'slot_add'])->name('machine.slot.add');
 Route::post('/machine_slot_store',[MachineController::class,'slotstore'])->name('machine.slot.store');
//payments
Route::get('/payment_details/{id}', [PaymentController::class, 'paymentlist'])->name('payment.list');
Route::post('/payment_store/{id}', [PaymentController::class, 'store_payment'])->name('store.payment');
Route::get('/paid_payment_list', [PaymentController::class,'paid_payment'])->name('paid.payment.list');
Route::get('/money_receipt/{id}',[PaymentController::class,'receipt'])->name('money.receipt');


//test report
 Route::get('/report/view{id}',[ReportController::class, 'reportview'])->name('admin.report.view');
 Route::get('/report/upload{appointment_id}',[ReportController::class, 'reportupload'])->name('admin.report.upload');
 Route::post('/report/update{appointment_id}',[ReportController::class, 'reportupdate'])->name('admin.report.update');
 



//equipment stock
Route::get('/stock_table',[EquipmentController::class, 'stock_list'])->name('admin.stock.list');
Route::get('/stock_add',[EquipmentController::class, 'stock_add'])->name('admin.stock.add');
Route::post('/stock_store',[EquipmentController::class,'stock_store'])->name('admin.stock.store');







Route::group(['prefix'=>'website'],function(){
 
//website 
//  Route::get('/',[PanelController::class,'panel'])->name('website.panel');
//test
Route::get('/test_list/{id}',[WebsiteTestController::class,'testlist'])->name('website.test.list');
Route::get('/category_list',[WebsiteTestController::class,'categorylist'])->name('website.category.list');
//registration
Route::post('/registration',[UserController::class,'registration'])->name('website.user.registration');
//login
Route::post('/login',[UserController::class,'login'])->name('website.user.login');
Route::get('/logout',[UserController::class,'logout'])->name('website.user.logout');
//appointment
Route::get('/make_appointment',[AppointmentController::class,'appointment'])->name('website.appointmentform');
Route::post('/store_appointment',[AppointmentController::class,'sureAppointment'])->name('website.appointmentstore');
Route::get('/user_appointment_cancel/{id}', [AppointmentController::class,'cancel'])->name('user.appointment.cancel');
});
//userprofile
Route::get('/user_profile',[UserController::class,'profile'])->name('website.user.profile');
Route::get('/appointment_history',[AppointmentController::class, 'historyappointment'])->name('website.appointment.history');
Route::get('/appointment/view/{appointment_id}',[AppointmentController::class, 'viewappointment'])->name('appointment.history.view');
//add to cart
Route::get('/add_to_cart/{id}',[AddtocartController::class,'addtocart'])->name('Addtocart');
Route::get('/addtocart/delete/{id}',[AddtocartController::class,'delete_add'])->name('delete.addtocart');

//profile
Route::get('/payment_history',[ProfileController::class,'checkpayment'])->name('payment.history');
// Route::get('/report_view/{report_id}',[ReportController::class,'report_check'])->name('website.check.report');



//about us
Route::get('/about_us',[PanelController::class,'details_about'])->name('website.about');