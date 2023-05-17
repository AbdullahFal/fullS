<?php
//ret = retrieve.
//for retrieving data from the DB
$ret = 'SELECT * FROM users';
$result = mysqli_query($conn, $ret);
//fetch to show the result as a mysql query.
$users = mysqli_fetch_all($result, MYSQLI_ASSOC);
