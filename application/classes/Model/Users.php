<?php defined('SYSPATH') or die('No direct script access.');

class Model_Users extends Model
{
    protected $_tableUsers = 'users';

    public function check_user($arr){
        $query = DB::select()
            ->from($this->_tableUsers)
            ->where('login','=',$arr['login'])
            ->and_where('password','=',$arr['password']);
        return $query->execute()->as_array();

    }
}