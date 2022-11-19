<?php
$con = mysqli_connect("localhost","root","","project");
if(!$con)
{
    echo "Failed to connect to MYSQL: " . mysqli_connect_error();
}
$sname = $_POST['nm'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$dob = $_POST['dob'];
$pass = $_POST['pass'];
$enroll = $_POST['enroll'];
$year = $_POST['year'];
$sql1 = "INSERT INTO student_details VALUES (NULL,'$sname','$email','$phone','$dob')";
$sql2 = "INSERT INTO student_cred VALUES ('$email','$pass')";
$sql3 = "INSERT INTO student_dash VALUES (NULL,'$enroll','$year')";
if(mysqli_query($con,$sql1) && mysqli_query($con,$sql2) && mysqli_query($con,$sql3))
{
    echo "<script>";
    echo"alert('Student Account Created Successfully!');";
    echo"window.location.href='http://localhost/alumni_econ/logins/login_sa.html';";
    echo"</script>";
}
mysqli_close($con);
?>