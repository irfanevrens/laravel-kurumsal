<?php
// FrontendController
get('/', 'FrontendController@index');
get('hakkimizda', 'FrontendController@about');
get('ekibimiz', 'FrontendController@team');
get('sertifikalar-belgeler', 'FrontendController@credential');
get('referanslarimiz', 'FrontendController@references');
get('galeri', 'FrontendController@gallery');
get('kariyer', 'FrontendController@kariyer');
post('kariyer', 'FrontendController@kariyerPost');
get('iletisim', 'FrontendController@contact');
post('iletisim', 'FrontendController@contactPost');
get('haberler', 'BlogController@index');
get('haberler/{slug}', 'BlogController@showPost');

// Registration routes...
get('register', 'Auth\AuthController@getRegister');
post('register', 'Auth\AuthController@postRegister');
// Authentication routes...
get('login', 'Auth\AuthController@getLogin');
post('login', 'Auth\AuthController@postLogin');
get('logout', 'Auth\AuthController@getLogout');

// Authenticated
Route::group(['middleware' => 'auth','admin'], function () {
    get('admin', 'AdminController@index');
    Route::resource('admin/galeri','GaleriController');
    Route::resource('admin/galeri/upload','PhotoController');
    Route::resource('admin/news','NewsController');
    
    Route::resource('admin/contact','ContactController');
    Route::resource('admin/logo', 'LogoController');
    Route::resource('admin/slider', 'SliderController');
    Route::resource('admin/brand', 'BrandController');
    Route::resource('admin/credential', 'CredentialController');
    Route::resource('admin/references','ReferenceController');
    Route::resource('admin/about','AboutController');
    Route::resource('admin/modal','ModalController');
    Route::resource('admin/team','TeamController');

    // Admin Modules
    Route::resource('admin/social','SocialController');

});



