<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Design by foolishdeveloper.com -->
    <title>Todo List</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <!--Stylesheet-->
    <link rel="stylesheet" href="<?php echo __DIR__ . '/../../../resources/css/app.css' ?>">
</head>
<body>
<div class="background">
    <div class="shape"></div>
    <div class="shape"></div>
</div>
<form method="post" action="/login">
    <h3>Login Here</h3>

    <label for="username">Username</label>
    <input type="text" placeholder="Email or Phone" id="username">

    <label for="password">Password</label>
    <input type="password" placeholder="Password" id="password">
    <label for="remember_me" style="display: flex; align-items: center; margin-top: 20px; height: 20px">
        <input type="checkbox" name="remember_me" id="remember_me" style="width: 20px;">
        <p>Remember Me</p>
    </label>
    <button>Log In</button>
</form>
</body>
</html>
