<?php 
    $conn= mysqli_connect('localhost','root','','medical');
    if(!$conn){
        echo "No Connection" . mysqli_connect_error();
    }
?>