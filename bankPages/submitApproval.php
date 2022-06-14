<?php
session_start();
?>
<!DOCTYPE html>

<html>
<link rel='stylesheet' type='text/css' href='/~wood2944/CS471/css/style.css'>

  <head>
    <title>Submit Loan Approval</title>
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
echo "<h3 class='header'>Connection Successful, Records updating</h3> <br><br>";


$loanID = $_POST['loanID'];
$loanRate = $_POST["loanRate"];
$amountPaid =$_POST['amountPaid'];
$status = $_POST['status'];
$paymentStatus = $_POST['paymentStatus'];



$sql = "UPDATE loanApplication SET `status` = '$status', loanRate = '$loanRate', amountPaid='$amountPaid', paymentStatus='$paymentStatus' WHERE loanID='$loanID';";

if($result = mysqli_query($conn, $sql)){
    echo "Successfully added loan rate and updated the status!<br>";
} else {
    echo "ERROR:" . $sql . mysqli_error($conn);
}

// Close connection
mysqli_close($link);
?>
      <form method = "post" action = "">
         <a href="bankLanding.php">Bank Landing Page</a>
      </form>


   </body>
</html>

