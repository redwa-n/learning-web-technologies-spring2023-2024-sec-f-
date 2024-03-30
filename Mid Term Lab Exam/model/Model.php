<?php
class Model {
    public function validate($formData) {
        $errors = array();

        // Validate First Name
        if (empty($formData['firstName'])) {
            $errors['firstName'] = "First Name is required";
        }

        // Validate Last Name
        if (empty($formData['lastName'])) {
            $errors['lastName'] = "Last Name is required";
        }

        // Validate Date of Birth
        if (empty($formData['dob'])) {
            $errors['dob'] = "Date of Birth is required";
        }

        // Validate Gender
        if (empty($formData['gender'])) {
            $errors['gender'] = "Gender is required";
        }

        // Validate Phone Number
        if (empty($formData['phone'])) {
            $errors['phone'] = "Phone Number is required";
        }

        // Validate Email
        if (empty($formData['email'])) {
            $errors['email'] = "Email is required";
        }

        // Validate Password
        if (empty($formData['password'])) {
            $errors['password'] = "Password is required";
        }

        // Validate Confirm Password
        if (empty($formData['confirmPassword'])) {
            $errors['confirmPassword'] = "Confirm Password is required";
        }

        return $errors;
    }
}
?>
