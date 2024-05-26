<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "foodweb");
if (isset($_POST["submit"])) {
    $email = $_POST["email"];   
    $password = $_POST["password"];
   
    // Assuming $conn is defined somewhere earlier in your code.
    $result = mysqli_query($conn, "SELECT * FROM user WHERE email='$email'");
    $row = mysqli_fetch_assoc($result);
    if (mysqli_num_rows($result) > 0) {
        if ($password == $row["password"]) {
            $_SESSION["login"] = true; 
            $_SESSION["id"] = $row["id"]; 
            header("location: register.php");
            exit();
        } else {
            echo "<script>alert('Wrong Password');</script>";
        }
    } else {
        echo "<script>alert('User Not Registered');</script>";
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

<div class="order" id="Order">
    <h1><span>Order</span>Now</h1>

    <div class="order_main">

        <div class="order_image">
            <img src="image/order_image.png">
        </div>

        <form action="login.php" method="post">
            <div class="input">
                <p>Email</p>
                <input type="email" name="email" placeholder="Enter your email">
            </div>

            <div class="input">
                <p>Password</p>
                <input type="password" name="password" placeholder="Enter Password">
            </div>
            
            <a href="register.php">Not a member, REGISTER First</a>
            <button type="submit" name="submit" class="order_btn">LOGIN</button>
        </form>

    </div>

</div>

</body>
</html>
