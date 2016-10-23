<?php
header('Content-Type: application/json');

include_once("connect.php");

$id = $_GET['id'];

$query = 'DELETE FROM pol_es WHERE id=' .$id ;


if ($connect->query($query) === TRUE) {
    echo "Row deleted";
} else {
    echo "Error: " . $query . "<br>" . $connect->error;
}