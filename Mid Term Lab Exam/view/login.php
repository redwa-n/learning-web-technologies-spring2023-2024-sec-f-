<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Provider Registration</title>
</head>
<body>
    <form method="post" action="../controller/signupCheck.php">
        <table cellspacing="10" cellpadding="0" align="center">
            <tr>
                <td align="right"><label for="firstName">First Name:</label></td>
                <td><input type="text" id="firstName" name="firstName" value="<?php echo isset($_POST['firstName']) ? $_POST['firstName'] : ''; ?>" required></td>
            </tr>
            <tr>
                <td align="right"><label for="lastName">Last Name:</label></td>
                <td><input type="text" id="lastName" name="lastName" value="<?php echo isset($_POST['lastName']) ? $_POST['lastName'] : ''; ?>" required></td>
            </tr>
            <tr>
                <td align="right"><label for="dob">Date of Birth:</label></td>
                <td><input type="date" id="dob" name="dob" value="<?php echo isset($_POST['dob']) ? $_POST['dob'] : ''; ?>" required></td>
            </tr>
            <tr>
                <td align="right"><label>Gender:</label></td>
                <td>
                    <input type="radio" id="male" name="gender" value="male" <?php if (isset($_POST['gender']) && $_POST['gender'] == 'male') echo 'checked'; ?>>
                    <label for="male">Male</label>
                    <input type="radio" id="female" name="gender" value="female" <?php if (isset($_POST['gender']) && $_POST['gender'] == 'female') echo 'checked'; ?>>
                    <label for="female">Female</label>
                </td>
            </tr>
            <tr>
                <td align="right"><label for="phone">Phone:</label></td>
                <td><input type="tel" id="phone" name="phone" value="<?php echo isset($_POST['phone']) ? $_POST['phone'] : ''; ?>" required></td>
            </tr>
            <tr>
                <td align="right"><label for="email">Email:</label></td>
                <td><input type="email" id="email" name="email" value="<?php echo isset($_POST['email']) ? $_POST['email'] : ''; ?>" required></td>
            </tr>
            <tr>
                <td align="right"><label for="password">Password:</label></td>
                <td><input type="password" id="password" name="password" required></td>
            </tr>
            <tr>
                <td align="right"><label for="confirmPassword">Confirm Password:</label></td>
                <td><input type="password" id="confirmPassword" name="confirmPassword" required></td>
            </tr>
            <tr>
                <td colspan="2" align="center"><input type="submit" value="Register"></td>
            </tr>
        </table>
    </form>
</body>
</html>
