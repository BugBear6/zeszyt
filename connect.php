<?php

$db_host = 'localhost';
$db_name = 'zeszyt';
$db_pass = '';
$db_user = 'root';

// connect to the database
$connect = new mysqli($db_host, $db_user, $db_pass, $db_name);
$connect->set_charset("utf8");