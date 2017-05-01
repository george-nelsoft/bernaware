<?php
function queryResult($query = "",$retainConnection = false){
	$host = "127.0.0.1";
	$user ="root";
	$password = "121586";
	$schema = "timesoft";
	if($query == "") return;
	$connection = mysqli_connect($host, $user, $password, $schema);
	$result = mysqli_query($connection, $query);
	if($retainConnection){
		$returnvalue['result'] = $result;
		$returnvalue['connection'] = $connection;
		return $returnvalue;
	}else{
		mysqli_close($connection);
		return $result;
	}
}
?>