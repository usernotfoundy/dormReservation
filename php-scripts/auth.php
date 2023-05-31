<?php
include "config.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];


    if (empty($username) || empty($password)) {
        $error = "Please enter your username and password." . $conn->error;
    }
    else {
        $hashedPassword = sha1($password);
        $sql = "SELECT * FROM `user_login` WHERE `username`='$username' AND `password`='$hashedPassword'";
        $result = $conn->query($sql);

        if ($result->num_rows == 1) {
            // Login successful
            session_start();
            $_SESSION["username"] = $username;
            header('Location: ../homepage.php');
            exit();
        } else {
            // Login failed
            $error = "Incorrect username or password." . $conn->error;
        }
    } 
    
    // Pass error message back to register.php
    if (isset($error)) {
        header('Location: ../login.php?error=' . urlencode($error));
        exit();
    }
}
?>
