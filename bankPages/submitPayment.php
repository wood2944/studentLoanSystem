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
    
    $amount = $_POST['amount'];
    
    
    
    $sql = "UPDATE loanApplication SET amountPaid = amountPaid+'$amount' WHERE loanID='$loanID';";
    
    if($result = mysqli_query($conn, $sql)){
        echo "Successfully paid off $$amount!<br>";
    } else {
        echo "ERROR:" . $sql . mysqli_error($conn);
    }
    
    // Close connection
    mysqli_close($link);
    ?>
    <?php
        $servername = "127.0.0.1";
        $username = "wood2944";
        $password = "702042944";
        $dbName="wood2944";
        
        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbName);
        
        $result = mysqli_query($conn, $sql);

        if ($result) {
            $row = mysqli_fetch_array($result);

            $loanAmount = $row['loanAmount'];
            $amountPaid = $row['amountPaid'];

            if ($loanAmount >= $amountPaid ) {
                $sql2 = "UPDATE loanApplication SET paymentStatus = 'Completed' WHERE loanAmount=amountPaid ";

                $result2 = mysqli_query($conn, $sql2);
            }



            
        } else{
    echo " $sql " . mysqli_error($conn);
}
mysqli_close($link);

        ?>
    <form method = "post" action = "">
       <a href="bankLanding.php">Bank Landing Page</a>
    </form>
  </body>
</html>

