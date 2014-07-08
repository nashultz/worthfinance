<?php namespace LoanPro\api\v1\controllers;

use LoanPro\api\v1\form_models\auth\LoginFormModel;
use Response;
use Input;
use Auth;

class AuthController extends BaseController {

	protected $form;

	public function __construct()
	{
		parent::__construct();
	}

	public function postLogin()
	{
		$this->form = new LoginFormModel();

		if (!$this->form->validate(Input::only('username','password')))
		{
			return Response::json([ 'flash' => $this->form->getValidationError() ], self::HTTP_PRECONDITION_FAILED);
		}
		else if (!$this->form->perform(Input::only('username', 'password'	)))
		{
			return Response::json( [ 'flash' => 'Invalid Login' ], self::HTTP_UNAUTHORIZED);
		}
		else
		{
			return Response::json(Auth::User(), 200);
		}
	}

	public function getLogout()
	{
		if (Auth::guest())
		{
			return Response::json([ 'flash' => 'Not Logged In' ], 400);
		}

		Auth::logout();
		return Response::json( [ 'flash' => 'Logged Out Successfully' ], 200);
	}

}