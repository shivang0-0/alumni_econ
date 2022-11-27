<?php
$con = mysqli_connect("localhost","root","passwordisroot","project");
if(!$con)
{
    echo "Failed to connect to MYSQL: " . mysqli_connect_error();
}
$email = $_POST['email'];
$pass = $_POST['pass'];
$result = mysqli_query($con,"SELECT email,pass FROM admin_cred");
if(mysqli_num_rows($result)>0)
{
    while($row = mysqli_fetch_array($result))
    {
        if($email == $row['email'])
        {
            if($pass == $row['pass'])
                echo "<script type=\"text/javascript\">
                        window.location.href = \"http://localhost/alumni_econ/admindash/index.html\";
                        </script>";
            else
            {
                echo "<script type=\"text/javascript\">
                alert('Incorrect credentials');
                window.location.href = \"http://localhost/alumni_econ/logins/login_admin.html\";
                </script>";
            }
        }
    }
    echo "<script type=\"text/javascript\">
                alert('Incorrect credentials');
                window.location.href = \"http://localhost/alumni_econ/logins/login_admin.html\";
                </script>";
}
else
{
    echo "<script type=\"text/javascript\">
    alert('No records in database');
    </script>";
}
mysqli_close($con);
?>