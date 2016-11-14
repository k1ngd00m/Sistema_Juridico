<?php

/**
 * Created by PhpStorm.
 * User: McBro
 * Date: 05/11/2016
 * Time: 7:50 PM
 */
class Connection
{
    private $host='localhost';
    private $db='Sistema_Juridico';
    private $user='postgres';
    private $password='0925';
    private $url;
    private $connection;
    public function __construct()
    {
        $this->url="host='$this->host' dbname='$this->db' user='$this->user' password='$this->pass' ";
        $this->connection = pg_connect($this->url);
    }

    public function __destruct()
    {
        pg_close($this->connection);
    }

}