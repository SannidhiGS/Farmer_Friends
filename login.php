<?php
      if(isset($_POST["submit"])){
        $email=$_POST["email"];
		$password=$_POST["password"];
        include("dbms.php");
        $sql="INSERT INTO login(email,password)VALUES('$email','$password')";
        if(mysqli_query($conn,$sql)){
         header("Location: about.html");
        }else{
          echo"Error:".$sql."<br>".mysqli_error($conn);
        }
        mysqli_close($conn);
      }
      ?>