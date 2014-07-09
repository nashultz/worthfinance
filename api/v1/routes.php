<?php

	Route::controller('auth', 'LoanPro\api\v1\controllers\AuthController');
  Route::controller('admin', 'LoanPro\api\v1\controllers\AdminController');

  Route::get('/', function() {
    return Redirect::to('auth/login');
  });

  Route::get('dashboard', array('before' => 'auth', function()
{
    // Only authenticated users may enter...
    return Redirect::to('admin/dashboard');
}));