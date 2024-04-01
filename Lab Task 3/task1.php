<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Name</title>
</head>
<body>
    <form method="post">

        <fieldset>
            <legend>Name</legend>
            <input type="text" name="name" value="<?php
                if (isset($_POST["submit"])){
                    $name = $_POST["name"];
                    if (empty($name)) {
                        echo "Name cannot be empty";
                    } elseif (!preg_match('/^[a-zA-Z][a-zA-Z. -]+$/', $name)) {
                        echo "Invalid format";
                    } elseif (str_word_count($name) < 2) {
                        echo "Name must contain at least two words";
                    } else {
                        echo $name;
                    }
                } else {
                    echo ""; 
                }
            ?>"
            
            ><br>
            <input type="submit" name="submit">
            
        </fieldset>
    </form>
    <br>
    
</body>
</html>
