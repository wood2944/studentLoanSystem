<?php
session_start();
?>
<!DOCTYPE html>

<html>
<link rel='stylesheet' type='text/css' href='css/styles.css'>

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
echo "<h3 class='header'>Connection Successful, Executing Query</h3> <br><br>";



$bank = $_POST["bank"];

$uname = $_SESSION['username'];


$sql = "UPDATE userData SET bankName = '$bank' WHERE username='$uname';";

if($result = mysqli_query($conn, $sql)){
    echo "Successfully Added Bank name!";
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

