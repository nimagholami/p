<?php
$connection = mysqli_connect('localhost','root','','demo');
if(!$connection){
    echo "Failed to connect database" . die(mysqli_error($connection));
}
$dbselect = mysqli_select_db($connection, "demo");
if(!$dbselect){
    echo "Failed to select database" .die(mysqli_error($connection));
}else{
    echo "successful...";
}
?>