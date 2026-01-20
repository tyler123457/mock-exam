<?php

require_once '../connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $phoneNumber = $_POST['phoneNumber'];

    $sql = "INSERT INTO customers (firstName, lastName, email, password, phoneNumber)
    VALUES ('$firstName', '$lastName', '$email', '$password', '$phoneNumber')";

    if ($conn->query($sql) === TRUE) {
        echo "Account Created Successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

}

$conn->close();

?>
