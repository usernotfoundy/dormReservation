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
                if(isset($_GET['error'])){
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
</body>

</html>