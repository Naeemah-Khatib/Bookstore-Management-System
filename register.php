<?php

include "dbconnect.php";


if(isset($_POST['submit']))
{
   if($_POST['submit']=="register")
     {
        $fname=$_POST['register_fname']
        $username=$_POST['register_username'];
        $password=$_POST['register_password'];
        $address=$_POST['register_address'];
        $phno=$_POST['register_phno'];
        $query="SELECT * from customer where username = '$username'";
        $result=mysqli_query($con,$query) or die(mysql_error);
        if(mysqli_num_rows($result)>0)
        {   
              header("Location: index.php?register=" . "Username is already taken...Use different username");
        }
        else
        {
          $query ="INSERT INTO customer VALUES ('$fname','$username','$password','$address','$phno')";
          $result=mysqli_query($con,$query);
          header("Location: index.php?register=" . "Successfully Registered!!");
        }
    }
}

?>