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
    $user = Auth::user()->toJson();
    return View::make('site_dashboard',compact('user'));
  }

  public function getUser()
  {
    return Auth::user();
  }

}