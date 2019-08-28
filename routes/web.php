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

Route::post('lienhe','NewController@insert_contact')->name('contact.add');

Route::get('admin/contact/delete/{id}','NewController@delete_contact')->name('contact.delete');

Route::get('admin/contact/edit/{id}-{status}','NewController@edit_contact')->name('contact.edit');

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


Route::group(['prefix' => 'admin',], function() {
			Route::get('login','LoginController@GetLogin')->middleware('CheckLogout');
			Route::post('login','LoginController@PostLogin');
	});

Route::group(['prefix' => 'admin','middleware'=>'CheckLogin'], function() {
	Route::get('/','HomeController@index');
	Route::get('logout','LoginController@GetLogout');


	//------------------examples---------------------
	Route::get('profile','ExamplesController@GetProfile');
	Route::get('register','ExamplesController@GetRegister');
	Route::post('register','ExamplesController@PostRegister');



	Route::prefix('new')->group(function () {
		Route::get('list','NewController@list')->name('new.list');
		Route::get('add','NewController@add_adviser')->name('new.add');
		Route::post('add','NewController@insert_adviser')->name('new.add');
		Route::get('edit/{id}','NewController@edit_adviser')->name('new.edit');
		Route::post('edit/{id}','NewController@update_adviser')->name('new.edit');
		Route::get('delete/{id}','NewController@delete_adviser')->name('new.delete');
	});

	Route::prefix('cate_new')->group(function () {
		Route::get('list','CateNewController@list')->name('cate_new.list');
		Route::post('add','CateNewController@store')->name('cate_new.add');
		Route::post('edit','CateNewController@edit')->name('cate_new.edit');
		Route::post('update','CateNewController@update')->name('cate_new.update');
		Route::get('delete/{id}','CateNewController@delete')->name('cate_new.delete');
	});

	Route::prefix('banner')->group(function () {
		Route::get('list','BannerController@list')->name('banner.list');
		Route::post('add','BannerController@store')->name('banner.add');
		Route::post('edit','BannerController@edit')->name('banner.edit');
		Route::post('update','BannerController@update')->name('banner.update');
		Route::get('delete/{id}','BannerController@delete')->name('banner.delete');
	});

	Route::prefix('contact')->group(function () {
		Route::get('list','NewController@list_contact')->name('contact.list');
	});

	Route::prefix('adviser')->group(function () {
		Route::get('list','NewController@list_adviser')->name('adviser.list');
		Route::get('add','NewController@add_adviser')->name('adviser.add');
		Route::post('add','NewController@insert_adviser')->name('adviser.add');
		Route::get('edit/{id}','NewController@edit_adviser')->name('adviser.edit');
		Route::post('edit/{id}','NewController@update_adviser')->name('adviser.edit');
		Route::get('delete/{id}','NewController@delete_adviser')->name('adviser.delete');
	});

	Route::prefix('talent_wins')->group(function () {
		Route::get('list','TalentWinsController@list')->name('talent_wins.list');
		Route::get('add','TalentWinsController@add')->name('talent_wins.add');
		Route::post('add','TalentWinsController@store')->name('talent_wins.add');
		Route::get('edit/{id}','TalentWinsController@edit')->name('talent_wins.edit');
		Route::post('edit/{id}','TalentWinsController@update')->name('talent_wins.edit');
		Route::get('delete/{id}','TalentWinsController@delete')->name('talent_wins.delete');
	});

	Route::prefix('support')->group(function () {
		Route::get('list','SupportController@list')->name('support.list');
		Route::get('add','SupportController@add')->name('support.add');
		Route::post('add','SupportController@store')->name('support.add');
		Route::get('edit/{id}','SupportController@edit')->name('support.edit');
		Route::post('edit/{id}','SupportController@update')->name('support.edit');
		Route::get('delete/{id}','SupportController@delete')->name('support.delete');
	});

	Route::prefix('infor_company')->group(function () {
		Route::get('list','InforCompanyController@list')->name('infor_company.list');
		Route::get('add','InforCompanyController@add')->name('infor_company.add');
		Route::post('add','InforCompanyController@store')->name('infor_company.add');
		Route::get('edit/{id}','InforCompanyController@edit')->name('infor_company.edit');
		Route::post('edit/{id}','InforCompanyController@update')->name('infor_company.edit');
		Route::get('delete/{id}','InforCompanyController@delete')->name('infor_company.delete');
	});

	Route::prefix('e-learning')->group(function () {
		Route::get('list','ELearningController@list')->name('e-learning.list');
		Route::get('add','ELearningController@add')->name('e-learning.add');
		Route::post('add','ELearningController@store')->name('e-learning.add');
		Route::get('edit/{id}','ELearningController@edit')->name('e-learning.edit');
		Route::post('edit/{id}','ELearningController@update')->name('e-learning.edit');
		Route::get('delete/{id}','ELearningController@delete')->name('e-learning.delete');
	});
});



