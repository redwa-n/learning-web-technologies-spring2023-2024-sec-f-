<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DateOfBirth</title>
    <style>
        .valid {
            color: green;
        }
        .invalid {
            color: red;
        }
    </style>
</head>
<body>
    <form method="post">
        <fieldset>
            <legend>Date of Birth</legend>
            DD &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;MM &nbsp; &nbsp; &nbsp;YYYY <br>
            <input type="text" size="2px" name="day" class="<?php
                if (isset($_POST["submit"])) {
                    $day = $_POST["day"];
                    $month = $_POST["month"];
                    $year = $_POST["year"];

                    if (empty($day) || empty($month) || empty($year) || !ctype_digit($day) || !ctype_digit($month) || !ctype_digit($year) || !checkdate((int)$month, (int)$day, (int)$year) || ((int)$year < 1953 || (int)$year > 1998) || ((int)$month < 1 || (int)$month > 12) || ((int)$day < 1 || (int)$day > 31)) {
                        echo "invalid";
                    } else {
                        echo "valid";
                    }
                }
            ?>" value="<?php
                if (isset($_POST["submit"])) {
                    $day = $_POST["day"];
                    $month = $_POST["month"];
                    $year = $_POST["year"];

                    if (empty($day) || empty($month) || empty($year)) {
                        echo "Date of birth cannot be empty";
                    } elseif (!ctype_digit($day) || !ctype_digit($month) || !ctype_digit($year)) {
                        echo "Date of birth must contain valid numbers";
                    } elseif (!checkdate((int)$month, (int)$day, (int)$year)) {
                        echo "Invalid date";
                    } elseif ((int)$year < 1953 || (int)$year > 1998) {
                        echo "Year must be between 1953 and 1998";
                    } elseif ((int)$month < 1 || (int)$month > 12) {
                        echo "Month must be between 1 and 12";
                    } elseif ((int)$day < 1 || (int)$day > 31) {
                        echo "Day must be between 1 and 31";
                    } else {
                        echo "$day/$month/$year";
                    }
                }
            ?>"><input type="text" size="2px" name="month" value="<?php
                if (isset($_POST["submit"])) { echo $_POST["month"]; } ?>"><input type="text" size="4px" name="year" value="<?php
                if (isset($_POST["submit"])) { echo $_POST["year"]; } ?>">
            <hr>
            <input type="submit" name="submit">
        </fieldset>
    </form>
</body>
</html>
