<?php defined('SYSPATH') or die('No direct script access.');

class Model_Position extends Model
{
    protected $_tablePosition = 'position';

    public function get_position()
    {
        return DB::select()->from($this->_tablePosition)->execute()->as_array();
    }


}