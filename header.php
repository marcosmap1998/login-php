<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans+Narrow&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>

    <header>
        <nav class="nav-header">
            <a href="index.php" class="header-logo">
                <img src="img/logo-hor.png" alt="">
            </a>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="#">Portfolio</a></li>
                <li><a href="#">About me</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </nav>
        <div class="header-login">
            <form action="includes/login.inc.php" method="post" class="form1">
                <input type="text" name="mailuid" placeholder="Email/Username..." autofocus>
                <input type="password" name="pwd" placeholder="Password...">
                <button type="submit" name="login-submit" style="cursor:pointer">Login</button>
            </form>
            <a href="singup.php">Singup</a>
            <form action="includes/login.inc.php" method="post">
                <button type="submit" name="logout-submit" style="cursor:pointer">Logout</button>
            </form>
        </div>
    </header>