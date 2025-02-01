<?php


include('../vendor/autoload.php');

use Libs\Database\MySQL;
use Libs\Database\UsersTable;
use Helpers\Auth;
use Helpers\HTTP;


$name = $_FILES['photo']['name'];
$tmp_name = $_FILES['photo']['tmp_name'];
$type = $_FILES['photo']['type'];

$user = Auth::check();

if ($type == "image/jpeg" or $type == "image/png") {
    $table = new UsersTable(new MySQL);
    $table->changePhoto($user->id, $name);

    $user->photo = $name;

    move_uploaded_file($tmp_name, "photos/$name");

    HTTP::redirect("/profile.php");
} else {
    HTTP::redirect("/profile.php", "error=type");
}
