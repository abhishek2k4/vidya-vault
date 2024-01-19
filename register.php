<?php 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;500&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/540ada699c.js" crossorigin="anonymous"></script>
</head>
<body>
    <nav class="navbar">
        <div class="logo">
            <img src="images/lib-logo2.png" alt="">
            <a class="logo" href="index.php">Vidya Vault</a>
        </div>
        <div class="menu">
            <ul>
                <li class="nav-item"><a class="nav-link" href="index.php">Admin Login</a></li>
                <li class="nav-item"><a class="nav-link" href="index.php">User Login</a></li>
                <li class="nav-item"><a class="nav-link" href="register.php">Register</a></li>
            </ul>
        </div>
    </nav>

    <div class="hero-section register-hero">
        <section class="reg-form">
            <center><h2>User Registration Form</h2></center>   
            <form action="register.php" method="post">
                <div class="form-group">
                    <label for="name">Full Name:</label>
                    <input type="text" name="name" placeholder="Your Name" spellcheck="false" class="form-control required" >
                </div>
                <div class="form-group">
                    <label for="name">Email:</label>
                    <input type="text" name="email" placeholder="sample@gmail.com" spellcheck="false" class="form-control required" >
                </div>
                <div class="form-group">
                    <label for="name">Password:</label>
                    <input type="text" name="password" placeholder="Password@123" spellcheck="false" class="form-control required" >
                </div>
                <div class="form-group">
                    <label for="name">Mobile Number:</label>
                    <input type="text" name="mobile-number" placeholder="1144330099" spellcheck="false" class="form-control required" >
                </div>
                <div class="form-group">
                    <label for="name">Address:</label>
                    <textarea name="address" id="address" cols="30" rows="3" placeholder="Your Address" spellcheck="false" class="form-control required" ></textarea>
                </div>
                <center><button class="btn submit-btn" type="submit">Submit</button></center>
            </form> 
        </section>
        <section class="vector">
            <img class="vector-img vector-img-reg" src="images/lib-vector-png.png" alt="">
        </section>
    </div>

    <!-- <footer>
        <div class="footer-column">
            <h3>Explore More</h3>
            <p>"Explore diverse books in a quiet, welcoming space. Join our community for events and adventures in the
                world of literature. Discover, connect, and be inspired."</p>
        </div>
        <div class="footer-column fc1">
            <h3>Library Timing</h3>
            <ul>
                <li>Opening Time - 8:00 AM</li>
                <li>Closing Time - 8:00 PM</li>
                <li>Sunday Off</li>
            </ul>
        </div>

        <div class="footer-column">
            <h3>What we provide ?</h3>
            <ul>
                <li>Full furniture</li>
                <li>Free Wi-fi</li>
                <li>News Papers</li>
                <li>Discussion Room</li>
                <li>RO Water</li>
                <li>Peacefull Environment</li>
            </ul>
        </div>
        <div class="footer-column contact-info">
            <h3>Contact Us</h3>
            <ul>
                <span><i class="fa-solid fa-location-dot"></i> Raipur C.G.-492001</span><br>
                <span><i class="fa-solid fa-phone"></i> No.- <a href="#">10423 56789</a></span><br>
                <span><i class="fa-solid fa-envelope"></i> <a href="#">vidyavault@support.com</a></span>
            </ul>
        </div>
    </footer> -->
</body>
</html>