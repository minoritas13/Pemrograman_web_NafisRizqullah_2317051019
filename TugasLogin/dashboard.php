<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        session_start();
        if (!isset($_SESSION['user'])) {
            header("Location: index.php");
            exit();
        }
    ?>
    hai
    <a href="logout.php">Logout</a>
</body>
</html>