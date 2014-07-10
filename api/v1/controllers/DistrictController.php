<?php namespace LoanPro\api\v1\controllers;

class DistrictController extends BaseController {

	public function getDistricts()
	{

	}

	public function getDistrict($office)
	{

	}

	public function postDistrict($office)
	{
		
	}

	public function offices()
	{
		return $this->hasMany('Office');
	}

}