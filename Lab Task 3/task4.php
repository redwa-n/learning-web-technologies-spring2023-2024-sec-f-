<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gender</title>
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
            <legend>Gender</legend>
            <?php
                $gender = isset($_POST['gender']) ? $_POST['gender'] : '';
                $error = isset($_POST['submit']) && empty($_POST['gender']) ? 'Please select one option.' : '';
            ?>
            <input type="radio" name="gender" id="male" value="Male" class="<?= isset($_POST['submit']) && empty($_POST['gender']) ? 'error-message' : ''; ?>" <?= $gender == 'Male' ? 'checked' : ''; ?>> <label for="male" class="<?= $gender == 'Male' ? 'selected' : 'unselected'; ?>">Male</label>
            <input type="radio" name="gender" id="female" value="Female" class="<?= isset($_POST['submit']) && empty($_POST['gender']) ? 'error-message' : ''; ?>" <?= $gender == 'Female' ? 'checked' : ''; ?>> <label for="female" class="<?= $gender == 'Female' ? 'selected' : 'unselected'; ?>">Female</label>
            <input type="radio" name="gender" id="other" value="Other" class="<?= isset($_POST['submit']) && empty($_POST['gender']) ? 'error-message' : ''; ?>" <?= $gender == 'Other' ? 'checked' : ''; ?>> <label for="other" class="<?= $gender == 'Other' ? 'selected' : 'unselected'; ?>">Other</label>
            <hr>
            
            <input type="submit" name="submit" value="Submit">        
        </fieldset>
        <?php if(isset($_POST['submit']) && empty($_POST['gender'])): ?>
            <p class="error-message">Please select one option.</p>
        <?php endif; ?>
    </form>
</body>
</html>
