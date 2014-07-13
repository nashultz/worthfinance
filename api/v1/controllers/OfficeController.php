<?php namespace LoanPro\api\v1\controllers;

use LoanPro\api\v1\models\Office;
use View;

class OfficeController extends BaseController {

	public function getCount()
	{
		return Office::count();
	}

	public function getAll()
	{
		return Office::take(10000)->get();
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