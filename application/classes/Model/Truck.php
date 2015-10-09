<?php defined('SYSPATH') or die('No direct script access.');

class Model_Truck extends Model
{
    protected $_tableTruck = 'truck';

    public function add_truck($array)
    {
        $this->insert_to_table($this->_tableTruck,$array);
    }

    public function get_truck()
    {
        $query = DB::query(Database::SELECT, "SELECT *, (SELECT CONCAT(stuff.first_name,' ',stuff.last_name) FROM stuff WHERE stuff.id = truck.owner) as owner_name, (SELECT CONCAT(stuff.first_name,' ',stuff.last_name) FROM stuff WHERE stuff.id = truck.driver) as driver_name,(SELECT CONCAT(stuff.first_name,' ',stuff.last_name) FROM stuff WHERE stuff.id = truck.dispatcher) as dispatcher_name FROM truck");
        return $query->execute()->as_array();
    }

    public function get_truck_info($id)
    {
        $query = DB::query(Database::SELECT, "SELECT *, (SELECT CONCAT(stuff.first_name,' ',stuff.last_name) FROM stuff WHERE stuff.id = truck.owner) as owner_name, (SELECT CONCAT(stuff.first_name,' ',stuff.last_name) FROM stuff WHERE stuff.id = truck.driver) as driver_name,(SELECT CONCAT(stuff.first_name,' ',stuff.last_name) FROM stuff WHERE stuff.id = truck.dispatcher) as dispatcher_name FROM truck WHERE id = :id");
        $query->param(':id', $id);
        return $query->execute()->as_array();
    }

    public function edit_truck($id, $data)
    {
        DB::update($this->_tableTruck)
            ->set($data)
            ->where('id', '=', $id)
            ->execute();
        return $id;

    }

}