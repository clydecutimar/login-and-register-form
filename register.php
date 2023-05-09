<?php
session_start();
require_once('config.php');

if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "INSERT INTO user (username, password) VALUES ('$username', '$password')";
    $result = mysqli_query($conn, $query);

    if ($result) {
        $_SESSION['username'] = $username;
        header("Location: login.php");
        exit();
    } else {
        echo "Error: " . mysqli_error($conn);
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
		<form id="register-form" method="post" action="register.php">
			<h2>Register</h2>
			<label for="username">Username:</label>
			<input type="text" id="username" name="username" required>
			<label for="password">Password:</label>
            <div class="password-wrapper">
			<input type="password" id="password" name="password" required>
            <button type="button" id="show-password">Show</button>
        </div>
			<label for="confirm-password">Confirm Password:</label>
			<input type="password" id="confirm-password" name="confirm-password" required>
			<input type="submit" value="Register">
		</form>
        <p class="link-lr">Already have an account? <a href="login.php">Login</a></p>
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
