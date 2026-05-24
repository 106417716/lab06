<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
</head>
<body>
    <h1>Welcome</h1>
    <?php
        session_start();
        if(isset($_SESSION['user'])){
            echo "Welcome, " .$_SESSION['user'];
        } else {
            header(Location: login.html);
        }
    ?>
</body>
</html>