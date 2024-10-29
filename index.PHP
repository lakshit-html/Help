<?php
$server     ="localhost";
$username   ="root";
$password   ="";
$dbname     ="testfirst";

$con = mysqli_connect($server, $username, $password, $dbname);


if(!$con)
{
    echo "not connected";
}

// 
$name =$_POST['Name'];
$email =$_POST['Email'];
$message =$_POST['Message']

$sql = "INSERT INTO `test`(`name`, `email`, `message`) VALUES ('[name]','[email]','[messagae]')";

$result = mysqli_query($con , $sql);

if($result)
{
    echo "submitted";
}

else 
{
    echo "error";
}
