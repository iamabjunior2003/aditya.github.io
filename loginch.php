<?php

    $conn = mysqli_connect("localhost","root","","logindata") or die("connection failed");
if (!empty($_POST['submit']))
{

    $username = $_POST['userid'];
    $password = $_POST['password'];

    $sql= "SELECT * FROM logindatainf WHERE USERID = '$username' AND PASSWORD = '$password' ";
    $result = mysqli_query($conn,$sql);
    $check = mysqli_fetch_array($result);

    if(isset($check))
    {
        echo 'Login successfully';
       echo '<a class="nav-link" href="Admission.html">Click here</a>';
    }
    else
    {
        echo 'Your Userid Or Password is incorrect Please try again';
        echo '<a class="nav-link" href="Login.html">Click here</a>'
    }
}
?>
