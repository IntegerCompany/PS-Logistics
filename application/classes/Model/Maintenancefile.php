<?php defined('SYSPATH') or die('No direct script access.');

class Model_Maintenancefile extends Model
{
    protected $_tableMaintenanceFile = 'maintenance_file';


    public function add_maintenance_file($arr)
    {
        foreach ($arr['id'] as $valId) {
            foreach ($arr['maintenance_file'] as $val) {
                DB::insert($this->_tableMaintenanceFile, array('maintenance_file', 'maintenance'))->values(array($val, $valId))->execute();
            }
        }

    }
    public function get_maintenance_file()
    {
        $query = DB::select()
            ->from($this->_tableMaintenanceFile);
        return $query->execute()->as_array();
    }
    public function delete_file($id)
    {
        $query = DB::delete($this->_tableMaintenanceFile)
            ->where('id', '=', $id)->execute();
    }

}