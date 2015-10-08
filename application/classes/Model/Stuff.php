<?php defined('SYSPATH') or die('No direct script access.');

class Model_Stuff extends Model
{
    protected $_tableUsers = 'stuff';

    public function add_stuff($key, $value)
    {
        DB::insert($this->_tableUsers, $key)->values($value)->execute();
    }

    public function get_stuff()
    {
        $query = DB::select()->from($this->_tableUsers);
        return $query->execute()->as_array();
    }

    public function get_stuff_info($id)
    {
        $query = DB::select()->from($this->_tableUsers)->where('id', '=', $id);
        return $query->execute()->as_array();
    }

    public function edit_stuff($id, $data)
    {
        DB::update($this->_tableUsers)
            ->set($data)
            ->where('id', '=', $id)
            ->execute();
        return $id;

    }

}