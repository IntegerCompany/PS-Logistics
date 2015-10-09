<?php defined('SYSPATH') or die('No direct script access.');

class Model_Trailer extends Model
{
    protected $_tableTrailer = 'trailer';

    public function add_trailer($array)
    {
        $this->insert_to_table($this->_tableTrailer,$array);
    }

    public function get_trailer()
    {
        $query = DB::query(Database::SELECT, "SELECT *, (SELECT CONCAT(stuff.first_name,' ',stuff.last_name) FROM stuff WHERE stuff.id = trailer.owner) as owner_name FROM trailer");
        return $query->execute()->as_array();
    }

    public function get_trailer_info($id)
    {
        $query = DB::query(Database::SELECT, "SELECT *, (SELECT CONCAT(stuff.first_name,' ',stuff.last_name) FROM stuff WHERE stuff.id = trailer.owner) as owner_name FROM trailer WHERE id = :id");
        $query->param(':id', $id);
        return $query->execute()->as_array();
    }

    public function edit_trailer($id, $data)
    {
        DB::update($this->_tableTrailer)
            ->set($data)
            ->where('id', '=', $id)
            ->execute();
        return $id;

    }

}