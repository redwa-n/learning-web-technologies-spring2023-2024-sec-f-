<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Password - DERO'S IT</title>
</head>
<body>
<div style="text-align: center; font-weight: bold; font-size: larger;">DERO'S IT - Change Password</div>

<div style="background-color: #333; color: #fff; padding: 10px; position: fixed; top: 30px; left: 0; width: 100%; display: flex; justify-content: space-between; align-items: center;">
    <div>
        <a href="profile.php" style="color: #fff; text-decoration: none; margin-right: 10px;">Dashboard</a>
        <a href="#" style="color: red; text-decoration: none; margin-right: 10px;">Change Password</a>
    </div>
   
    <div>
       
    </div>
</div>

<div style="margin-top: 100px; margin-left: 20%; margin-right: 20%; text-align: center;">
    <form action="#" method="post">
        <div>
            <label for="currentPassword">Current Password:</label><br>
            <input type="password" id="currentPassword" name="currentPassword"><br>
        </div>
        <div>
            <label for="newPassword" style="color: green;">New Password:</label><br>
            <input type="password" id="newPassword" name="newPassword"><br>
        </div>
        <div>
            <label for="confirmPassword" style="color: red;">Retype New Password:</label><br>
            <input type="password" id="confirmPassword" name="confirmPassword"><br>
        </div>
        <div style="margin-top: 20px;">
            <input type="submit" value="Submit">
            <input type="reset" value="Reset">
        </div>
    </form>
</div>

<div style="background-color: #333; color: #fff; padding: 10px; position: fixed; bottom: 0; left: 0; width: 100%; text-align: center;">
    Copyright 2024 by Redwan
</div>
</body>
</html>
