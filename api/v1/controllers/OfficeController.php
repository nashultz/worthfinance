<?php namespace LoanPro\api\v1\controllers;

class OfficeController extends BaseController {

	public function getOffices()
	{

	}

	public function getOffice($office)
	{

	}

	public function postOffice($office)
	{
		
	}

	public function employees()
	{
		return $this->hasMany('User');
	}

	public function supervisor()
	{
		// Unknown Yet
	}

}