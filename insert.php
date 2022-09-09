<?php
$username=$_POST['user'];
$password=$_POST['pass'];

$connection=mysqli_connect("localhost","root","","login");

$result=mysqli_query($connection,"INSERT INTO users (user, pass)
VALUES ('$username', '$password')") or die ("failed".mysqli_error());
// if ($username =='' or $password=='') {
//     echo "mendatory fields";
// }
// {
// 	else
    
echo "<script type='text/javascript'>alert('USER CREATED SUCCESSFULLY!')</script>" ;

//echo "<script type='text/javascript'>alert('NOW YOU CAN LOGIN WITH NEW USERNAME AND PASSWORD')</script>";

?>
