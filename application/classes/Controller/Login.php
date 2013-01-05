<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Login extends Controller_Template {

	public function action_index()
	{
		$username = $this->request->post('username');
		$password = $this->request->post('password');
		$is_logged_in =	Auth::instance()->login($username, $password);
		var_dump($is_logged_in);
		//echo Auth::instance()->hash('demo');
	}

} // End Welcome
