<?php

/**
 * Created by PhpStorm.
 * User: Miguel
 * Date: 07/07/2016
 * Time: 10:52 PM
 */
class Connection extends PDO
{
    private $host='localhost';
    private $port='3306';
    private $dbms='mysql';
    private $dbName='foro';
    private $user='root';
    private $password='1871';

    public function __construct($dsn, $username, $passwd, $options)
    {
        parent::__construct("$this->dbms:host=$this->host;port=$this->port;dbname=$this->dbName",$this->user, $this->password);
    }

}