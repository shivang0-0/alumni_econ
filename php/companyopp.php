<?php
$con = mysqli_connect("localhost","root","","project");
if(!$con)
{
    echo "Failed to connect to MYSQL: " . mysqli_connect_error();
}
$job_role = $_POST['job_role'];
$for_year = $_POST['for_year'];
$salary = $_POST['salary'];
$job_description = $_POST['job_description'];
$job_location = $_POST['job_location'];
$sql = "SELECT cid FROM company_details,temp_opp WHERE temp_opp.email=company_details.email";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_array($result);
$cid=$row["cid"];
$sql1 = "INSERT INTO company_opportunity VALUES ('$cid','$job_role','$for_year')";
$sql2 = "INSERT INTO job_details VALUES ('$job_role','$salary','$job_description','$job_location')";
if(mysqli_query($con,$sql1) && mysqli_query($con,$sql2))
{
    echo "<script>";
    echo"alert('Opportunity posted successfully!');";
    echo"window.location.href='http://localhost/alumni_econ/logins/login_company.html';";
    echo"</script>";
}
else
{
    echo "Internal Server Error";
}
$sql = "DROP TABLE temp_opp";
mysqli_query($con,$sql);
mysqli_close($con);
?>