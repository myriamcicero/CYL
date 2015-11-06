<?php

include "../Volunteerdatabase.php";
$connection = getConnection();
$firstname = "Joe";
$lastname = "Smith";
$email = "johndoe@abd.com";
$mobilephone = "2156525986";
$people = "7";
$id = "2";
$volunteer = new Volunteer();
deleteUser($id);
echo "test finished";
?>