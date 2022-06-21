<?php

use App\Http\Controllers\SubmitApplication;
use App\Mail\ApplicationSubmit;
use Illuminate\Http\Request;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('aboute');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/second', function () {
    return view('page_second');
});

Route::get('/thankyou', function () {
    $number=uniqid();
    return view('thankyou',compact('number'));
});

// Route::get('/contact/send', function (Request $request) {
//     Mail::to(config('contact.send_email_to'))->send(new ApplicationSubmit($request, "test123"));

//     return view('contact');
// });

Route::post('/thankyou',[SubmitApplication::class,'submitFM'])->name('submit.form');
