<?php namespace LoanPro\api\v1\models;

class Account extends BaseModel {

	protected $table = 'accounts';

	protected $guarded = array();

	public function __construct()
	{
		parent::__construct();
	}

}