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

use App\Http\Controllers\frontend\FrontEndController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\StatusController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\SubscriberController;
use App\Http\Controllers\NotificationController;

// Route::get('/', function () {
//     return view('welcome');
// });



Route::get('/',[FrontEndController::class,'getHomePage']);
Route::post('storenewsletteremail',[FrontEndController::class,'storeSubscriber']);

Route::get('service',[FrontEndController::class,'getServicesPage'])->name('servicehome');
Route::get('showservices/{id}/showservices',[FrontEndController::class,'showServices']);
Route::get('showdepartment/{id}',[FrontEndController::class,'showdepartment']);

Route::get('contacts',[FrontEndController::class,'getContactPage']);
Route::post('contacts',[FrontEndController::class,'storeContacts']);

Route::get('login',[FrontEndController::class,'getLogin']);
Route::post('login',[FrontEndController::class,'login'])->name('login');

Route::get('send-mail', function () {

    $details = [
        'title' => 'Mail from KelvinTheFibre',
        'body' => 'This is for testing email using smtp and kelzbiggie@gmail.com'
    ];

    Mail::to('kevmayeye97@gmail.com')->send(new \App\Mail\MyTestMail($details));
    //\Mail::to('kevmayeye97@gmail.com')->send(new \App\Mail\MyTestMail($details));

    dd("Email is Sent Mr Kelvin.");

});

Route::get('send',[NotificationController::class,'sendNotification']);



//cant access this links without login
Route::middleware("auth")->group(function(){
Route::get('services',[ServiceController::class,'index']);
Route::get('servicesshow/{id}/show',[ServiceController::class,'show'])->name("service.show");
Route::get('servicescreate',[ServiceController::class,'create']);
Route::post('services',[ServiceController::class,'store'])->name("services.store");
Route::get('services/{id}/edit',[ServiceController::class,'edit']);
Route::put('services/update/{id}',[ServiceController::class,'update'])->name("services.update");
Route::get('services/{id}/delete',[ServiceController::class,'destroy']);

Route::get('departments',[DepartmentController::class,'index']);
Route::post('departments',[DepartmentController::class,'store']);
Route::get('departments/create',[DepartmentController::class,'create']);
Route::get('departments/{id}/edit',[DepartmentController::class,'edit']);
Route::put('departments/update/{id}',[DepartmentController::class,'update'])->name("departments.update");//named route
Route::get('departments/{id}',[DepartmentController::class,'show']);

Route::get('users',[UserController::class,'index']);
Route::get('users/create',[UserController::class,'create']);
Route::post('users',[UserController::class,'store']);
Route::get('users/{id}/edit',[UserController::class,'edit']);
Route::put('users/update/{id}',[UserController::class,'update'])->name("users.update");
Route::get('users/{id}',[UserController::class,'show']);

Route::get('statuses',[StatusController::class,'index']);
Route::get('statuses/create',[StatusController::class,'create']);
Route::post('statuses',[StatusController::class,'store']);
Route::get('statuses/{id}/edit',[StatusController::class,'edit']);
Route::put('statuses/update/{id}',[StatusController::class,'update'])->name("statuses.update");
Route::get('statuses/{id}',[StatusController::class,'show']);

Route::get('cont',[ContactController::class,'index']);
Route::get('delete/{id}',[ContactController::class,'deletecontact']);

Route::get('subscribers',[SubscriberController::class,'index']);
Route::get('subdelete/{id}',[SubscriberController::class,'deletecontact']);


Route::post('logout',[FrontEndController::class,'logout'])->name('logout');
});
