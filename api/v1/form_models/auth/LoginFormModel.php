<?php namespace LoanPro\api\v1\form_models\auth;

use LoanPro\api\v1\form_models\BaseFormModel;

class LoginFormModel extends BaseFormModel {

	protected $rules = array(
		'username'=>'required',
		'password'=>'required|min:5'
	);

	protected $messages = array(
		'username.required'=>'Username is Required',
		'password.required'=>'Password is Required'
	);

}