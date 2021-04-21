<?php
include "dbconnect.php";

if(isset($_POST['submit']))
{
  if($_POST['submit']=="login")
  { 
        $username=$_POST['login_username'];
        $password=$_POST['login_password'];
        $query = "SELECT * from customer where username ='$username' AND pssword='$password'";
        $result = mysqli_query($con,$query)or die(mysql_error());
        if(mysqli_num_rows($result) > 0)
        {
             $row = mysqli_fetch_assoc($result);
             $_SESSION['user']=$row['username'];
             header("Location: index.php?login=" . "Successfully Logged In");
        }
        else
          echo "Incorrect username or password";
   }
}

?>	
