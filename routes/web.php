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

Route::get('index', [
    'as'=>'trang-chu',
    'uses'=>'PageController@getIndex'  //getIndex o trong file PageController
]);

Route::get('loaisanpham/{type}', [
    'as'=>'loaisanpham',
    'uses'=>'PageController@getLoaiSP' //getLoaiSP o trong file PageController
]);

Route::get('chi-tiet-san-pham/{id}', [
    'as'=>'chitietsanpham',
    'uses'=>'PageController@getChitiet' //getChitiet o trong file PageController
]);

Route::get('lien-he', [     //->go tren link
    'as'=>'lienhe',
    'uses'=>'PageController@getLienhe' //getLienhe o trong file PageController
]);
Route::get('gioi-thieu', [     //->go tren link
    'as'=>'gioithieu',
    'uses'=>'PageController@getGioithieu' //getGioithieu o trong file PageController
]);
Route::get('add-to-cart/{id}',[
    'as'=>'themgiohang',
    'uses'=>'PageController@getAddtoCart'
]);
Route::get('del-cart/{id}',[
    'as'=>'xoagiohang',
    'uses'=>'PageController@getDelItemCart'
]);