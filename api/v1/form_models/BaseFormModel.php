<?php namespace LoaNPro\api\v1\form_models;

use Validator;

class BaseFormModel {

	protected $validator;

	public function validate()
	{
		$this->validator = Validator::make($this->input, $this->rules, $this->messages);
		return $this->validator->passes();
	}

	public function getError()
	{
		$messages = $this->validator->messages();
		return $messages->first();
	}

}