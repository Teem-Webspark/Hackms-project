<?php
$conn = new mysqli('localhost', 'root', '', 'library');

if(!$conn){
    echo"Error!: {$conn->connect_error}";
} 
?>
