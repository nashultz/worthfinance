<?php namespace LoanPro\api\v1\models;

class Office extends BaseModel {

	protected $table = 'offices';

	protected $guarded = array();

	public function __construct()
	{
		parent::__construct();
	}

}