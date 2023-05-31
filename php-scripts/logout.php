<?php
session_start(); // Start the session

// Check if the user is logged in
if (isset($_SESSION["username"])) {
    // User is logged in
    // Destroy the session
    session_destroy();

    // Redirect to the login page or any other page as needed
    $error = "You have been logout." . $conn->error;
    header('Location: ../login.php?error=' . urlencode($error));
    exit();
} else {
    // User is not logged in
    // Redirect to the login page or display an appropriate message
    header("Location: ../login.php");
    exit();
}
?>
