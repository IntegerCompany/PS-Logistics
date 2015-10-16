<?php defined('SYSPATH') or die('No direct script access.');

class Model_Company extends Model
{
    protected $_tableCompany = 'company';

    public function add_company($array)
    {
        $this->insert_to_table($this->_tableCompany,$array);
    }

    public function get_company()
    {
        $query = DB::query(Database::SELECT, "SELECT * FROM company");
        return $query->execute()->as_array();
    }
    public function get_company_info($id)
    {
        $query = DB::query(Database::SELECT, "SELECT * FROM company WHERE id = :id");
        $query->param(':id', $id);
        return $query->execute()->as_array();
    }

    public function edit_company($id, $data)
    {
        DB::update($this->_tableCompany)
            ->set($data)
            ->where('id', '=', $id)
            ->execute();
        return $id;

    }

}