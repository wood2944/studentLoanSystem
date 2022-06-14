<?php
session_start();
?>
<!DOCTYPE html>

<html>
<link rel='stylesheet' href='/~wood2944/CS471/css/style.css'>
<head>
    <title> View Active Loans </title>
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
echo "<h3 class='header'>Connection Successful, Executing Query</h3> <br><br>";



$uname = $_SESSION['username'];



$sql = "SELECT * FROM loanApplication WHERE username = '$uname' AND `status` = 'Approved' AND paymentStatus = 'Awaiting Student Approval';";



if($result = mysqli_query($conn, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table class='query'>";
            echo "<tr><b>";
                echo "<th>Username</th>";
                echo "<th>Distributing Bank</th>";
                echo "<th>Applied Date</th>";
                echo "<th>Loan Amount</th>";
                echo "<th>Approval Status</th>";
                echo "<th>Loan Rate</th>";
                echo "<th>Loan ID</th>";
                echo "<th>Amount Paid</th>";
                echo "<th>Payment Status</th>";
            echo "</tr></b>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['username'] . "</td>";
                echo "<td>" . $row['distributingBank'] . "</td>";
                echo "<td>" . $row['dateApplied'] . "</td>";
                echo "<td>$" . $row['loanAmount'] . "</td>";
                echo "<td>" . $row['status'] . "</td>";
                echo "<td>" . $row['loanRate'] . "%</td>";
                echo "<td>" . $row['loanID'] . "</td>";
                echo "<td>$" . $row['amountPaid'] . "</td>";
                echo "<td>" . $row['paymentStatus'] . "</td>";

                
            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "There are no approved loans associated with your account!";
    }
} else{
    echo " $sql " . mysqli_error($conn);
}






// Close connection
mysqli_close($link);
?>

        <form action="/~wood2944/CS471/logout.php" method="post" class="logout">
            <input type="submit" name="logout" value="Logout"/>
        </form>
        <br><br>


        <form action="paymentStatus.php" method="post">
            <h4> ID of Loan To approve: </h4><br>
            <input type="number" name="loanID" /><br>
            <input type="hidden" name="paymentStatus" value="Approved by Student" />
            <input type="submit" name="updateStatus" value ="Approve Loan!" />
        </form><br><br>


        <a href='studentLanding.php'>Student Landing Page</a>
            


   </body>
</html>


