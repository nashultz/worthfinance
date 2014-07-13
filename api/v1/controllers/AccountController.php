<?php namespace LoanPro\api\v1\controllers;

use LoanPro\api\v1\models\Account;
use View;
use Illuminate\Database\Eloquent\Collection;

class AccountController extends BaseController {

	public function getAll()
	{
		return Account::take(100)->get();
	}

}