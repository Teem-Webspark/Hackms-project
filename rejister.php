<?php
include "db.php";
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $role ="user";

    $sql = "insert into users(name,email,password,phone,address,role) values('$name','$email','$password','$phone', '$address','$role')";
    $result = mysqli_query($conn,$sql);
    if(!$result){
        echo "Error!:{$conn->error}";
    }
    else{
        echo"Registered succcessfully!";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>