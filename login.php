<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Dorm Management System</title>
    <link rel="stylesheet" href="login.css"> <!-- Link to your custom CSS file -->
</head>

<body>
<header>
    <nav>
        <div class="logo">
            <h1>Dorm Reservation</h1>
        </div>
    </nav>
</header>

<main>
    <section class="login-form">
        <h2>Login</h2>
        <form action="./php-scripts/auth.php" method="post">
            <?php
            if (isset($_GET['error'])) {
                echo "<div class='error'>" . $_GET['error'] . "</div>";
            }
            ?>
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" placeholder="Enter your username">
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Enter your password">
            </div>

            <button type="submit" class="btn">Login</button>

            <p>Don't have an account yet? <a href="register.php">Register here</a></p>
        </form>
    </section>
</main>

<!-- Modal for successful login -->
<div id="success-modal" class="modal">
    <div class="modal-content">
        <h2>Login Successful</h2>
        <p>You have successfully logged in.</p>
        <button onclick="redirectToHomepage()">OK</button>
    </div>
</div>

<script>
    // Function to display the success modal
    function displaySuccessModal() {
        document.getElementById("success-modal").style.display = "block";
    }

    // Function to redirect to the homepage
    function redirectToHomepage() {
        window.location.href = "homepage.php"; // Replace "homepage.php" with the actual homepage URL
    }

    // Check if the login was successful and display the modal
    <?php
    if (isset($_GET['success']) && $_GET['success'] === "true") {
        echo 'window.onload = function() { displaySuccessModal(); }';
    }
    ?>
</script>

</body>

</html>
