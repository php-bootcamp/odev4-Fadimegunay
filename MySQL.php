<?php

class MySQL extends SQL{
    use SQLCrud;
    private $host;
    private $port;
    private $username;
    private $password;
    private $database;

    public function __construct(){}
    public function __destruct(){}
}

