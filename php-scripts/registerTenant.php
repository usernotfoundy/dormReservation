<?php
include "config.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstName = $_POST["firstName"];
    $middleName = $_POST["middleName"];
    $lastName = $_POST["lastName"];
    $gender = $_POST["gender"];
    $email = $_POST["email"];
    $contactNumber = $_POST["contactNumber"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $confirm_password = $_POST["confirmPassword"];

    // Validate input data
    if (empty($username) || empty($password) || empty($confirm_password)) {
        // Display error message if fields are empty
        $error = "All fields are required.";
    } elseif ($password != $confirm_password) {
        // Display error message if passwords do not match
        $error = "Passwords do not match.";
    } else {
        // Check if the username already exists in the database
        $sql = "SELECT * FROM `user_login` WHERE `username`='$username'";
        $result = $conn->query($sql);

        if ($result->num_rows == 0) {
            // Hash the password
            $hashedPassword = sha1($password);

            // Insert data into user_info table
            $sql = "INSERT INTO `user_info` (`firstName`, `middleName`, `lastName`, `gender`, `email`, `contactNumber`, `username`, `password`) 
            VALUES ('$firstName', '$middleName', '$lastName', '$gender', '$email', '$contactNumber', '$username', '$hashedPassword')";

            if ($conn->query($sql) === TRUE) {
                // Insert data into user_login table
                $sql = "INSERT INTO `user_login` (`username`, `password`) VALUES ('$username', '$hashedPassword')";
                if ($conn->query($sql) === TRUE) {
                    // Registration successful, redirect to the login page
                    header('Location: ../login.php');
                    exit();
                } else {
                    // Display error message if user_login insertion fails
                    $error = "Registration failed: " . $conn->error;
                }
            } else {
                // Display error message if user_info insertion fails
                $error = "Registration failed: " . $conn->error;
            }
        } else {
            // Display error message if username already exists
            $error = "This username is already taken.";
        }
    }

    // Pass error message back to register.php
    if (isset($error)) {
        header('Location: ../register.php?error=' . urlencode($error));
        exit();
    }
}
?>
