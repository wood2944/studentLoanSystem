<?php
session_start();
?>
<!DOCTYPE html>

<html>
<link rel='stylesheet' href='css/style.css'>

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



$sql = "SELECT * FROM userData WHERE username = '$uname' AND password = '$password';";



if($result = mysqli_query($conn, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table class='query'>";
            echo "<tr>";
                echo "<th>ID</th>";
                echo "<th>Username</th>";
                echo "<th>Password</th>";
                echo "<th>User Type</th>";
                
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['username'] . "</td>";
                echo "<td>" . $row['password'] . "</td>";
                echo "<td>" . $row['userType'] . "</td>";


                $_SESSION['id'] = $row['id'];
                $_SESSION['username'] = $row['username'];
                $_SESSION['userType'] = $row['userType'];
                $_SESSION['bankName'] = $row['bankName'];
            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo " $sql " . mysqli_error($conn);
}



if ($_SESSION['userType'] === 'Bank') {

    echo "<h1> Hello Bank Manager! </h1>";

    echo "<a href='bankPages/bankLanding.php' >Bank Landing Page</a>";

    if ($_SESSION['bankName']===NULL) {
        echo "<br><br><a href='bankPages/setBankForm.php' >Set Bank</a>";
    }
   
} else if ($_SESSION['userType'] === 'Student') {

    echo "<h1> Hello Student! </h1>";

    echo "<a href='studentPages/studentLanding.php' >Student Landing Page</a>";

} 
else if ($_SESSION['userType'] === 'College') {
    echo "<h1> Hello University! </h1>";

    echo "<a href='universityPages/universityLanding.php'>University Landing Page</a>";

} else {
    echo "No user associated with those credentials.";
}


// Close connection
mysqli_close($link);
?>
        <br><br>
        <form action="logout.php" method="post" class="logout">
            <input type="submit" name="logout" value="Logout"/>
        </form>

      


   </body>
</html>


