<?php 
session_start();
?>

<!DOCTYPE HTML>

<html>
  <link rel="stylesheet" type="text/css" href="student.css">

  <head>
    <title>Loan Application Form</title>
  </head>
  <body>

    <?php
    $servername = "127.0.0.1";
    $username = "wood2944";
    $password = "702042944";
    $dbName="wood2944";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbName);


    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    } 
    echo "<h3 class='header'>Connection Successful, Application sent.</h3> <br><br>"."$currentDate";

    

    $uname = $_SESSION['username'];
    $bank = $_POST['bank'];
    $currentDate = date('Y-m-d');
    $loanAmount = $_POST['amount'];
    $credit = $_POST['crscore'];
    $status = $_POST['status'];
    $rate = " ";


    
    
    $sql = "INSERT INTO loanApplication VALUES "."('$uname','$bank','$currentDate','$loanAmount','$credit','$status', '$rate', ". rand(0,1000) .",0 , '');";

    if($result = mysqli_query($conn, $sql)){
        echo "Thank you for your loan application ". $uname . "!";
    } else {
        echo "ERROR:" . $sql . mysqli_error($conn);
    }

    

    // Close connection
    mysqli_close($link);
  ?>

    <br>
    <a href='studentLanding.php'>Student Landing Page</a>

    
  </body>
</html>