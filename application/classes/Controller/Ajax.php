<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Ajax extends Controller {

	public function action_request()
	{
		if(is_array($_POST)) {
			foreach($_POST as $k => $v){
                switch($k){
                    case 'login-request':
                        $info = Model::factory('Users')->check_user($v);
                        if(!empty($info)){
                            Session::instance()->set('user',$info[0]);
                            //Session::instance()->delete('user');
                            echo true;
                        }
                        break;
                    case 'add-stuff':
                        echo json_encode($v);
                        break;
                }
            };
		}
	}


}
