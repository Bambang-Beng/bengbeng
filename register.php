<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel=stylesheet href="style.css">
</head>
<body>
<div class="container">
<form action="register.php" method="post">
    <p style="font-size: 32px;">Register</p>
    <div class="form-group">
        <label for="username">Username</label>
        <input type="text" placeholder="username" name="username" class="form-control">
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" placeholder="Email" name="email" class="form-control">
    </div>
    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" placeholder="password" name="password" class="form-control">
    </div>
    <div class="form-group">
        <label for="confirm_password">Confirm Password</label>
        <input type="password" placeholder="confirm password" name="confirm_password" class="form-control">
    </div>
    <br>
    <div class="form-group">
        <button type="submit" name="register_btn" class="btn btn-primary">REGISTER</button>
    </div>
    <p>
        Sudah Punya Akun? <a href="login.php">Masuk</a>
    </p>
</body>
</html>