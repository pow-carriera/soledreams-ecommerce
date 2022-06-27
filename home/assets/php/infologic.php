<?php
// Initialize the session
session_start();

// Check if the user is already logged in, if yes then redirect him to welcome page

// Include config file
require_once "config.php";

// Define variables and initialize with empty values
$email = $address = "";
$email_err = $address_err = $login_err = "";

// Processing form data when form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Check if email is empty
    if (empty(trim($_POST["email"]))) {
        $email_err = "Please enter email.";
    } else {
        $email = trim($_POST["email"]);
    }

    // Check if address is empty
    if (empty(trim($_POST["address"]))) {
        $address_err = "Please enter your address.";
    } else {
        $address = trim($_POST["address"]);
    }

    // Validate credentials
    if (empty($email_err) && empty($address_err)) {
        // Prepare a select statement
        $sql = "UPDATE `users` SET `email`='".$email."', `address`='".$address."' WHERE id = '".$_SESSION["id"]."'";

        mysqli_query($link, $sql);
        header("location: index.php");
    }

    // Close connection
    mysqli_close($link);
}
