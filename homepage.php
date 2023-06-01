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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Dorm Reservation</title>
    <link rel="stylesheet" href="homepage.css"> <!-- Link to your custom CSS file -->
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
            <li><a href="#">Units</a></li>
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
        <section class="section-1">
            <div class="sub-section">
                <h1>Secure Your Spot for a Memorable Stay</h1>
                <p>Welcome to our dorm reservation homepage, where we invite you to embark on a journey of unforgettable
                    experiences. Secure your spot today and unlock the dorm dream of a lifetime. </p>
                <div class="page-info">
                    <div class="infos">
                        <span>Boarders</span>
                        <div class="details">
                            <img src="./assets/icons/iconUsers.png" alt="boarders-icon">
                            <span>10</span>
                        </div>
                    </div>
                    <div class="infos">
                        <span>Dorm Slots</span>
                        <div class="details">
                            <img src="./assets/icons/iconBed.png" alt="bed-icon">
                            <span>17</span>
                        </div>
                    </div>
                    <div class="infos">
                        <span>Reserved</span>
                        <div class="details">
                            <img src="./assets/icons/iconReserve.png" alt="reservation-icon">
                            <span>5</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sub-section">
                <img src="./assets/dorm3.jpg" alt="main-pic">
            </div>
        </section>
        <section class="section-2">
            <div class="sub-section">

                <div class="card-wrapper">
                    <h1>Dorm rooms</h1>
                    <div>
                        <div class="cards">
                            <img src="./assets/rooms/room1.jpg" alt="room-pic">
                            <div class="card-content">
                                <span>Bed in 8-Bed Room with Shared Bathroom</span>
                                <div class="room-details">
                                    <div class="details-group">
                                        <img src="./assets/icons/iconUsers.png" alt="users-icon">
                                        <span>8</span>
                                        <span>Sleeps</span>
                                    </div>
                                    <div class="details-group">
                                        <img src="./assets/icons/iconBed.png" alt="bed-icon">
                                        <span>4</span>
                                        <span>Bunk Beds</span>
                                    </div>
                                </div>
                                <a class="availability" href="#">
                                    <span>See availability</span>
                                    <img src="./assets/icons/iconArrowRight.png" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="cards">
                            <img src="./assets/rooms/room3.jpg" alt="room-pic">
                            <div class="card-content">
                                <span>Double Room with Private Bathroom</span>
                                <div class="room-details">
                                    <div class="details-group">
                                        <img src="./assets/icons/iconUsers.png" alt="users-icon">
                                        <span>2</span>
                                        <span>Sleeps</span>
                                    </div>
                                    <div class="details-group">
                                        <img src="./assets/icons/iconBed.png" alt="bed-icon">
                                        <span>2</span>
                                        <span>Beds</span>
                                    </div>
                                </div>
                                <a class="availability" href="#">
                                    <span>See availability</span>
                                    <img src="./assets/icons/iconArrowRight.png" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sub-section">
                <a href="#">View all rooms</a>
                <div class="feature-card">
                    <h2>Stay Longer, Save More</h2>
                    <span>It's simple: the longer you stay, the more you save!</span>
                    <div class="para">
                        <p>Immerse yourself in a vibrant community, create lifelong friendships, and make memories that
                            will
                            last a lifetime.</p>
                    </div>
                    <button>Choose room</button>
                </div>
            </div>
        </section>
        <section class="section-3">
            <div class="sub-section">
                <h1>We have everything you need</h1>
                <span>Whether you're seeking a cozy nook to study or a social hub to connect with fellow students, our
                    dorms are designed to provide a memorable stay, ensuring you have the perfect balance between
                    comfort and adventure.</span>
                <div class="services-offered">
                    <div class="divider">
                        <div class="service">
                            <img src="./assets/icons/iconWiFi.png" alt="icon-WiFi">
                            <span>Free available high speed WiFi</span>
                        </div>
                        <div class="service">
                            <img src="./assets/icons/iconBriefCase.png" alt="icon-luggage">
                            <span>Free storage of luggage of any size</span>
                        </div>
                    </div>
                    <div class="divider">
                        <div class="service">
                            <img src="./assets/icons/iconLocation.png" alt="icon-location">
                            <span>Near MMSU Campus</span>
                        </div>
                        <div class="service">
                            <img src="./assets/icons/iconParking.png" alt="icon-parking">
                            <span>Parking space allocated to you</span>
                        </div>
                    </div>
                </div>
                <div class="navigate-to">
                    <a href="#">Reserve now</a>
                    <a href="#" class="more-about">
                        <span>More about</span>
                        <img src="./assets/icons/iconArrowRight.png" alt="icon-arrowRight">
                    </a>
                </div>
            </div>
            <div class="sub-section">
                <img src="./assets/students/students.jpg" alt="pic-students">
            </div>
        </section>
    </main>

</body>

</html>