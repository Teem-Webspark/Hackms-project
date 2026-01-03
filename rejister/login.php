<?php
include("db.php");
session_start();

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Fetch user from database
    $sql = "SELECT * FROM users WHERE email='$email'";
    $result = mysqli_query($conn, $sql);

    if ($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);

        // Check password (plain text example)
        if ($row['password'] === $password) {

            // Set session variables
            $_SESSION['user_id'] = $row['id'];
            $_SESSION['user_name'] = $row['name'];
            $_SESSION['user_role'] = $row['role'];

            // Redirect to your desired link
            // Replace the URL below with your target page
            header("Location: ../navigation.html");
            exit();

        } else {
            $error = "Wrong password!";
        }
    } else {
        $error = "Email not found! Please sign up.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="login-container">
        <h2>Login</h2>

        <?php if (isset($error)) : ?>
            <p style="color: red; font-weight: bold;"><?php echo $error; ?></p>
        <?php endif; ?>

        <form id="loginform" method="POST">
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>

                <label for="loginPassword">Password:</label>
                <input type="password" id="loginPassword" name="password" required>
            </div>
            <button type="submit" name="submit">Login</button>
        </form>

        <p>Or register with social platform <a href="register.html">Register here</a></p>

        <footer class="footer-section">
            <div class="section-content">
                <a href="#" class="social-link"><i class="fa-brands fa-github"></i></a>
                <a href="#" class="social-link"><i class="fa-brands fa-facebook"></i></a>
                <a href="#" class="social-link"><i class="fa-brands fa-linkedin"></i></a> 
            </div>
        </footer>
    </div>
</body>
</html>