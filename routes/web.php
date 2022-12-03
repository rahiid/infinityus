<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
    return view('index');
});

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});


Route::get('/dashboard', function () {
    return view('dashboard');
});
Route::get('/dashboard', 'UserController@index')->middleware('verified');


Route::get('/profile', function () {
    return view('profile');
});
Route::get('/profile', 'ProfileController@index')->middleware('verified');
Route::post('change_name','ProfileController@update1');
Route::post('change_email','ProfileController@update2');
Route::post('change_number','ProfileController@update3');


Route::get('/exchange', function () {
    return view('exchange');
});
Route::get('/exchange', 'ExchangeController@index')->middleware('verified');
Route::post('balancetransfer','ExchangeController@store');

Route::get('/balancetransfer', function () {
    return view('balancetransfer');
});
Route::get('/balancetransfer', 'BalancetransferController@index')->middleware('verified');
Route::post('balancetransfer','BalancetransferController@store');

Route::get('/transferhistory', 'TransferhistoryController@index')->middleware('verified');

Route::get('/cominginjanuary', function () {
    return view('cominginjanuary');
});

Route::get('/deposit', function () {
    return view('deposit');
});
Route::get('/deposit', 'DepositController@index')->middleware('verified');
Route::post('deposit','DepositController@store');

Route::get('/deposithistory', function () {
    return view('deposithistory');
});
Route::get('/deposithistory', 'DeposithistoryController@index')->middleware('verified');


Route::get('/investment', function () {
    return view('investment');
});
Route::get('/investment', 'InvestController@index')->middleware('verified');
Route::post('invest','InvestController@store');

Route::get('/investmenthistory', function () {
    return view('investmenthistory');
});
Route::get('/investmenthistory', 'InvestmenthistoryController@index')->middleware('verified');

Route::get('/withdraw', function () {
    return view('withdraw');
});
Route::get('/withdraw', 'WithdrawController@index')->middleware('verified');
Route::post('withdraw','WithdrawController@store');


Route::get('/withdrawhistory', function () {
    return view('withdrawhistory');
});
Route::get('/withdrawhistory', 'WithdrawhistoryController@index')->middleware('verified');



Route::get('/referrer', function () {
    return view('referrer');
});
Route::get('/referrer', 'ReferrerController@index')->middleware('verified');



Route::get('/referrerhistory', function () {
    return view('referrerhistory');
});
Route::get('/referrerhistory', 'ReferrerhistoryController@index')->middleware('verified');


Route::get('/support', function () {
    return view('support');
})->middleware('verified');

Route::post('contractus','ContractusController@store');



