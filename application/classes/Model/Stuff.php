<?php defined('SYSPATH') or die('No direct script access.');

class Model_Stuff extends Model
{
    protected $_tableUsers = 'stuff';

    public function add_stuff($key,$value){
        $query = DB::insert('stuff', $key)->values($value)->execute();
    }
    public function get_stuff(){
        $query = DB::select()->from($this->_tableUsers);
        return $query->execute()->as_array();
    }
}