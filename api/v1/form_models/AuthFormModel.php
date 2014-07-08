<?php namespace LoanPro\api\v1\form_models;

use Input;
use Response;
use Auth;

class AuthFormModel extends BaseFormModel {

	protected $input, $rules, $messages;

	public function processLogin()
	{
		$this->input = Input::only('username','password');

		$this->rules = array(
			'username'=>'required',
			'password'=>'required'
		);

		$this->messages = array(
			'username.required'=>'Username is Required',
			'password.required'=>'Password is Required'
		);

		if (!$this->validate()) return Response::json(array('message'=>$this->getError()), 400);
		if (!Auth::attempt($this->input)) return Response::json(array('message'=>'Invalid Login'), 400);
		return Response::json(Auth::User(), 200);
	}

	public function processLogout()
	{
		Auth::logout();
		return Redirect::json(array(), 200);
	}

	public function processRegister()
	{

	}

}