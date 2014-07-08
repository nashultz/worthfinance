<?php namespace LoanPro\api\v1\controllers;

use LoanPro\api\v1\form_models\AuthFormModel;
use Response;

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

}