<?php namespace LoanPro\api\v1\controllers;

use Controller;
use Redirect;

class BaseController extends Controller {

	const HTTP_OK = 200;
	const HTTP_BAD_REQUEST = 400;
	const HTTP_UNAUTHORIZED = 401;
	const HTTP_FORBIDDEN = 403;
	const HTTP_NOT_FOUND = 404;
	const HTTP_PRECONDITION_FAILED = 412;

	public function __construct()
	{
		
	}

	public function missingMethod($parameters = array())
	{
		if (Auth::guest()) View::make('site_login');
		return View::make('site_dashboard');
	}

}