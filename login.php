<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
<form action="login.php" method="post">
    <p style="font-size: 32px;">LOGIN</p>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" placeholder="Email" name="email" class=".login-email">
    </div>
    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" placeholder="password" name="password" class=".login-email">
    </div>
    <br>
    <div class="form-group">
        <button type="submit" name="register_btn" class="btn btn-primary">LOGIN</button>
    </div>
    <p>
        Belum Punya Akun? <a href="register.php">Daftar</a>
    </p>
</body>
</html>