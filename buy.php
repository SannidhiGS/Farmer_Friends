<?php
      if(isset($_POST["submit"])){
        $name=$_POST["name"];
        $email=$_POST["email"];
		    $number=$_POST["number"];
        $address=$_POST["address"];
        include("dbms.php");
        $sql="INSERT INTO buy(name,email,number,address)VALUES('$name','$email','$number','$address')";
        if(mysqli_query($conn,$sql)){
         header("Location: product.html");
        }else{
          echo"Error:",$sql,"<br>",mysqli_error($conn);
        }
        mysqli_close($conn);
      }
      ?>