<?php
$con = mysqli_connect("localhost","root","","project");
$aname = $_POST['nm'];
$email = $_POST['email'];
$pass = $_POST['pass'];
$desig = $_POST['desig'];
if(!$con)
{
    echo "Failed to connect to MYSQL: " . mysqli_connect_error();
}
$sql1 = "INSERT INTO admin_details VALUES (NULL , '$aname' , '$email')";
$sql2 = "INSERT INTO admin_cred VALUES ('$email','$pass')";
$sql3 = "INSERT INTO admin_dash VALUES (NULL, '$desig')";
if(mysqli_query($con,$sql1) && mysqli_query($con,$sql2) && mysqli_query($con,$sql3))
{
    echo "<script>";
    echo"alert('Admin Account Created Successfully!');";
    echo"window.location.href='http://localhost/alumni_econ/logins/login_admin.html';";
    echo"</script>";
}
mysqli_close($con);
?>