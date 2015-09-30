<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin extends Controller {

	public function action_index()
	{
		$this->response->body("dddd");
	}
	public function action_ajax()
	{
		return $_POST;
	}

} // End Welcome
