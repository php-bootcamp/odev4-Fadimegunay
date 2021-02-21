<?php

include "IQuery.php";
include "PDOConnector.php";
include "SQL.php";
include "SQLCrud.php";
include "SQLQuery.php";
include "MySQL.php";
include "PostgreSQL.php";

$db = new MySQL("localhost", "root", "", "caricatur");

$query = (new SQLQuery())->setTable("users")->select()->addWhere("username", "=", ":user")->addBinding("user", "fadime");

$eray = $db->first($query);
