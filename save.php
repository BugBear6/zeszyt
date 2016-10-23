<?php
header('Content-Type: application/json');

include_once("connect.php");

$id = $_GET['id'];
$esWord = $_GET['wordes'];
$polWord = $_GET['wordpol'];

$query = "UPDATE pol_es SET es='" .$esWord. "', pol='" .$polWord. "' WHERE id=" .$id;


if ($connect->query($query) === TRUE) {
    echo "Row updated";
} else {
    echo "Error: " . $query . "<br>" . $connect->error;
}