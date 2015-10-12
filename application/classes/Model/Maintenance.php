<?php defined('SYSPATH') or die('No direct script access.');

class Model_Maintenance extends Model
{
    protected $_tableMaintenance = 'maintenance';

    public function add_maintenance($array)
    {
        $this->insert_to_table($this->_tableMaintenance, $array);
    }

//    public function get_trailer()
//    {
//        $query = DB::query(Database::SELECT, "SELECT *, (SELECT CONCAT(stuff.first_name,' ',stuff.last_name) FROM stuff WHERE stuff.id = trailer.owner) as owner_name FROM trailer");
//        return $query->execute()->as_array();
//    }
//
//    public function get_trailer_info($id)
//    {
//        $query = DB::query(Database::SELECT, "SELECT *, (SELECT CONCAT(stuff.first_name,' ',stuff.last_name) FROM stuff WHERE stuff.id = trailer.owner) as owner_name FROM trailer WHERE id = :id");
//        $query->param(':id', $id);
//        return $query->execute()->as_array();
//    }
//
//    public function edit_trailer($id, $data)
//    {
//        DB::update($this->_tableTrailer)
//            ->set($data)
//            ->where('id', '=', $id)
//            ->execute();
//        return $id;
//
//    }

}