<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email</title>
</head>
<body>
    <form method="post">

        <fieldset>
            <legend>Email</legend>
            <input type="text" name="Email" value="<?php
                if (isset($_POST["submit"])){
                    $email = $_POST["Email"];
                    if (empty($email)) {
                        echo "Email cannot be empty";
                    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                        echo "Invalid email format";
                    } else {
                        echo "Your Email is: $email";
                    }
                }
            ?>" >
            <button title="exp: john@example.com">i</button>
            <hr><br>
            <input type="submit" name="submit">
            
        </fieldset>
    </form>
    <br>
</body>
</html>
