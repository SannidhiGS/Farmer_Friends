<?php
      if(isset($_POST["submit"])){
        $name=$_POST["name"];
        $email=$_POST["email"];
		    $number=$_POST["number"];
        $message=$_POST["message"];
        include("dbms.php");
        $sql="INSERT INTO contact(name,email,number,message)VALUES('$name','$email','$number','$message')";
        if(mysqli_query($conn,$sql)){
         header("Location: about.html");
        }else{
          echo"Error:",$sql,"<br>",mysqli_error($conn);
        }
        mysqli_close($conn);
      }
      ?>