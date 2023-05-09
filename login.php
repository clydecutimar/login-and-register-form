<?php
session_start();
require_once('config.php');

if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) == 1) {
        $_SESSION['username'] = $username;
        header("Location: dashboard.php");
        exit();
    } else {
        echo "<div class='error-message'>Invalid username or password.</div>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login and Registration Form</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="form-container">
    <form id="login-form" method="post" action="login.php">
        <h2>Login</h2>
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
        <label for="password">Password:</label>
        <div class="password-wrapper">
            <input type="password" id="password" name="password" required>
            <button type="button" id="show-password">Show</button>
        </div>
        <input type="submit" value="Login">
    </form>
    <p class="link-lr">Don't have an account? <a href="register.php">Register</a></p>
</div>

<script>
    const passwordInput = document.getElementById('password');
    const showPasswordButton = document.getElementById('show-password');

    showPasswordButton.addEventListener('click', function () {
        if (passwordInput.type === 'password') {
            passwordInput.type = 'text';
            showPasswordButton.textContent = 'Hide';
        } else {
            passwordInput.type = 'password';
            showPasswordButton.textContent = 'Show';
        }
    });
</script>

</body>
</html>