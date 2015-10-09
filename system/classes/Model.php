<?php defined('SYSPATH') OR die('No direct script access.');

abstract class Model extends Kohana_Model
{
    protected function insert_to_table($table,$array)
    {
        foreach ($array as $key => $value) {
            $arrayKey[] = $key;
            $arrayVal[] = $array[$key];
        }
        DB::insert($table, $arrayKey)->values($arrayVal)->execute();
    }
}
