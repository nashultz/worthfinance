<?php namespace LoanPro\api\v1\controllers;

use Response;
use View;
use Auth;

class DashboardController extends BaseController {

  protected $form;

  public function __construct()
  {
    parent::__construct();
  }

  public function getIndex()
  {
    return View::make('site_default');
  }

  public function getUser()
  {
    return Auth::User();
  }

}