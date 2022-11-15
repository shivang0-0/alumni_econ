<?php
$selected_radio = $_POST['sa'];
if($selected_radio == 's')
{
    $con = mysqli_connect("localhost","root","","project");
    if(!$con)
    {
        echo "Failed to connect to MYSQL: " . mysqli_connect_error();
    }
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $result = mysqli_query($con,"SELECT email,pass FROM student_cred");
    if(mysqli_num_rows($result)>0)
    {
        while($row = mysqli_fetch_array($result))
        {
            if($email == $row['email'])
            {
                if($pass == $row['pass'])
                        echo "<script type=\"text/javascript\">
                        window.location.href = \"http://localhost/alumni_econ/studentdash/index.html\";
                        </script>";
                else
                {
                    echo "<script type=\"text/javascript\">
                    alert('Incorrect credentials');
                    window.location.href = \"http://localhost/alumni_econ/logins/login_sa.html\";
                    </script>";
                }
            }
            else
            {
                echo "<script type=\"text/javascript\">
                alert('Incorrect credentials');
                window.location.href = \"http://localhost/alumni_econ/logins/login_sa.html\";
                </script>";
            }
        }
    }
    else
    {
        echo "<script type=\"text/javascript\">
        alert('No records in database');
        </script>";
    }
    mysqli_close($con);
}
else if ($selected_radio == 'a')
{
    $con = mysqli_connect("localhost","root","","project");
    if(!$con)
    {
        echo "Failed to connect to MYSQL: " . mysqli_connect_error();
    }
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $result = mysqli_query($con,"SELECT email,pass FROM alumni_cred");
    if(mysqli_num_rows($result)>0)
    {
        while($row = mysqli_fetch_array($result))
        {
            if($email == $row['email'])
            {
                if($pass == $row['pass'])
                        echo "<script type=\"text/javascript\">
                        window.location.href = \"http://localhost/alumni_econ/alumnidash/index.html\";
                        </script>";
                else
                {
                    echo "<script type=\"text/javascript\">
                    alert('Incorrect credentials');
                    window.location.href = \"http://localhost/alumni_econ/logins/login_sa.html\";
                    </script>";
                }
            }
            else
            {
                echo "<script type=\"text/javascript\">
                alert('Incorrect credentials');
                window.location.href = \"http://localhost/alumni_econ/logins/login_sa.html\";
                </script>";
            }
        }
    }
    else
    {
        echo "<script type=\"text/javascript\">
        alert('No records in database');
        </script>";
    }
    mysqli_close($con);
}
else
{
    echo "<script>";
    echo"alert('Please select Student/Alumni');";
    echo"window.location.href=href='javascript:history.go(-1)';";
    echo"</script>";
}
