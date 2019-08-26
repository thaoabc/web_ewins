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
    return view('pages.home');
});
Route::get('home', function () {
    return view('pages.home');
})->name('home');


Route::get('lienhe', function () {
    return view('pages.lienhe');
})->name('lienhe');

Route::get('tinTuc', function () {
	return view('pages.tinTuc');
})->name('tinTuc');

Route::get('traiNghiem', function () {
	return view('pages.traiNghiem');
})->name('traiNghiem');

Route::get('dichvu', function () {
	return view('pages.dichvu');
})->name('dichvu');

Route::get('gioithieu', function () {
	return view('pages.gioithieu');
})->name('gioithieu');


Route::get('talentwins', function () {
    return view('pages.talentwins');
})->name('talentwins');

Route::get('tintucchitiet', function () {
	return view('pages.tintucchitiet');
})->name('tintucchitiet');
Route::get('talentchitiet', function () {
	return view('pages.talentchitiet');
})->name('talentchitiet');

Route::group(['prefix' => 'admin'], function() {
	Route::get('/','HomeController@index');

	Route::prefix('new')->group(function () {
		Route::get('list','NewController@list')->name('new.list');
		Route::get('add','NewController@add')->name('new.add');
		Route::post('add','NewController@store')->name('new.add');
		Route::get('edit/{id}','NewController@edit')->name('new.edit');
		Route::post('edit/{id}','NewController@update')->name('new.edit');
		Route::get('delete/{id}','NewController@delete')->name('new.delete');
	});

	Route::prefix('cate_new')->group(function () {
		Route::get('list','CateNewController@list')->name('cate_new.list');
		Route::post('add','CateNewController@store')->name('cate_new.add');
		Route::post('edit','CateNewController@edit')->name('cate_new.edit');
		Route::post('update','CateNewController@update')->name('cate_new.edit');
		Route::get('delete/{id}','CateNewController@delete')->name('cate_new.delete');
	});

	Route::prefix('banner')->group(function () {
		Route::get('list','BannerController@list')->name('banner.list');
		Route::get('add','BannerController@add')->name('banner.add');
		Route::post('add','BannerController@store')->name('banner.add');
		Route::get('edit/{id}','BannerController@edit')->name('banner.edit');
		Route::post('edit/{id}','BannerController@update')->name('banner.edit');
		Route::get('delete/{id}','BannerController@delete')->name('banner.delete');
	});
});



