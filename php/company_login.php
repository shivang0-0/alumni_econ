<?php
$con = mysqli_connect("localhost","root","","project");
if(!$con)
{
    echo "Failed to connect to MYSQL: " . mysqli_connect_error();
}
$email = $_POST['email'];
$pass = $_POST['pass'];
$sql = "CREATE TABLE temp_opp(email VARCHAR(50))";
mysqli_query($con,$sql);
$sql = "INSERT INTO temp_opp VALUES('$email')";
mysqli_query($con,$sql);
$result = mysqli_query($con,"SELECT email,pass FROM company_cred");
if(mysqli_num_rows($result)>0)
{
    while($row = mysqli_fetch_array($result))
    {
        if($email == $row['email'])
        {
            if($pass == $row['pass'])
                echo "<script type=\"text/javascript\">
                        window.location.href = \"http://localhost/alumni_econ/companydash/index.php\";
                        </script>";
            else
            {
                echo "<script type=\"text/javascript\">
                alert('Incorrect credentials');
                window.location.href = \"http://localhost/alumni_econ/logins/login_company.html\";
                </script>";
            }
        }
    }
    echo "<script type=\"text/javascript\">
                alert('Incorrect credentials');
                window.location.href = \"http://localhost/alumni_econ/logins/login_company.html\";
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