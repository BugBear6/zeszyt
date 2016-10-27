<?php
header('Content-Type: application/json');

include_once("connect.php");

$id = htmlentities($_GET['id']);
$esWord = str_replace('  ', ' ', trim( htmlentities( $_GET['wordes'] ) ) );
$polWord = str_replace('  ', ' ', trim( htmlentities( $_GET['wordpol'] ) ) );

$query = "UPDATE pol_es SET es='" .$esWord. "', pol='" .$polWord. "' WHERE id=" .$id;


if ($connect->query($query) === TRUE) {
    echo "Row updated";
} else {
    echo "Error: " . $query . "<br>" . $connect->error;
}