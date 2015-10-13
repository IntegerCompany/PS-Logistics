<?php defined('SYSPATH') or die('No direct script access.');

class Model_Maintenance extends Model
{
    protected $_tableMaintenance = 'maintenance';

    public function add_maintenance($array)
    {
        $this->insert_to_table($this->_tableMaintenance, $array);
    }
    public function get_maintenance_from_vin($vin)
    {
        $query = DB::query(Database::SELECT, "SELECT DISTINCT FROM_UNIXTIME(m.time, '%m/%d/%Y') as date, m.description, m.id, mf.maintenance_file FROM maintenance as m LEFT JOIN maintenance_file as mf ON mf.maintenance = m.id WHERE m.vin = :vin AND m.status = 1 ORDER BY date, m.id");
        $query->param(':vin', $vin);
        return $query->execute()->as_array();
    }

    public function get_maintenance()
    {
        $query = DB::query(Database::SELECT, "SELECT maintenance.id,description, FROM_UNIXTIME(time, '%m/%d/%Y') as time, maintenance.vin, IFNULL(trailer.year,truck.year) as year, IFNULL(trailer.car_number,truck.car_number) as car_number FROM maintenance LEFT JOIN trailer ON trailer.vin = maintenance.vin LEFT JOIN truck ON truck.vin = maintenance.vin WHERE maintenance.status = 0 ORDER BY time DESC ");
        return $query->execute()->as_array();
    }
    public function done_maintenance($arr_id)
    {
        foreach($arr_id as $val){
            DB::update($this->_tableMaintenance)
                ->set(array("status"=>"1"))
                ->where('id', '=', $val)
                ->execute();
        }

    }

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