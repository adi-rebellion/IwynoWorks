<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use App\Http\Controllers\CaptchaServiceController;
use App\Models\IwynoCompany;

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
    $companies = IwynoCompany::where('status','1')->get();
    return view('front.landing',['companies' => $companies]);
})->name('root');

Route::get('/contact', function () {
    return view('front.contact');
})->name('iwyno_contact');
Route::get('/services', 'App\Http\Controllers\IwynoController@iwyno_service')->name('iwyno_service');
Route::get('/technologies', 'App\Http\Controllers\IwynoController@iwyno_technology')->name('iwyno_technology');
Route::get('/technology/{tech_name}', 'App\Http\Controllers\IwynoController@iwyno_tech_page')->name('iwyno_tech_page');
Route::get('/company/{company}', 'App\Http\Controllers\IwynoController@iwyno_company')->name('iwyno_company');

//Route::post('/captcha-validation', [CaptchaServiceController::class, 'capthcaFormValidate']);
Route::get('/reload-captcha', 'App\Http\Controllers\CaptchaServiceController@reloadCaptcha');