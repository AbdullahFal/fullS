<?php 
include './inc/db.php';
include './inc/form.php';

//ret = retrieve.
//for retrieving data from the DB
$ret = 'SELECT * FROM users';
$result = mysqli_query($conn, $ret);
//fetch to show the result as a mysql query.
$users = mysqli_fetch_all($result, MYSQLI_ASSOC);

echo '<pre>';
print_r($users);
echo '</pre>';

//always include at the end to close and reset(can include in seperate file)
mysqli_free_result($result);
mysqli_close($conn);
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