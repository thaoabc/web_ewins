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

Route::get('/','frontend\HomeController@home')->name('home');
Route::get('home','frontend\HomeController@home')->name('home');

Route::get('lienhe','frontend\ContactController@list')->name('lienhe');

Route::post('lienhe','NewController@insert_contact')->name('contact.add');

Route::get('admin/contact/delete/{id}','NewController@delete_contact')->name('contact.delete');

Route::get('admin/contact/edit/{id}-{status}','NewController@edit_contact')->name('contact.edit');

Route::get('tinTuc','frontend\Talenwins@news')->name('tinTuc');

Route::get('traiNghiem','frontend\Talenwins@trainghiem')->name('traiNghiem');

Route::get('dichvu','frontend\Talenwins@service')->name('dichvu');

Route::get('gioithieu','frontend\Talenwins@about')->name('gioithieu');


Route::get('talentwins','frontend\Talenwins@talenwin')->name('talentwins');

Route::get('tintucchitiet','frontend\Talenwins@newchitiet')->name('tintucchitiet');
Route::get('talentchitiet','frontend\Talenwins@talenchitiet')->name('talentchitiet');











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
	Route::get('list','ExamplesController@GetList');
	Route::get('edit','ExamplesController@EditList');
	Route::get('del/{id}','ExamplesController@DelUser');





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
		Route::post('update','CateNewController@update')->name('cate_new.update');
		Route::get('delete/{id}','CateNewController@delete')->name('cate_new.delete');
	});

	Route::prefix('banner')->group(function () {
		Route::get('list','BannerController@list')->name('banner.list');
		Route::get('add','BannerController@add')->name('banner.add');
		Route::post('add','BannerController@insert')->name('banner.insert');
		Route::get('edit/{id}','BannerController@edit')->name('banner.edit');
		Route::post('update/{id}','BannerController@update')->name('banner.update');
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



