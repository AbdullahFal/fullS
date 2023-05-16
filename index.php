<?php 
include './inc/db.php';

$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$email = $_POST['email'];

if (isset($_POST['submit'])){
    $sql = "INSERT INTO users(firstName, lastName, email) 
            VALUES ('$firstName', '$lastName', '$email')";

    if(empty($firstName)){
        echo 'Please enter your first name';
    }elseif(empty($lastName)){
        echo 'Please enter your last name';
    }elseif(empty($email)){
        echo 'Please enter your email';
    }elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        echo 'Please enter correct email';
    }else{
        if(mysqli_query($conn, $sql)){
            header('Location: index.php');
        } else {
            echo 'Error: ' . mysqli_error($conn);
        }
    }
    
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pau</title>
</head>
<body>
    <form action="index.php" method="POST">
        <input type="text" name="firstName" id="firstName" placeholder="">
        <input type="text" name="lastName" id="lastName" placeholder="">
        <input type="text" name="email" id="email" placeholder="">
        <input type="submit" name="submit" value="send">
    </form>
</body>
</html>