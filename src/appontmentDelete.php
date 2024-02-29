<?php



$server = "localhost";
$username = "root";
$password = "";
$database = "salon";



$con = new mysqli($server, $username, $password, $database);



if ($con->connect_error)
{
    die ( "connection error ".$con->connect_error );
}

$sql = "DELETE FROM appointment WHERE appointment_id = '$_POST[]'";

if (mysqli_query($con, $sql))
	echo "Record deleted successfullly";
	
}

else{
	
	echo "Error deleting record";
	mysqli_error($con);
}

mysqli_close($con);

?>