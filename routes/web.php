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
    return view('mater');
})->name('trangchu');

Route::prefix('ds_linhvuc')->group(function(){
	Route::name('ds_linhvuc.')->group(function(){
		Route::get( '/','LinhvucController@index')->name('danh-sach');

		Route::get('/them-moi-linh-vuc','LinhVucController@create')->name('ds_linhvuc.them-moi-linh-vuc');
		
		Route::post('/them-moi-linh-vuc','LinhVucController@store')->name('ds_linhvuc.xl-them-moi-linh-vuc');

		Route::post('/chinhsua-linhvuc/{id}','LinhVucController@update')->name('ds_linhvuc.xac-nhan-xu-li-sua-linh-vuc');

		Route::get('/chinhsua-linhvuc/{id}', 'LinhVucController@edit')->name('ds_linhvuc.xulisua'); 
		Route::delete('/xoa/{id}', 'LinhVucController@destroy')->name('xoa'); 
        Route::get( '/ds_linhvuc_da_xoa','LinhvucController@restore')->name('ds_linhvuc.thung_rac');
		

	});
	
});

Route::prefix('ds_cauhoi')->group(function(){
	Route::name('ds_cauhoi.')->group(function(){
		Route::get( '/','CauHoiController@index')->name('danh-sach');

		Route::get('/them-moi-cau-hoi','CauHoiController@create')->name('ds_cauhoi.them-moi-cau-hoi');
		
		Route::post('/them-moi-cau-hoi','CauHoiController@store')->name('ds_cauhoi.xl-them-moi-cau-hoi');

		Route::get('/chinhsua-cauhoi/{id}','CauHoiController@edit')->name('ds_cauhoi.cs-them-moi-cau-hoi');

		Route::post('/chinhsua-cauhoi/{id}', 'CauHoiController@update')->name('xulisua'); 

	});
	
});


