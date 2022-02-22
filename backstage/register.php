<?php

require 'db_connection.php';

$query = 'SELECT * FROM users';


$prepared = $conn->query($query);


$results = $prepared->fetchAll(PDO::FETCH_ASSOC);



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <h1><h1>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>backstage</title>
</head>

<body>
    <div class="container">
   
    
        <h2>register</h2>
        <form action="register_handler.php" method="POST"  class="login_form">

             <label for="name">name</label><br/>
             <input type="text" id="name" name="name" placeholder="enter your name here...">

              <br/>


             <label for="email">Email</label><br/>
             <input type="email" id="email" name="email" placeholder="enter your email here...">

              <br/>

             <label for="password">Password</label><br/>
             <input type="password" id="password" name="password" placeholder="enter your password here...">

             <br/>

             <input type="submit" value="create account">
            
        </form>
        <a href="index.php">go back to login.</a>
     <div>
     <div class="color-bg"><div>
</body>
</html>