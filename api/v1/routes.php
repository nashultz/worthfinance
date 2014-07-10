<?php

  // Redirect Routes
  Route::get('/', function() {
  	return Redirect::route('site.login');
  });

  Route::get('login', function() {
  	return Redirect::route('site.login');
  });

  // View Routes
  Route::get('auth/login', array('as'=>'site.login', 'uses'=>'ViewController@getLogin'));

  // AUTH Secured Routes
  Route::group(array('before'=>'auth'), function() {

  	// Dashboard Route
  	Route::get('dashboard', array('as'=>'site.dashboard', 'uses'=>'ViewController@getDashboard'));

  }); 

  // RESTful Controller Routes
  Route::controller('auth', 'LoanPro\api\v1\controllers\AuthController');