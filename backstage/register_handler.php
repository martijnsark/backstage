<?php

    // Check if email and pasword post variables are set
    if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['password']))
    {
        // Load database connection
        require 'db_connection.php';
        
        // Save variables
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = sha1($_POST['password']);

        // Insert new user into the database
        $stmt = $conn->prepare("INSERT INTO users (name, email, password)
        VALUES (:name, :email, :password)");
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', $password);
      
        // insert a row
        $stmt->execute();

        header ("Location: /backstage/index.php?register=success");
    } 
    // If not; redirect to the homepage
    else {

        header( "Location: /backstage" );

    }

?>