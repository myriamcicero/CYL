<?php

include "DatabaseConnect.php";
include "Volunteer.php";

function insertUser($firstname, $lastname, $email, $mobilephone, $people) {
    try {
        $connection = getConnection();
        $sql = "INSERT INTO eventsignup (firstname, lastname, email, mobilephone, people)" . "Values ('$firstname','$lastname','$email','$mobilephone','$people')";
        $connection->exec($sql);
        $connection = null;
    } catch (Exception $e) {
        echo "EXCEPTION: Insert failed: " . $e->getMessage();
    }
}

function getUserById($id) {
    try {
        $connection = getConnection();
        $sql = "SELECT * FROM eventsignup WHERE id = $id";
        $result = $connection->query($sql);
        $volunteer = new Volunteer();
        foreach ($result as $row) {
            $volunteer->id = $row['id'];
            $volunteer->firstname = $row['firstname'];
            $volunteer->lastname = $row ['lastname'];
            $volunteer->email = $row ['email'];
            $volunteer->mobilephone = $row ['mobilephone'];
            $volunteer->people = $row ['people'];
            return $volunteer;
        }
        $connection = null;
    } catch (Exception $e) {
        echo "EXCEPTION : Select failed : " . $e->getMessage();
    }
}

function updateUser($id, $firstname, $lastname, $email, $mobilephone, $people) {
    try {
        $connection = getConnection();
        $sql = "UPDATE eventsignup SET firstname = '$firstname', lastname = '$lastname', email = '$email', mobilephone = '$mobilephone', people = '$people' WHERE id = '$id'";
        $result = $connection->exec($sql);
        $connection = null;
    } catch (Exception $e) {
        echo "EXCEPTION : Update failed : " . $e->getMessage();
    }
    $volunteer = new Volunteer();
    $volunteer->id = $id;
    $volunteer->firstname = $firstname;
    $volunteer->lastname = $lastname;
    $volunteer->email = $email;
    $volunteer->mobilephone = $mobilephone;
    $volunteer->people = $people;
    return $volunteer;
}

function deleteUser($id) {
    try {
        $connection = getConnection();
        $sql = "DELETE FROM eventsignup WHERE id = $id";
        $result = $connection->exec($sql);
        $connection = null;
    } catch (Exception $e) {
        echo "EXCEPTION : Delete failed : " . $e->getMessage();
    }
}

?>