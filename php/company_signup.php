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
   echo "Company Account Created Successfully";
}
sleep(2);
header('Location: http://localhost/alumni_econ/logins/login_sa.html');
mysqli_close($con);
?>