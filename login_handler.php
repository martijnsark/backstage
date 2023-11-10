<?php

    if(isset($_POST['email']) && isset($_POST['password']))

    {
    require 'db_connection.php';


    $email = $_POST['email'];
    $password = $_POST['password'];



    $prepared = $conn->prepare("SELECT * FROM users WHERE email=:email AND password=:password");


    $prepared->execute([
    'email' => $email, 
    'password' => sha1($password)
    ]);




    $results = $prepared->fetchAll(PDO::FETCH_ASSOC);

  
    if(!empty($results))
    {
        header( "location: /backstage/martijn.html" );

    } else{
       header( "location: /backstage?error=wrong_credentials" );
    }

 }
 else {
    header( "location: /backstage" );
 }

?>




    








