<?php
//connecting database to backend code index
$conn = mysqli_connect("localhost", "root", "", "conman");
//for displaying error message
//.mysqli_connect_error() inbuilt function to display error
if (!$conn){
    die("Connection Failed: ".mysqli_connect_error());
    echo "fail";
}


 ?>
