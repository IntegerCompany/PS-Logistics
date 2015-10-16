<?php defined('SYSPATH') or die('No direct script access.');

class Model_Shipping extends Model
{
    protected $_tableTrailer = 'shipping';

    public function add_shipping($array)
    {
        $this->insert_to_table($this->_tableShipping,$array);
    }



}