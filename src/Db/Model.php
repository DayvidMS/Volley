<?php

namespace App\Db;

use App\Db\Connection;

abstract class Model extends Connection {


    protected $db;

    public function __construct()
    {
    
    }

    public function __get($param)
    {
        return $this->{$param};
    }

    public function __set($name, $value)
    {
        $this->{$name} = $value;
    }

    public function create()
    {

    }

    public function getConn()
    {
        return parent::getConn();
    }
}