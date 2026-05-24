<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Process</title>
</head>
<body>
    <?php
        session_start();
        $username = $_POST['username'];
        $password = $_POST['password'];

        if($username == 'DY' && $password == '106417716'){
            $_SESSION['user'] = $username;
            header('Location: welcome.php');
        } else {
            echo "Invalid login. <a href='login.html'>Try again</a>";
        }
    ?>
</body>
</html>