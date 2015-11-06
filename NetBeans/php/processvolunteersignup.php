<?php

include "Volunteer.php";
include "Volunteerdatabase.php";
$volunteer = new Volunteer();
$volunteer->firstname = $_POST["firstname"];
$volunteer->lastname = $_POST["lastname"];
$volunteer->email = $_POST["email"];
$volunteer->mobilephone = $_POST["mobilephone"];
$volunteer->people = $_POST["people"];
$connection = getConnection();
//if ($volunteer->validate()){
//    echo "Is Valid";
//    echo $volunteer -> toString();
//}else{
//    echo "Try Again";
//}

//$firstname = $_POST["firstname"];
//echo("</br> First Name: " . $firstname);
//$lastname = $_POST["lastname"];
//echo("</br> Last Name: " . $lastname);
//$email = $_POST["email"];
//echo("</br> Email: " . $email);
//$mobilephone = $_POST["mobilephone"];
//echo("</br> Mobile Phone: " . $mobilephone);
//$people = $_POST["people"];
//echo("</br> People You Will Bring: " . $people);
//if ($firstname != null && $lastname != null && $email != null && $mobilephone != null && $people != null) {
//    echo("</br> Thank you for your comment");
//} else {
//    echo ("</br> Your Comment Must NOT Be Blank; Please Try Again");
//}
?>