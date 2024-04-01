<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blood Group</title>
    <style>
        .selected {
            color: green;
        }
        .unselected {
            color: red; /* Changed color to red for unselected options */
        }
        .error-message {
            color: red;
        }
    </style>
</head>
<body>
    <form action="" method="post">
        <fieldset>
            <legend>Blood Group</legend>
            <select name="group" id="" class="<?php echo isset($_POST['submit']) && empty($group) ? 'error-message' : ''; ?>">
                <option value="" disabled selected>Select Blood Group</option> <!-- Added empty default option -->
                <option value="A+" <?php if($group=='A+') echo 'selected'; ?>>A+</option>
                <option value="A-" <?php if($group=='A-') echo 'selected'; ?>>A-</option>
                <option value="AB+" <?php if($group=='AB+') echo 'selected'; ?>>AB+</option>
                <option value="B+" <?php if($group=='B+') echo 'selected'; ?>>B+</option>
                <option value="B-" <?php if($group=='B-') echo 'selected'; ?>>B-</option>
            </select>
            <hr>
            <input type="submit" value="Submit" name="submit">
        </fieldset>
        <?php if(isset($_POST['submit']) && $error): ?>
            <p class="error-message"><?php echo $error; ?></p>
        <?php endif; ?>
    </form>
</body>
</html>
