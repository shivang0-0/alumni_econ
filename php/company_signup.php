<?php
$con = mysqli_connect("localhost","root","","project");
$cname = $_POST['nm'];
$email = $_POST['email'];
$pass = $_POST['pass'];
$location_based = $_POST['location_based'];
$phone = $_POST['phone'];
$website = $_POST['website'];
if(!$con)
{
    echo "Failed to connect to MYSQL: " . mysqli_connect_error();
}
$sql1 = "INSERT INTO company_details VALUES (NULL , '$cname' , '$email')";
$sql2 = "INSERT INTO company_cred VALUES ('$email','$pass')";
$sql3 = "INSERT INTO company_dash VALUES (NULL, '$location_based', '$phone', '$website')";

if(mysqli_query($con,$sql1) && mysqli_query($con,$sql2))
{
    echo "<script>";
    echo"alert('Company Account Created Successfully!');";
    echo"window.location.href='http://localhost/alumni_econ/logins/login_company.html';";
    echo"</script>";
}
mysqli_close($con);
?>website