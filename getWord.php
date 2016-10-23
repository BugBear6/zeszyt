<?php
header('Content-Type: application/json');

include_once("connect.php");

$query_es = "SELECT * WHERE id = FROM pol_es";

if (!$connect){
	die('Server error, try again later');
} else {
	
	// get all the id
	if ($rows = $connect -> query("SELECT id FROM pol_es")){
		$rowIdList = array();
		foreach ($rows as $rowId) {			
			array_push( $rowIdList, $rowId['id'] );
		}
			
		// generate random number between first and last id number
		$arr_length = count( $rowIdList );
		$random_number = rand( 0 , $arr_length-1 );
		$random_id_number = $rowIdList[$random_number];
		
		// get random word from the table
		if($result = $connect -> query( "SELECT * FROM pol_es WHERE id = " . $random_id_number )){
		
			$row = $result -> fetch_object();
			$pol = $row -> pol;
			$es = $row -> es;
			$id = $row -> id;
			
			$json = array(
				'pol' => $pol,
				'es' => $es,
				'id' => $id
			);
		
			echo json_encode($json);
			
		} else {
			die("error with random id number:" . $random_id_number . "and random number " . $random_number );
		}
		
	} else {
		echo "error";
	}
	
	
}


