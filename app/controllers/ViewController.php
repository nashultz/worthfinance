<?php

class ViewController extends BaseController {

	public function getLogin()
	{
		if (!Auth::guest()) Auth::logout();
		return View::make('site_login');
	}

	public function getDashboard()
	{
		return View::make('site_dashboard');
	}

}
