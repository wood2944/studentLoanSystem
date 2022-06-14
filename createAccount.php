<?php
session_start();
?>
<!DOCTYPE html>

<html>
<link rel='stylesheet' type='text/css' href='styles.css'>

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



$uname = $_POST["uname"];
$password = $_POST["password"];
$userType = $_POST["userType"];



$sql = "INSERT INTO userData VALUES "."(".rand(0,10000).",'$uname','$password','$userType', NULL)"  .";";

if($result = mysqli_query($conn, $sql)){
    echo "Successfully Created account!";
} else {
    echo "ERROR:" . $sql . mysqli_error($conn);
}

// Close connection
mysqli_close($link);
?>
      <form method = "post" action = "queryDatabase.php">
         <p><input type = "submit" name = "submit" value = "Query Database"/></p>
         <a href="index.html">Back to Login Screen</a>
      </form>


   </body>
</html>

