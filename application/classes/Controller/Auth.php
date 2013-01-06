<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Auth extends Controller_Template
{
	public $template = 'templates/public';

	public function action_index()
	{
		if ($this->request->post('username')) {
			$username = $this->request->post('username');
			$password = $this->request->post('password');
			//echo Auth::instance()->hash('demo');
			$is_logged_in = Auth::instance()->login($username, $password, true);

			if ($is_logged_in) {
				Notify::success('Sisse logitud');
				$this->redirect('Welcome');
			} else {
				Notify::error('Sisselogimine ebaõnnestus');
			}
		} else {

		}
	}

	public function action_logout()
	{
		Auth::instance()->logout();
		$this->redirect('auth');
	}

} // End Welcome
