<?php

include_once "base.php";

$row=q("INSERT INTO invoice VALUES (null,'GG','56549879','1,'78','2020')");
echo "<pre>";
var_dump($row);
echo "</pre>";
// $row=q("SELECT * FROM invoice WHERE id='20'");
// echo "<pre>";
// var_dump($row);
// echo "</pre>";

function q($sql){

    global $pdo;
    return $pdo->query($sql)->fetchAll();
}

?>