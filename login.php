<?php

$con = mysqli_connect('localhost','root');

if($con){
    echo "connected successful";
}else{
    echo "not connected";

}
?>