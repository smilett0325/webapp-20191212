<?php
header("Access-Control-Allow-Origin: *");
$link = mysqli_connect(
    "210.70.80.21",
    "s107021043",
    "oCheiPh7",
    "s107021043"
);

if(!$link){
    echo "Error: unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno:" . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging errno:" . mysqli_connect_errno() . PHP_EOL;
    exit;
}

$link -> set_Charset("utf8");