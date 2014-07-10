<?php

  // RESTful Routes
	Route::controller('auth', 'LoanPro\api\v1\controllers\AuthController');
  Route::controller('admin', 'LoanPro\api\v1\controllers\AdminController');

  // View Routes
  Route::get('/', function() { return Redirect::route('site.login'); });
  Route::get('login', function() { return Redirect::route('site.login'); });
  Route::get('auth/login', array('as'=>'site.login', 'do'=>function() { return View::make9('site_login'); }));

  // AUTH Secured Routes
  Route::group(array('before'=>'auth'), function() {

  	// Dashboard Route
  	Route::get('dashboard', function() { return Redirect::to('admin/dashboard'); });
    Route::controller('offices', 'LoanPro\api\v1\controllers\OfficeController');

  }); 
