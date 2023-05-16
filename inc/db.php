<?php 
$conn = mysqli_connect('localhost', 'root', 'root', 'fullS');

if(!$conn){ //making sure the connection is valid
    echo 'Error: ' . mysqli_connect_error();
}
