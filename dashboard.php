<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hi, <?php echo $_SESSION['username']; ?> welcome to our page!</h1>
    <button onclick="logout()">Logout</button>

    <script type="text/javascript">
        function logout() {
            window.location.href = 'logout.php';
        }
    </script>
</body>
</html>