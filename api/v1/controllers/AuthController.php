<?php namespace LoanPro\api\v1\controllers;

use LoanPro\api\v1\form_models\AuthFormModel;
use Redirect;

class AuthController extends BaseController {

	protected $form;

	public function __construct()
	{
		parent::__construct();

		$this->form = new AuthFormModel();
	}

	public function postLogin()
	{
		return $this->form->processLogin();
	}

	public function getLogout()
	{
		return $this->form->processLogout();
	}

}