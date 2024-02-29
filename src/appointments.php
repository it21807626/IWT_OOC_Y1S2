<?php



require 'config.php';


$servicetype = $_POST["service"];
$time = $_POST["appt_time"];
$date = $_POST["date"];



$sql = "INSERT INTO appointment( appointment_id, service_type, appt_date, time_slot)
VALUES ('','$servicetype','$date','$time')";

if ($con -> query($sql)){
    echo " Inserted successfully";
}



else {
    echo "error";
}



?>