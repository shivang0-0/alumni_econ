<?php
$selected_radio = $_POST['sa'];
if($selected_radio == 's')
{
    echo "<script>";
    echo"window.location.href='http://localhost/alumni_econ/signups/signup_student.html';";
    echo "</script>";
}
else if ($selected_radio == 'a')
{
    echo "<script>";
    echo"window.location.href='http://localhost/alumni_econ/signups/signup_alumni.html';";
    echo "</script>";
}
else
{
    echo "<script>";
    echo"alert('Please select Student/Alumni');";
    echo"window.location.href=href='javascript:history.go(-1)';";
    echo"</script>";
}
?>