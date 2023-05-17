<?php

$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$email = $_POST['email'];

// saving errors here to display them in the desired position.
$errors = [
    'firstNameError' => '',
    'lastNameError' => '',
    'emailError' => ''
];

if (isset($_POST['submit'])){

    //first name validation
    if(empty($firstName)){
        $errors['firstNameError'] = '**Please enter your first name';
    }
    //last name validation
    if(empty($lastName)){
        $errors['lastNameError'] = '**Please enter your last name';
    }
    //email validation for empty email field or incorrect email
    if(empty($email)){
        $errors['emailError'] = '**Please enter your email';
    }
    elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $errors['emailError'] = '**Please enter correct email';
    }

    //validating no errors
    if(!array_filter($errors)){
        
        $firstName = mysqli_real_escape_string($conn, $_POST['firstName']);
        $lastName = mysqli_real_escape_string($conn, $_POST['lastName']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        
        $sql = "INSERT INTO users(firstName, lastName, email) 
                    VALUES ('$firstName', '$lastName', '$email')";

        if(mysqli_query($conn, $sql)){
            header('Location: ' . $_SERVER['PHP_SELF']);
        } else {
            echo 'Error: ' . mysqli_error($conn);
        }
    }
}