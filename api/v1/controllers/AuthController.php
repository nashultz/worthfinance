<?php namespace LoanPro\api\v1\controllers;

use LoanPro\api\v1\form_models\auth\LoginFormModel;
use Response;
use Input;
use Auth;
use View;

class AuthController extends BaseController {

	protected $form;

	public function __construct()
	{
		parent::__construct();
	}

	public function getLogin()
	{
		return View::make('site_login');
	}

	public function postLogin()
	{
		$this->form = new LoginFormModel();

		if (!$this->form->validate(Input::only('username','password')))
		{
			return Response::json([ 'flash' => $this->form->getValidationError() ], self::HTTP_PRECONDITION_FAILED);
		}
		else if (!Auth::attempt(Input::only('username', 'password')))
		{
			return Response::json( [ 'flash' => 'Invalid Login' ], self::HTTP_UNAUTHORIZED);
		}
		else
		{
			return Response::json( [ 'flash' => 'Login Successful', 'user' => Auth::User() ], self::HTTP_OK);
		}
	}

	public function getLogout()
	{
		if (Auth::guest())
		{
			return Response::json([ 'flash' => 'Not Logged In' ], self::HTTP_UNAUTHORIZED);
		}

		Auth::logout();
		return Response::json( [ 'flash' => 'Logged Out Successfully' ], self::HTTP_OK);
	}

}