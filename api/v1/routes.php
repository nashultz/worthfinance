<?php

	Route::controller('auth', 'LoanPro\api\v1\controllers\AuthController');

	Route::get('{any}', function() {
		return View::make('site_default');
	})->where('any','.*');