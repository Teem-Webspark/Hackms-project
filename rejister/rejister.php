<?php
include "db.php";

if (isset($_POST['submit'])) {

    $name     = $_POST['username'];
    $email    = $_POST['email'];
    $password = $_POST['password'];
    $phone    = $_POST['phone'];
    $address  = $_POST['address'];
    $role     = "user";

    $sql = "INSERT INTO users (name, email, password, phone, address, role)
            VALUES ('$name', '$email', '$password', '$phone', '$address', '$role')";

    $result = mysqli_query($conn, $sql);

    if (!$result) {
        echo "Error: " . mysqli_error($conn);
    } else {
        echo "Registered successfully!";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<div class="container">
    <h1>Register</h1>

    <form method="POST" action="">

        <label>Username</label>
        <input type="text" name="username" required>

        <label>Email</label>
        <input type="email" name="email" required>

        <label>Phone</label>
        <input type="text" name="phone" required>

        <label>Password</label>
        <input type="password" name="password" required>

        <label>Confirm Password</label>
        <input type="password" name="confirm" required>

        <label>Address</label>
        <input type="text" name="address" required>

        <button type="submit" name="submit">Create Account</button>

    </form>

    <p>Already have an account? <a href="login.html">Login</a></p>
</div>

</body>
</html>
