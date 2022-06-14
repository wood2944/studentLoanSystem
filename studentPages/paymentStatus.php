<?php
session_start();
?>
<!DOCTYPE html>

<html>
<link rel='stylesheet' type='text/css' href='/~wood2944/CS471/css/style.css'>
  <head>
    <title>Pay off Loan Debt</title>
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
    echo "<h3 class='header'>Connection Successful, Paying loan...</h3> <br><br>";
    
    
    $loanID = $_POST['loanID'];
    
    $status = $_POST['paymentStatus'];
    
    
    
    $sql = "UPDATE loanApplication SET paymentStatus = '$status' WHERE loanID='$loanID';";
    
    if($result = mysqli_query($conn, $sql)){
        echo "Successfully Approved!";
    } else {
        echo "ERROR:" . $sql . mysqli_error($conn);
    }
    
    // Close connection
    mysqli_close($link);
    ?>
    <form method = "post" action = "">
        <br><br>
       <a href="studentLanding.php">Student Landing Page</a>
       <br><br>
       <a href="activeLoans.php">Back to active Loans</a>
    </form>
  </body>
</html>

