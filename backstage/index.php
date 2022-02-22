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
   
     <?php
      if(isset($_GET['error']))
      {
        
         $error = $_GET['error'];

        
         if($error == 'wrong_credentials')
         {
           ?>
             <div class="message error">
               <h3 style=color:lightgray>wrong username/password</h3>
               <p style=color:lightgray>please try again</p>
             </div>
          <?php
         }
       };
     ?>

     


        <h2>login</h2>
        <form action="login_handler.php" method="POST"  class="login_form">
             <label for="email">Email</label><br/>
             <input type="email" id="email" name="email" placeholder="enter your email here...">

              <br/>

             <label for="password">Password</label><br/>
             <input type="password" id="password" name="password" placeholder="enter your password here...">

             <br/>

             <input type="submit" value="login">

        </form>
       <a href="register.php">create new account.</a>
     <div>
     <div class="color-bg"><div>
</body>
</html>