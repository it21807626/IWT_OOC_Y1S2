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



else {
    echo "Connection successful";
}
?>