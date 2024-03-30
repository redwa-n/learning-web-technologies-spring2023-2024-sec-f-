<?php
function validate($firstName, $lastName, $dob, $gender, $phone, $email, $password, $confirmPassword) {
    $errors = array();


 
    if (empty($dob)) {
        $errors[] = "Date of Birth is required";
    } elseif (!isValidDateOfBirth($dob)) {
        $errors[] = "Invalid Date of Birth format. Please enter in YYYY-MM-DD format";
    }


    if (empty($password)) {
        $errors[] = "Password is required";
    } elseif (strlen($password) < 8) {
        $errors[] = "Password must contain at least 8 characters";
    }

    if (empty($confirmPassword)) {
        $errors[] = "Confirm Password is required";
    } elseif ($password !== $confirmPassword) {
        $errors[] = "Passwords do not match";
    }
    if (empty($gender) || ($gender !== 'male' && $gender !== 'female')) {
        $errors[] = "Gender is required and must be either 'male' or 'female'";
    }

    if (empty($phone)) {
        $errors[] = "Phone Number is required";
    } elseif (!isValidPhoneNumber($phone)) {
        $errors[] = "Invalid phone number format. Please enter in ###-###-#### format";
    }
    if (empty($email)) {
        $errors[] = "Email is required";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email format";
    }
    if (empty($firstName) || empty($lastName)) {
        $errors[] = "First Name and Last Name are required";
    } else {

        if (str_word_count($firstName) < 2 || str_word_count($lastName) < 2) {
            $errors[] = "First Name and Last Name must contain at least two words";
        }

        if (!ctype_alpha($firstName) || !ctype_alpha($lastName) || strpos($firstName, '.') !== false || strpos($lastName, '.') !== false || strpos($firstName, '-') !== false || strpos($lastName, '-') !== false) {
            $errors[] = "First Name and Last Name can only contain letters, dots, and dashes";
        }
    }



    return $errors;
}
?>
