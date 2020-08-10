<?php

$con = mysqli_connect('localhost','root');

if($con){
    echo "connected successful";
}else{
    echo "not connected";

}

mysqli_select_db($con,'reservedata');

$guests = $_POST['radio'];
$section = $_POST['options'];
$date = $_POST['date'];
$time = $_POST['time'];

$query = "insert into reserveinfo (guests, section, date, time)
values ('$guests','$section','$date','$time')";


mysqli_query($con,$query);

header('location:index.php');


?>