<?php namespace LoanPro\api\v1\controllers;

use Controller;

class BaseController extends Controller {

	public function __construct()
	{
		
	}

	public function missingMethod($parameters = array())
	{
	    return Redirect::to('/');
	}

}