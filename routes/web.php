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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/','Frontend\FrontendController@index')->name('index');
Route::get('objective','Frontend\FrontendController@objective')->name('objective');
Route::get('admission','Frontend\FrontendController@admission')->name('admission');
Route::get('teacher_info','Frontend\FrontendController@teacherinfo')->name('teacherinfo');
Route::get('contact','Frontend\FrontendController@contact')->name('contact');
Route::get('notice','Frontend\FrontendController@notice')->name('notice');
Route::get('latest_notice','Frontend\FrontendController@Latestnotice')->name('latest_notice');
Route::get('detail_aboutus','Frontend\FrontendController@DetailAboutus')->name('detail_aboutus');
Route::get('office_notice','Frontend\FrontendController@OfficeNotice')->name('office_notice');
Route::get('gallarey','Frontend\FrontendController@Gallarey')->name('gallarey');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

route::group(['middleware'=>'auth'],function (){

    Route::prefix ('users')->group (function () {
        //admin-dashboard
        Route::get('/view', 'Backend\UserController@view')->name('users.view');
        Route::get('/add', 'Backend\UserController@add')->name('users.add');
        Route::post('/store', 'Backend\UserController@store')->name('users.store');
        Route::get('/edit/{id}', 'Backend\UserController@edit')->name('users.edit');
        Route::post('/update/{id}', 'Backend\UserController@update')->name('users.update');
        Route::post('/delete/{id}', 'Backend\UserController@delete')->name('users.delete');
    });
    Route::prefix ('profiles')->group (function () {
        //profile
        Route::get('/view', 'Backend\ProfileController@view')->name('profiles.view');
        Route::get('/edit', 'Backend\ProfileController@edit')->name('profiles.edit');
        Route::post('/update', 'Backend\ProfileController@update')->name('profiles.update');
        Route::get('/password/view', 'Backend\ProfileController@passwordView')->name('profiles.password.view');
        Route::post('/password/update', 'Backend\ProfileController@passwordUpdate')->name('profiles.password.update');


    });
    Route::prefix ('logos')->group (function () {
        //admin-dashboard
        Route::get('/view', 'Backend\LogoController@view')->name('logos.view');
        Route::get('/add', 'Backend\LogoController@add')->name('logos.add');
        Route::post('/store', 'Backend\LogoController@store')->name('logos.store');
        Route::get('/edit/{id}', 'Backend\LogoController@edit')->name('logos.edit');
        Route::post('/update/{id}', 'Backend\LogoController@update')->name('logos.update');
        Route::post('/delete/{id}', 'Backend\LogoController@delete')->name('logos.delete');
    });
    Route::prefix ('sliders')->group (function () {
        //admin-dashboard
        Route::get('/view', 'Backend\SliderController@view')->name('sliders.view');
        Route::get('/add', 'Backend\SliderController@add')->name('sliders.add');
        Route::post('/store', 'Backend\SliderController@store')->name('sliders.store');
        Route::get('/edit/{id}', 'Backend\SliderController@edit')->name('sliders.edit');
        Route::post('/update/{id}', 'Backend\SliderController@update')->name('sliders.update');
        Route::post('/delete/{id}', 'Backend\SliderController@delete')->name('sliders.delete');
    });
    Route::prefix ('missions')->group (function () {
        Route::get('/view', 'Backend\MissionController@view')->name('missions.view');
        Route::get('/add', 'Backend\MissionController@add')->name('missions.add');
        Route::post('/store', 'Backend\MissionController@store')->name('missions.store');
        Route::get('/edit/{id}', 'Backend\MissionController@edit')->name('missions.edit');
        Route::post('/update/{id}', 'Backend\MissionController@update')->name('missions.update');
        Route::post('/delete/{id}', 'Backend\MissionController@delete')->name('missions.delete');
    });
    Route::prefix ('principals')->group (function () {
        Route::get('/view', 'Backend\PrincipalMessageController@view')->name('principals.view');
        Route::get('/add', 'Backend\PrincipalMessageController@add')->name('principals.add');
        Route::post('/store', 'Backend\PrincipalMessageController@store')->name('principals.store');
        Route::get('/edit/{id}', 'Backend\PrincipalMessageController@edit')->name('principals.edit');
        Route::post('/update/{id}', 'Backend\PrincipalMessageController@update')->name('principals.update');
        Route::post('/delete/{id}', 'Backend\PrincipalMessageController@delete')->name('principals.delete');
    });
    Route::prefix ('facilities')->group (function () {
        Route::get('/view', 'Backend\FacilityController@view')->name('facilities.view');
        Route::get('/add', 'Backend\FacilityController@add')->name('facilities.add');
        Route::post('/store', 'Backend\FacilityController@store')->name('facilities.store');
        Route::get('/edit/{id}', 'Backend\FacilityController@edit')->name('facilities.edit');
        Route::post('/update/{id}', 'Backend\FacilityController@update')->name('facilities.update');
        Route::post('/delete/{id}', 'Backend\FacilityController@delete')->name('facilities.delete');
    });
    Route::prefix ('latest_notice')->group (function () {
        //latest notice
        Route::get('/view', 'Backend\LatestNoticeController@view')->name('latest_notice.view');
        Route::get('/add', 'Backend\LatestNoticeController@add')->name('latest_notice.add');
        Route::post('/store', 'Backend\LatestNoticeController@store')->name('latest_notice.store');
        Route::get('/edit/{id}', 'Backend\LatestNoticeController@edit')->name('latest_notice.edit');
        Route::post('/update/{id}', 'Backend\LatestNoticeController@update')->name('latest_notice.update');
        Route::post('/delete/{id}', 'Backend\LatestNoticeController@delete')->name('latest_notice.delete');
    });
    Route::prefix ('admissions')->group (function () {
        //latest notice
        Route::get('/view', 'Backend\AdmissionController@view')->name('admissions.view');
        Route::get('/add', 'Backend\AdmissionController@add')->name('admissions.add');
        Route::post('/store', 'Backend\AdmissionController@store')->name('admissions.store');
        Route::get('/edit/{id}', 'Backend\AdmissionController@edit')->name('admissions.edit');
        Route::post('/update/{id}', 'Backend\AdmissionController@update')->name('admissions.update');
        Route::post('/delete/{id}', 'Backend\AdmissionController@delete')->name('admissions.delete');
    });
    Route::prefix ('about_us')->group (function () {
        //latest notice
        Route::get('/view', 'Backend\AboutusController@view')->name('about_us.view');
        Route::get('/add', 'Backend\AboutusController@add')->name('about_us.add');
        Route::post('/store', 'Backend\AboutusController@store')->name('about_us.store');
        Route::get('/edit/{id}', 'Backend\AboutusController@edit')->name('about_us.edit');
        Route::post('/update/{id}', 'Backend\AboutusController@update')->name('about_us.update');
        Route::post('/delete/{id}', 'Backend\AboutusController@delete')->name('about_us.delete');
    });
    Route::prefix ('noticeboards')->group (function () {
        //latest notice
        Route::get('/view', 'Backend\NoticeBoardController@view')->name('noticeboards.view');
        Route::get('/add', 'Backend\NoticeBoardController@add')->name('noticeboards.add');
        Route::post('/store', 'Backend\NoticeBoardController@store')->name('noticeboards.store');
        Route::get('/edit/{id}', 'Backend\NoticeBoardController@edit')->name('noticeboards.edit');
        Route::post('/update/{id}', 'Backend\NoticeBoardController@update')->name('noticeboards.update');
        Route::post('/delete/{id}', 'Backend\NoticeBoardController@delete')->name('noticeboards.delete');
    });
    Route::prefix ('office_notice')->group (function () {
        //latest notice
        Route::get('/view', 'Backend\OfficenoticeController@view')->name('office_notice.view');
        Route::get('/add', 'Backend\OfficenoticeController@add')->name('office_notice.add');
        Route::post('/store', 'Backend\OfficenoticeController@store')->name('office_notice.store');
        Route::get('/edit/{id}', 'Backend\OfficenoticeController@edit')->name('office_notice.edit');
        Route::post('/update/{id}', 'Backend\OfficenoticeController@update')->name('office_notice.update');
        Route::post('/delete/{id}', 'Backend\OfficenoticeController@delete')->name('office_notice.delete');
    });
    Route::prefix ('gallareys')->group (function () {
        Route::get('/view', 'Backend\GallareyController@view')->name('gallareys.view');
        Route::get('/add', 'Backend\GallareyController@add')->name('gallareys.add');
        Route::post('/store', 'Backend\GallareyController@store')->name('gallareys.store');
        Route::get('/edit/{id}', 'Backend\GallareyController@edit')->name('gallareys.edit');
        Route::post('/update/{id}', 'Backend\GallareyController@update')->name('gallareys.update');
        Route::post('/delete/{id}', 'Backend\GallareyController@delete')->name('gallareys.delete');
    });
});

