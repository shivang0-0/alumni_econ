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
    echo "<script>";
    echo"alert('Company Account Created Successfully!');";
    echo"window.location.href='http://localhost/alumni_econ/logins/login_company.html';";
    echo"</script>";
}
mysqli_close($con);
?>