<?php
    require "includes/classes/Header.php";

    $header = new Header("Lectures","lectures.css");
    $header->output();
?>

<body>
    <?php 
        require "includes/config.php"; 
        include("includes/components/navbar.php");

        // Redirect user if not logged in
        if(!isset($_SESSION["userLoggedInName"])){
            header("Location: homepage.php");
        }
    ?>

    <?php
      $username = $_SESSION['userLoggedInName'];
      $result = mysqli_query($con, "SELECT * FROM users WHERE username = '$username'");
      $userId = mysqli_fetch_assoc($result)['id'];
      $courseId = $_GET['id'];

      
       mysqli_query($con,"DELETE FROM enrolled WHERE userid = '$userId' and courseid='$courseId'");

      echo "<h>Succefully Deleted</h>";



     ?>