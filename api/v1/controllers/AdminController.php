<?php namespace LoanPro\api\v1\controllers;

use Response;
use View;
use Auth;

class AdminController extends BaseController {

  protected $form;

  public function __construct()
  {
    parent::__construct();
  }

  public function getDashboard()
  {
    return View::make('site_dashboard');
  }

  public function getUser()
  {
    return Response::json(array('user'=>Auth::User()), 200);
  }

}