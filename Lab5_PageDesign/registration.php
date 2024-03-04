<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration - DERO'S IT</title>
</head>
<body>
<div style="text-align: center; font-weight: bold; font-size: larger;">DERO'S IT - Registration</div>

<div style="background-color: #333; color: #fff; padding: 10px; position: fixed; top: 30px; left: 0; width: 100%; display: flex; justify-content: space-between; align-items: center;">
    <div>
        <a href="homepage.php" style="color: #fff; text-decoration: none; margin-right: 10px;">Home</a>
        <a href="login.php" style="color: #fff; text-decoration: none; margin-right: 10px;">Login</a>
        <a href="#" style="color: red; text-decoration: none;">Registration</a>
    </div>
   
    <div>
       
    </div>
</div>

<div style="margin-top: 100px; text-align: center;">
    <form action="#" method="post">
        <label for="name" style="font-weight: bold;">Name:</label>
        <input type="text" id="name" name="name"><br><br>
        
        <label for="email" style="font-weight: bold;">Email:</label>
        <input type="email" id="email" name="email"> <span style="color: red;">!</span><br><br>
        
        <label for="password" style="font-weight: bold;">Password:</label>
        <input type="password" id="password" name="password"><br><br>
        
        <label for="confirm_password" style="font-weight: bold;">Confirm Password:</label>
        <input type="password" id="confirm_password" name="confirm_password"><br><br>
        
        <label for="gender" style="font-weight: bold;">Gender:</label>
        <input type="radio" id="male" name="gender" value="male">
        <label for="male">Male</label>
        <input type="radio" id="female" name="gender" value="female">
        <label for="female">Female</label><br><br>
        
        <label for="dob" style="font-weight: bold;">Date of Birth:</label>
        <input type="date" id="dob" name="dob"><br><br>
        
        <input type="submit" value="Submit">
        <input type="reset" value="Reset">
    </form>
</div>

<div style="background-color: #333; color: #fff; padding: 10px; position: fixed; bottom: 0; left: 0; width: 100%; text-align: center;">
    Copyright 2024 by Redwan
</div>
</body>
</html>
