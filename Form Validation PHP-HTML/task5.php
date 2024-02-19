<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Degree</title>
    <style>
        .selected {
            color: green;
        }
        .unselected {
            color: black;
        }
        .error-message {
            color: red;
        }
    </style>
</head>
<body>
    <form action="" method="post">
        <fieldset>
            <legend>Degree</legend>
            <?php
                $degrees = ['SSC', 'HSC', 'BSc', 'MSc'];
                $error = '';

                if(isset($_POST['submit'])){
                    $selectedDegrees = isset($_POST['degrees']) ? $_POST['degrees'] : [];

                    // Validation: At least two options must be selected
                    if(count($selectedDegrees) < 2) {
                        $error = 'Please select at least two options.';
                    }
                }

                foreach($degrees as $degree):
            ?>
            <input type="checkbox" name="degrees[]" value="<?php echo $degree; ?>" class="<?php echo isset($_POST['submit']) && !in_array($degree, $selectedDegrees) ? 'error-message' : ''; ?>" <?php if(in_array($degree, $selectedDegrees)) echo 'checked'; ?>> <label for="<?php echo $degree; ?>" class="<?php echo in_array($degree, $selectedDegrees) ? 'selected' : 'unselected'; ?>"><?php echo $degree; ?></label>
            <?php endforeach; ?>
            <hr>
            <input type="submit" name="submit" value="Submit">
        </fieldset>
        <?php if(isset($_POST['submit']) && $error): ?>
            <p class="error-message"><?php echo $error; ?></p>
        <?php endif; ?>
    </form>
</body>
</html>
