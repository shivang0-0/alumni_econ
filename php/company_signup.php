<?php
$con = mysqli_connect("localhost","root","","project");
$cname = $_POST['nm'];
$email = $_POST['email'];
$pass = $_POST['pass'];
if(!$con)
{
    echo "Failed to connect to MYSQL: " . mysqli_connect_error();
}
$sql = "INSERT INTO company_credentials VALUES (NULL , '$cname' , '$email' ,'$pass')";
if(mysqli_query($con,$sql))
{
   echo "query ran";
}
echo "Account created!!";
mysqli_close($con);
?>