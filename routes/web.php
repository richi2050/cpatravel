<?php


Auth::routes();

Route::get('/', 'HomeController@index')->name('beginin');

Route::post('/home', 'AuthController@store')->name('auth.store');

Route::get('/func', 'PruebaController@func');

Route::group(['middleware' => ['auth.session']], function () {
    Route::get('/home', 'AuthController@index')->name('auth.index');
    Route::get('/prueba', 'PruebaController@prueba')->name('prueba');
    Route::get('auth/logout','AuthController@logout')->name('logout_exter');
    Route::get('list/business','BusinessController@lista')->name('list');
    Route::get('generate/business','BusinessController@generateBusiness')->name('busine_select');

    /* Inicio de rutas  de menus*/

        Route::get('business/process','RoutingController@businessProcess')->name('business_process');
        Route::get('travel/authorization','RoutingController@travelAuthorization')->name('travel_autho');
        Route::get('solicitude/travel','RoutingController@solicitudTravel')->name('solicitud_travel');
        Route::get('policies','RoutingController@policies')->name('policies');
        Route::get('registration/conciliation','RoutingController@registrationConciliation')->name('registration_conciliation');

    /* Fin de rutas  de menus*/
    Route::resource('project','ProjectWebController');
    Route::get('list/project','ProjectExtendController@list_project')->name('list_project');

    Route::get('autocomplete/project','ProjectExtendController@searchProject')->name('autocomplete_project');
    Route::get('autocomplete/subproject','SubProjectExtendController@searchSubProject')->name('autocomplete_subproject');
    Route::get('autocomplete/travel','TravelExtendController@searchTravel')->name('autocomplete_travel');

    Route::resource('subproject','SubProjectWebController');
    Route::resource('travel','TravelWebController');
    Route::resource('label','LabelWebController');

    Route::get('prueba','PruebaController@prueba');
    Route::get('prueba/search','PruebaController@search')->name('search');
    Route::get('autocomplete','PruebaController@autocomplete')->name('autocomplete');
    Route::get('search','ProjectExtendController@search')->name('search_project');

    /* Inicio de solicitud de viaje */
    Route::get('solicitude/lodging/{iden}','SolicitudeController@lodging')->name('label_hospedaje');
    Route::get('solicitude/foot/{iden}','SolicitudeController@foot')->name('label_foot');
    Route::get('solicitude/taxi/{iden}','SolicitudeController@taxi')->name('label_taxi');
    Route::get('solicitude/mileage/{iden}','SolicitudeController@mileage')->name('label_mileage');
    Route::get('solicitude/rent/car/{iden}','SolicitudeController@rentCar')->name('label_rent_car');
    Route::get('solicitude/ground/transportation/{iden}','SolicitudeController@groundTransportation')->name('label_transporte_terrestre');
    Route::get('solicitude/conference/{iden}','SolicitudeController@conference')->name('label_conference');
    Route::get('solicitude/airplane/{iden}','SolicitudeController@airplane')->name('label_airplane');
    /* fin de solicitud de viaje*/

    Route::get('detail/label','LabelExtendController@detail')->name('label_detail');

    Route::get('request','RequestController@create')->name('request_create');
    Route::get('lodging/create','LodgingTagController@create')->name('lodging_create');
});

Route::get('prueba/view','PruebaController@pruebaView');
