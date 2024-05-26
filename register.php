
<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "foodweb");

if (isset($_POST["submit"])) {
    $name = $_POST["name"];
    $email = $_POST["email"];   
    $number = $_POST["number"];
    $password = $_POST["password"];
    $address = $_POST["address"];
    $duplicate = mysqli_query($conn, "SELECT * FROM user WHERE email='$email'");
    
    if ($duplicate) {
        if (mysqli_num_rows($duplicate) > 0) {
            echo "<script>alert('Email has already been taken');</script>";
        } else {
            $query = "INSERT INTO user VALUES ('', '$name', '$email', '$number', '$password', '$address')";
            mysqli_query($conn, $query);
            echo "<script>alert('Registration Successful');</script>";
        }
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food Website</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

    <section id="Home">
        <nav>


            <div class="icon">
                <i class="fa-solid fa-magnifying-glass"></i>
                <i class="fa-solid fa-heart"></i>
                <i class="fa-solid fa-cart-shopping"></i>
            </div>
            

            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="menu.html">Menu</a></li>
                <li><a href="gallary.html">Gallary</a></li>
                <li><a href="#Order">Order</a></li>
            </ul>
            <div class="logo">
                <img src="image/logo.png">
            </div>
            

        </nav>

        <div class="main">

            <div class="men_text">
                <h1>Get Fresh<span>Food</span><br>in a Easy Way</h1>
            </div>

            <div class="main_image">
                <img src="image/main_img.png">
            </div>

        </div>

        <p>
            Welcome to [Online Food Ordering Website] - your one-stop destination for culinary convenience! Say goodbye to kitchen chaos and hello to hassle-free dining with just a few clicks. Whether you're craving comfort food classics, exotic flavors from around the world, or healthy options to fuel your day, we've got you covered. Simply browse our extensive menu, place your order, and let us handle the rest. With seamless online ordering and swift delivery right to your doorstep, enjoying your favorite meals has never been easier. Join the foodie revolution and elevate your dining experience with [Online Food Ordering Website] today!
        </p>

        <div class="main_btn">
            <a href="#">Order Now</a>
            <i class="fa-solid fa-angle-right"></i>
        </div>

    </section>


    <div class="order" id="Order">
        <h1><span>Order</span>Now</h1>

        <div class="order_main">

            <div class="order_image">
                <img src="image/order_image.png">
            </div>

            <form action="register.php" method="post"> <!-- Specify the action to your PHP script -->
    <!-- Your form inputs -->
    <div class="input">
        <p>Name</p>
        <input type="text" name="name" placeholder="Enter your name">
    </div>
    <div class="input">
        <p>Email</p>
        <input type="email" name="email" placeholder="Enter your email">
    </div>
    <div class="input">
        <p>Number</p>
        <input type="tel" name="number" placeholder="Enter your number"> <!-- Corrected name attribute -->
    </div>
    <div class="input">
        <p>Password</p>
        <input type="text" name="password" placeholder="Enter Password"> <!-- Corrected name attribute -->
    </div>
    <div class="input">
        <p>Address</p>
        <input type="textarea" name="address" placeholder="Enter your Address"> <!-- Corrected input type -->
    </div>
    <button type="submit" name="submit" class="order_btn">REGISTER</button> <!-- Changed to button type -->
    <a href="login.php">Already a member? LOGIN</a>
</form>

        </div>

    </div>



   

    <footer>
        <div class="footer_main">

            <div class="footer_tag">
                <h2>Location</h2>
                <p>Lahore</p>
                <p>Islamabad</p>
                <p>Karachi</p>
            </div>

            <div class="footer_tag">
                <h2>Quick Link</h2>
                <p>Home</p>
                <p>About</p>
                <p>Menu</p>
                <p>Gallary</p>
                <p>Order</p>
            </div>

            <div class="footer_tag">
                <h2>Contact</h2>
                <p>+94 12 3456 789</p>
                <p>+94 25 5568456</p>
                <p>xyz123@gmail.com</p>
                <p>foodshop123@gmail.com</p>
            </div>

            <div class="footer_tag">
                <h2>Our Service</h2>
                <p>Fast Delivery</p>
                <p>Easy Payments</p>
                <p>24 x 7 Service</p>
            </div>

            <div class="footer_tag">
                <h2>Follows</h2>
                <i class="fa-brands fa-facebook-f"></i>
                <i class="fa-brands fa-twitter"></i>
                <i class="fa-brands fa-instagram"></i>
                <i class="fa-brands fa-linkedin-in"></i>
            </div>

        </div>

        <p class="end">Design by Maniha,Esha,Amber</p>

    </footer>



    
</body>
</html>