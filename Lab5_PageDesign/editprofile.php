<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile - DERO'S IT</title>
</head>
<body>
<div style="text-align: center; font-weight: bold; font-size: larger;">DERO'S IT - Edit Profile</div>

<div style="background-color: #333; color: #fff; padding: 10px; position: fixed; top: 30px; left: 0; width: 100%; display: flex; justify-content: space-between; align-items: center;">
    <div>
        <a href="profile.php" style="color: #fff; text-decoration: none; margin-right: 10px;">Dashboard</a>
        <a href="#" style="color: red; text-decoration: none; margin-right: 10px;">Edit Profile</a>
    </div>
   
    <div>
       
    </div>
</div>

<div style="margin-top: 100px; margin-left: 20%; margin-right: 20%;">
    <form action="#" method="post">
        <table style="width: 100%;">
            <tr>
                <td style="text-align: right; font-weight: bold;">Name:</td>
                <td><input type="text" name="name" value="Kazi Redwan"></td>
            </tr>
            <tr>
                <td style="text-align: right; font-weight: bold;">Email:</td>
                <td><input type="email" name="email" value="redwan.stu@gmail.com"></td>
            </tr>
            <tr>
                <td style="text-align: right; font-weight: bold;">Gender:</td>
                <td>
                    <select name="gender">
                        <option value="male" selected>Male</option>
                        <option value="female">Female</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td style="text-align: right; font-weight: bold;">Date of Birth:</td>
                <td><input type="date" name="dob" value="2002-10-31"></td>
            </tr>
        </table>
        
        <div style="text-align: center; margin-top: 20px;">
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
