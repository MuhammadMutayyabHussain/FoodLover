<?php

include("helper/connection.php");
$Name=$_POST["name"];
$Contact=$_POST["contact_number"];
$Email=$_POST["email"];
$Person=$_POST["num_person"];
$Date=$_POST["book_date"];
$Time=$_POST["your_time"];
$Message=$_POST["message"];

$Query = "INSERT INTO tablereservation (id, name, contactnumber, ".
    " emailaddress, numberofperson, bookdate, yourtime, message) ".
    " VALUES('', '$Name', '$Contact', '$Email', '$Person', ".
    " '$Date', '$Time', '$Message')";

	$Result = mysqli_query($conn, $Query);
?>