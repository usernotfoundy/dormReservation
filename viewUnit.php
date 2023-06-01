<?php
session_start(); // Start the session

// Check if the user is logged in
if (isset($_SESSION["username"])) {
    // User is logged in
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["logout"])) {
        // Logout button is clicked
        // Display the logout confirmation modal
        echo '
            <div id="logout-modal" class="modal">
                <div class="modal-content">
                    <p>Are you sure you want to logout?</p>
                    <form method="post" action="./php-scripts/logout.php">
                        <button type="button" onclick="closeModal()">Cancel</button>
                        <button type="submit" name="logout">Logout</button>
                    </form>
                </div>
            </div>
            <script>
                function closeModal() {
                    document.getElementById("logout-modal").style.display = "none";
                }
            </script>
        ';
        echo '<script>document.getElementById("logout-modal").style.display = "block";</script>';
    }
} else {
    // User is not logged in
    // Redirect to the login page or display an appropriate message
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Unit - Dorm Reservation</title>
    <link rel="stylesheet" href="viewUnit.css">
</head>
<body>
    <header>
        <nav>
            <div class="logo">
                <h1>Dorm Reservation</h1>
            </div>
            <ul class="nav-links">
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Rooms</a></li>
                <li><a href="#">Gallery</a></li>
                <li>
                    <form method="post">
                        <button type="submit" name="logout"><?php echo $_SESSION["username"]; ?><img src="./assets/icons/iconArrowRight.png" alt="icon-arrowRight"></button>
                    </form>
                </li>
            </ul>
        </nav>
    </header>
    <main>
        
    </main>
</body>
</html>