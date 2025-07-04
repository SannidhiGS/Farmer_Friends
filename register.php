<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <style>
      body {
        background-image:
      url('register.jpg');
       background-repeat: no-repeat;
       background-attachment: fixed;
       background-size: cover;
    }
    </style>
   <title>Login</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<!-- header section starts  -->

<header class="header">

   <nav class="navbar nav-1">
      <section class="flex">
         <a href="about.html" class="logo"><i class="fas fa-house"></i>Farmer Friends</a>
      </section>
   </nav>

   <nav class="navbar nav-2">
      <section class="flex">
         <div id="menu-btn" class="fas fa-bars"></div>

         <div class="menu">
            <ul>
            <li><a href="about.html">home</a>
               </li>
               <li><a href="analysis.html">analysis</a>
               </li>
               <li><a href="product.html">product</a>
               </li>
               <li><a href="buy.html">buy</a>
               </li>
            </ul>
         </div>

         <ul>
            <li><a href="about.html">about<i class="far fa-heart"></i></a></li>
            <li><a href="#">account <i class="fas fa-angle-down"></i></a>
               <ul>
                  <li><a href="login.html">login</a></li>
                  <li><a href="register.html">register</a></li>
               </ul>
            </li>
         </ul>
      </section>
   </nav>

</header><center><br><br><br><br><br><br><br><br><br><br>
<?php
$mysql_host = 'localhost';
$mysql_user = 'root';
$mysql_password = '';
$mysql_name = "project";
$conn = mysqli_connect($mysql_host,$mysql_user,$mysql_password,$mysql_name);
if (!$conn) {
    die("Cannot connect to the database: " . mysqli_connect_error());
}
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $username = $_POST["username"];
    $password = password_hash($_POST["password"], PASSWORD_BCRYPT); // Hash the password

    // Check if the email is already registered
    $query = "SELECT email FROM user WHERE email = '$email'";
    $result = $conn->query($query);
    if ($result->num_rows > 0) {
        echo "Email is already registered. Please use a different email.";
    } else {
        // Insert user data into the database
        $insertQuery = "INSERT INTO user(name, email, username, password) VALUES ('$name', '$email', '$username', '$password')";
        
        if ($conn->query($insertQuery) === TRUE) {
         header("Location: login.html");
        } else {
            echo "Error: " . $insertQuery . "<br>" . $connection->error;
        }
    }
}
?>

</center><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br></form>
<footer class="footer">

<section class="flex">

   <div class="box">
      <a href="tel:1234567890"><i class="fas fa-phone"></i><span>08067-56788</span></a>
      <a href="tel:1112223333"><i class="fas fa-phone"></i><span>08056-78654</span></a>
      <a href="mailto:shaikhanas@gmail.com"><i class="fas fa-envelope"></i><span>farmerfriends@gmail.com</span></a>
      <a href="#"><i class="fas fa-map-marker-alt"></i><span>chikkamagaluru,INDIA-573102</span></a>
   </div>

   <div class="box">
      <a href="about.html"><span>about</span></a>
      <a href="contact.html"><span>contact</span></a>
   </div>

   <div class="box">
         <a href="https://www.facebook.com/"><span>facebook</span><i class="fab fa-facebook-f"></i></a>
         <a href="https://twitter.com/login"><span>twitter</span><i class="fab fa-twitter"></i></a>
         <a href="https://in.linkedin.com/"><span>linkedin</span><i class="fab fa-linkedin"></i></a>
         <a href="https://www.instagram.com/"><span>instagram</span><i class="fab fa-instagram"></i></a>

      </div>
</section>

<div class="credit">Grow healthy,be healthy</div>

</footer>

<!-- footer section ends -->


<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>