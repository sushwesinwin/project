<?php

include("../vendor/autoload.php");

use Libs\Database\MySQL;
use Libs\Database\UsersTable;

$table = new UsersTable(new MySQL);
$id = $table->insert([
    "name" => "Alce",
    "email" => "alice@gmail.com",
    "phone" => "123434",
    "address" => "some address",
    "password" => "password",
]);

echo $id;
