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

Route::get('/', [
    'as' => 'index',
    'uses' => 'IndexController@index'
]);
Route::get('/nosotros', [
    'as' => 'about',
    'uses' => 'IndexController@about'
]);

Route::get('/noticias', [
    'as' => 'notice',
    'uses' => 'Admin\\PostController@notice'
]);

Route::get('/noticias/detalle/{id}', [
    'as' => 'noticeDetails',
    'uses' => 'Admin\\PostController@showNotice'
]);

Route::get('/actividades', [
    'as' => 'activity',
    'uses' => 'Admin\\PostController@activity'
]);

Route::get('/actividades/detalle/{id}', [
    'as' => 'activityDetails',
    'uses' => 'Admin\\PostController@showActivity'
]);

Route::get('/students', [
    'as' => 'students',
    'uses' => 'IndexController@student'
]);

Route::get('/create', [
    'as' => 'student-create',
    'uses' => 'IndexController@create'
]);

Route::get('/primera-entrevista', [
    'as' => 'about-prime',
    'uses' => 'IndexController@primeraEntre'
]);
Route::get('/emprendimiento', [
    'as' => 'about-empre',
    'uses' => 'IndexController@empre'
]);
Route::get('/expo-feria', [
    'as' => 'about-expo',
    'uses' => 'IndexController@expo'
]);

Route::get('confirmation/{email}/', [
    'as' => 'confirmation',
    'uses' => 'Auth\RegisterController@getConfirmation'
]);
Route::get('/activar', [
    'as' => 'activar',
    'uses' => 'HomeController@getActivar'
]);


Auth::routes();



Route::group(['middleware' => 'auth'], function() {

    Route::get('/profile', [
        'as' => 'profile',
        'uses' => 'ProfileController@show'
    ]);
    Route::PATCH('/profile/update', [
        'as' => 'profile-update',
        'uses' => 'ProfileController@update'
    ]);
    Route::get('/profile/edit', [
        'as' => 'profile-edit',
        'uses' => 'ProfileController@profileEdit'
    ]);

    Route::get('/profile/photo', [
        'as' => 'profile-photo',
        'uses' => 'ProfileController@profilePhoto'
    ]);

    Route::POST('/profile/photo/update', [
        'as' => 'profile-photo-update',
        'uses' => 'ProfileController@profilePhotoUpdate'
    ]);


    Route::get('/personal-information', [
        'as' => 'personal-information',
        'uses' => 'Admin\\PersonalInformationController@personalInformation'
    ]);

    Route::POST('/personal-information', [
        'as' => 'personal-information-update',
        'uses' => 'Admin\\PersonalInformationController@personalInformationUpdate'
    ]);

    Route::get('/academic-data', [
        'as' => 'academic-data',
        'uses' => 'Admin\\AcademicDataController@academicData'
    ]);

    Route::POST('/academic-data', [
        'as' => 'academic-data-update',
        'uses' => 'Admin\\AcademicDataController@academicDataUpdate'
    ]);

    Route::get('/company-data/Pasantias', [
        'as' => 'company-data-pasantia',
        'uses' => 'Admin\\CompanyDataController@companyDataPasantia'
    ]);

    Route::get('/company-data/Servicio-Comunitario', [
        'as' => 'company-data-servicio-comunitario',
        'uses' => 'Admin\\CompanyDataController@companyDataServicioComunitario'
    ]);

    Route::get('/company-data/Proyecto-Grado-I', [
        'as' => 'company-data-proyecto-grado-I',
        'uses' => 'Admin\\CompanyDataController@companyDataProyectoGradoI'
    ]);

    Route::get('/company-data/Proyecto-Grado-II', [
        'as' => 'company-data-proyecto-grado-II',
        'uses' => 'Admin\\CompanyDataController@companyDataProyectoGradoII'
    ]);

    Route::POST('/company-data', [
        'as' => 'company-data-update',
        'uses' => 'Admin\\CompanyDataController@companyDataUpdate'
    ]);


    Route::group(['middleware' => 'verified'], function () {

    });

    Route::get('/home', 'HomeController@index')->name('home');
    Route::resource('admin/post', 'Admin\\PostController');

    // ADMIN -------------
    Route::group(['middleware' => 'admin'], function() {

        Route::resource('admin/matters', 'Admin\\MattersController');
        Route::resource('admin/roles', 'Admin\\RolesController');
        Route::resource('admin/status', 'Admin\\StatusController');
        Route::resource('admin/professions', 'Admin\\ProfessionsController');
        Route::resource('admin/tipes', 'Admin\\TipesController');
        Route::resource('admin/personal-information', 'Admin\\PersonalInformationController');
        Route::resource('admin/period', 'Admin\\PeriodController');
        Route::resource('admin/academic-data', 'Admin\\AcademicDataController');
        Route::resource('admin/matter-academic-data', 'Admin\\MatterAcademicDataController');
        Route::resource('admin/state', 'Admin\\StateController');
        Route::resource('admin/city', 'Admin\\CityController');
        Route::resource('admin/company-data', 'Admin\\CompanyDataController');
        Route::resource('admin/tutor-data', 'Admin\\TutorDataController');
        Route::resource('admin/category', 'Admin\\CategoryController');
        Route::resource('admin/user', 'Admin\\UserController');

   });

});



