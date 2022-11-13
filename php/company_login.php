<?php
$con = mysqli_connect("localhost","root","","project");
if(!$con)
{
    echo "Failed to connect to MYSQL: " . mysqli_connect_error();
}
$email = $_POST['email'];
$pass = $_POST['pass'];
$result = mysqli_query($con,"SELECT email,pass FROM company_credentials");
if(mysqli_num_rows($result)>0)
{
    while($row = mysqli_fetch_array($result))
    {
        if($email == $row['email'])
        {
            if($pass == $row['pass'])
                echo "Correct credentials";
            else
                echo "Incorrect credentials";
        }
    }
}
else
{
    echo "No records in db";
}
mysqli_close($con);
?>