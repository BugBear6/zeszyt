<?php
header('Content-Type: application/json');

include_once("connect.php");

if(isset($_GET['wordes']))
	$esWord = htmlentities($_GET['wordes']);

if(isset($_GET['wordpol']))
	$polWord = htmlentities($_GET['wordpol']);

$returnArray = array();

if ( isset($esWord) && $esWord != '' ) {
	$query = 'SELECT * FROM pol_es  WHERE es LIKE "%' .$esWord. '%"';
} else {
	$query = 'SELECT * FROM pol_es  WHERE pol LIKE "%' .$polWord. '%"';
}


if ($connect) {
    
	if($result = $connect -> query( $query )) {
		while ( $row = $result -> fetch_object() ){

			$pol = $row -> pol;
			$es = $row -> es;
			$id = $row -> id;

			$arr = array(
				'pol' => $pol,
				'es' => $es,
				'id' => $id
			);

			array_push($returnArray, $arr);
		}
	}

} else {
    echo "Error: " . $query . "<br>" . $connect->error;
}

echo ( json_encode($returnArray));