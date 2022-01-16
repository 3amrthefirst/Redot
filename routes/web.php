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
// index route
Route::get('/', function () {
    return view('website.index');
})->name('website.index');
//contact us route
Route::resource('/contact-us','App\http\Controllers\ContactController');
//servuces store  route
Route::resource('/services','App\http\Controllers\servicesController');
//servuces show  route
Route::resource('adminOrders','App\http\Controllers\servicesController');
//contact us show  route
Route::get('adminMsgs','App\http\Controllers\ContactController@show2');
// about us route
Route::get('/about-us', function () {
    return view('website.about-us');
})->name('website.about-us');
//visual identity route
Route::get('/visual-identity-services', function () {
    return view('website.visual-identity-services');
})->name('website.visual-identity-services');
// graphic designer route
Route::get('/graphic-designer-services', function () {
    return view('website.graphic-designer-services');
})->name('website.graphic-designer-services');
//marketing route
Route::get('/marketing-services', function () {
    return view('website.marketing-services');
})->name('website.marketing-services');
//sponsored ads services
Route::get('/sponsored-ads-services', function () {
    return view('website.sponsored-ads-services');
})->name('website.sponsored-ads-services');
//filming and editing services 
Route::get('/filming-editing-services', function () {
    return view('website.filming-editing-services');
})->name('website.filming-editing-services');
//application development services
Route::get('/application-development-services', function () {
    return view('website.application-development-services');
})->name('website.application-development-services');
//web services route 
Route::get('/web-services', function () {
    return view('website.web-services');
})->name('website.web-services');
//moderiting services route 
Route::get('/moderiting-services', function () {
    return view('website.moderiting-services');
})->name('website.moderiting-services');
//photography services route 
Route::get('/photography-services', function () {
    return view('website.photography-services');
})->name('website.photography-services');




