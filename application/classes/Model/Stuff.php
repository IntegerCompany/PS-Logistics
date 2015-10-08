<?php defined('SYSPATH') or die('No direct script access.');

class Model_Stuff extends Model
{
    protected $_tableStuff = 'stuff';

    public function add_stuff($key, $value)
    {
        DB::insert($this->_tableStuff, $key)->values($value)->execute();
    }

    public function get_stuff()
    {
        $query = DB::query(Database::SELECT, 'SELECT st.*, pos.name as name_position FROM stuff as st, position as pos WHERE st.position = pos.id');
        return $query->execute()->as_array();
    }

    public function get_stuff_info($id)
    {
        $query = DB::query(Database::SELECT, 'SELECT st.*, pos.name as name_position FROM stuff as st, position as pos WHERE st.id = :id AND st.position = pos.id');
        $query->param(':id', $id);
        return $query->execute()->as_array();
    }

    public function edit_stuff($id, $data)
    {
        DB::update($this->_tableStuff)
            ->set($data)
            ->where('id', '=', $id)
            ->execute();
        return $id;

    }

}