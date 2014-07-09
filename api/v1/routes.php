<?php

	Route::controller('auth', 'LoanPro\api\v1\controllers\AuthController');

  Route::get('/', function() {
    return Redirect::to('auth/login');
  });

  Route::get('dashboard', function() {
    return View::make('site_dashboard');
  });