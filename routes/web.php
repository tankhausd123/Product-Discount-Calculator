<?php

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
Route::get('/product_discount', function () {

    return view('product_discount');
});
Route::post('/result', function(Illuminate\Http\Request $request){
    $productDescription = $request->productdescription;
    $discountAmount = $request->discountamount;
    $listPrice = $request->listprice;
    $result = $discountAmount*$listPrice*0.1;
    return view('result', compact(['productDescription', 'listPrice', 'discountAmount', 'result']));
})->name('result');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


