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
			return Response::json([ 'message' => $this->form->getValidationError() ], 400);
		}
		else if (!$this->form->perform(Input::only('username', 'password'	)))
		{
			return Response::json( [ 'message' => 'Invalid Login' ], 400);
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
			return Response::json([ 'message' => 'Not Logged In' ], 400);
		}

		Auth::logout();
		return Response::json( [ 'message' => 'Logged Out Successfully' ], 200);
	}

}