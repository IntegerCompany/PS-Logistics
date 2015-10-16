<?php defined('SYSPATH') or die('No direct script access.');

class Model_Broker extends Model
{
    protected $_tableBroker = 'broker';

    public function add_broker($array)
    {
        $this->insert_to_table($this->_tableBroker,$array);
    }

    public function get_broker()
    {
        $query = DB::query(Database::SELECT, "SELECT * FROM broker");
        return $query->execute()->as_array();
    }
    public function get_broker_info($id)
    {
        $query = DB::query(Database::SELECT, "SELECT * FROM broker WHERE id = :id");
        $query->param(':id', $id);
        return $query->execute()->as_array();
    }

    public function edit_broker($id, $data)
    {
        DB::update($this->_tableBroker)
            ->set($data)
            ->where('id', '=', $id)
            ->execute();
        return $id;

    }
    public function delete_broker($id)
    {
        $query = DB::delete($this->_tableBroker)
            ->where('id', '=', $id)->execute();
    }

}