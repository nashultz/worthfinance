<?php

  // RESTful Routes
	Route::controller('auth', 'LoanPro\api\v1\controllers\AuthController');

  // View Routes
  Route::get('login', function() { return Redirect::route('site.login'); });
  Route::get('auth/login', array('as'=>'site.login', 'do'=>function() { return View::make('site_login'); }));

  // AUTH Secured Routes
  Route::group(array('before'=>'auth'), function() {
    Route::get('/', array('as'=>'site.dashboard', 'do'=>function() { return View::make('site_default'); }));
  	// Dashboard Route
  	Route::group(array('prefix' => 'admin'), function()
    {
      // Offices Route
      Route::controller('dashboard', 'LoanPro\api\v1\controllers\DashboardController');
      Route::controller('offices', 'LoanPro\api\v1\controllers\OfficeController');
    });
  }); 
