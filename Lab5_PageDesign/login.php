<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - DERO'S IT</title>
</head>
<body>
<div style="text-align: center; font-weight: bold; font-size: larger;">DERO'S IT - Login</div>

<div style="background-color: #333; color: #fff; padding: 10px; position: fixed; top: 30px; left: 0; width: 100%; display: flex; justify-content: space-between; align-items: center;">
    <div>
        <a href="homepage.php" style="color: #fff; text-decoration: none; margin-right: 10px;">Home</a>
        <a href="#" style="color: red; text-decoration: none; margin-right: 10px;">Login</a>
        <a href="registration.php" style="color: #fff; text-decoration: none;">Registration</a>
    </div>
   
    <div>
       
    </div>
</div>

<div style="margin-top: 100px; text-align: center;">
    <form action="#" method="post">
        <label for="username" style="font-weight: bold;">User Name:</label>
        <input type="text" id="username" name="username"><br><br>
        
        <label for="password" style="font-weight: bold;">Password:</label>
        <input type="password" id="password" name="password"><br><br>
        
        <input type="checkbox" id="remember" name="remember">
        <label for="remember">Remember me</label><br><br>
        
        <input type="submit" value="Submit">
        <input type="button" value="Cancel"><br><br>
        
        <a href="forgetpass.php" style="text-decoration: none;">Forgot password?</a>
    </form>
</div>

<div style="background-color: #333; color: #fff; padding: 10px; position: fixed; bottom: 0; left: 0; width: 100%; text-align: center;">
    Copyright 2024 by Redwan
</div>
</body>
</html>
