<?php namespace LoanPro\api\v1\form_models\auth;

use LoanPro\api\v1\form_models\BaseFormModel;
use Auth;

class LoginFormModel extends BaseFormModel {

	protected $rules = array(
		'username'=>'required',
		'password'=>'required|min:4'
	);

	protected $messages = array(
		'username.required'=>'Username is Required',
		'password.required'=>'Password is Required'
	);

	public function perform($input)
	{
		return Auth::attempt($input);
	}

}