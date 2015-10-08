<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin extends Controller {


	public function action_shipping()
	{
		//if(Session::instance()->get('user')){
			$this->response->body(View::factory('/admin/shipping'));
	//	} else {
	//		HTTP::redirect(URL::base_url());
	//	}

		// if(Session::instance()->get('user')){
			$this->response->body(View::factory('/admin/shipping'));
		// } else {
			// HTTP::redirect(URL::base_url());
		// }


	}
	public function action_broker()
	{
		// if(Session::instance()->get('user')){
			$this->response->body(View::factory('/admin/broker'));
		// } else {
			// HTTP::redirect(URL::base_url());
		// }
	}
	public function action_stuff()
	{
		// if(Session::instance()->get('user')){
		$data['info'] = Model::factory('Stuff')->get_stuff();
			 $this->response->body(View::factory('/admin/stuff',$data));
		// } else {
			// HTTP::redirect(URL::base_url());
		// }
	}
	public function action_trailer()
	{
		// if(Session::instance()->get('user')){
			$this->response->body(View::factory('/admin/trailer'));
		// } else {
			// HTTP::redirect(URL::base_url());
		// }
	}
	public function action_truck()
	{
		// if(Session::instance()->get('user')){
			 $this->response->body(View::factory('/admin/truck'));
		// } else {
			// HTTP::redirect(URL::base_url());
		// }
	}
	public function action_maintenance()
	{
		// if(Session::instance()->get('user')){
		$this->response->body(View::factory('/admin/maintenance'));
		// } else {
		// HTTP::redirect(URL::base_url());
		// }
	}
	public function action_logout()
	{
		Session::instance()->delete('user');
		HTTP::redirect(URL::base_url());
	}



} // End Welcome
