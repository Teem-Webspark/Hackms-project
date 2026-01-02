<?php
$conn= new mysqli('localhost','root','','onlineshopedb');
if(!$conn){
    echo"Error!: {$conn->connect_error}";
} 
?>