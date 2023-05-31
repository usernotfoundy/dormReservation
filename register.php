<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Dorm Management System</title>
    <link rel="stylesheet" href="register.css"> <!-- Link to your custom CSS file -->
</head>

<body>
    <header>
        <nav>
            <div class="logo">
                <h1>Dorm Management System</h1>
            </div>
        </nav>
    </header>

    <main>
        <section class="register-form">
            <h2>Register</h2>
            <form action="./php-scripts/registerTenant.php" method="post">
                <?php
                    if(isset($_GET['error'])){
                        echo "<div class='error'>" . $_GET['error'] . "</div>";
                    }
                ?>
                <span>Personal Information</span>
                <div class="form-group">
                    <label for="firstName">First Name</label>
                    <input type="text" id="firstName" name="firstName" placeholder="Enter your first name">
                </div>

                <div class="form-group">
                    <label for="middleName">Middle Name (Optional)</label>
                    <input type="text" id="middleName" name="middleName" placeholder="Enter your middle name">
                </div>

                <div class="form-group">
                    <label for="lastName">Last Name</label>
                    <input type="text" id="lastName" name="lastName" placeholder="Enter your last name">
                </div>

                <div class="form-group">
                    <label for="gender">Gender</label>
                    <select id="gender" name="gender">
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        <option value="other">Other</option>
                    </select>
                </div>
                <br>
                <span>Contact Details</span>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="Enter your email address">
                </div>

                <div class="form-group">
                    <label for="contactNumber">Contact Number</label>
                    <input type="tel" id="contactNumber" name="contactNumber" placeholder="Enter your contact number">
                </div>
                <br>
                <span>Login Information</span>
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" id="username" name="username" placeholder="Choose a username">
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" placeholder="Enter a password">
                </div>

                <div class="form-group">
                    <label for="confirmPassword">Confirm Password</label>
                    <input type="password" id="confirmPassword" name="confirmPassword"
                        placeholder="Confirm your password">
                </div>
                <input type="submit" value="Register" class="btn">
            </form>
            <p>Already have an account? <a href="login.php">Login here</a></p>
        </section>
    </main>

    <footer>
        <p>&copy; 2023 Dorm Management System. All rights reserved.</p>
    </footer>
</body>

</html>