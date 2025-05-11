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
    
        if (isset($_SESSION['user'])) {
            header("Location: dashboard.php");
            exit();
        }
    ?>
    
    <form method="POST" action="login.php">
        <div>
            <label for="username">Username</label>
            <input type="text" name="username" id="username" required>
        </div>
        <div >
            <label for="password">Password</label>
            <input type="password" name="password" id="password" required>
        </div>
            <button type="submit" >Login</button>
    </form>
    
    <?php
        if (isset($_GET['error'])) {
            echo "<p style='color:red;'>Username atau password salah!</p>";
        }
    ?>
</body>
</html>