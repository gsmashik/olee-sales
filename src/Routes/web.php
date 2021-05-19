<?php

use Illuminate\Support\Facades\Route;
use Olee\Sales\Http\Controllers\SalesQuotationController; 
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

Route::get('contact', function(){
    return 'Hello from the contact form package';
});
Route::group(['middleware' => ['web']], function () {
	
	    Route::resource('ss', Olee\Sales\Http\Controllers\SalesQuotationController::class);

});