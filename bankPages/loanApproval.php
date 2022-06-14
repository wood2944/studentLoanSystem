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
$bank = $_SESSION['bankName'];



$sql = "SELECT * FROM loanApplication WHERE (distributingBank = '$bank' AND `status` = 'Applied');";



if($result = mysqli_query($conn, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table class='query'>";
            echo "<tr><b>";
                echo "<th>Username</th>";
                echo "<th>Distributing Bank</th>";
                echo "<th>Applied Date</th>";
                echo "<th>Loan Amount</th>";
                echo "<th>Credit Score</th>";
                echo "<th>Approval Status</th>";
                echo "<th>Loan Rate</th>";
                echo "<th>Loan ID</th>";
            echo "</tr></b>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['username'] . "</td>";
                echo "<td>" . $row['distributingBank'] . "</td>";
                echo "<td>" . $row['dateApplied'] . "</td>";
                echo "<td>" . $row['loanAmount'] . "</td>";
                echo "<td>" . $row['creditScore'] . "</td>";
                echo "<td>" . $row['status'] . "</td>";
                echo "<td>" . $row['loanRate'] . "</td>";
                echo "<td>" . $row['loanID'] . "</td>";

                
            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "There are no active loans or applications associated with your account!";
    }
} else{
    echo " $sql " . mysqli_error($conn);
}






// Close connection
mysqli_close($link);
?>

        <h2> Edit Loan Status </h2>
        <br>
        <form method='post' action='submitApproval.php'> 
            
        
            <h3>ID of Loan To edit:</h3>
            <input type="number" name="loanID" /><br>



            <h3> Fields Available to Edit </h3>
                <label class="creation">Loan Rate: </label><br>
                <input type="number" name="loanRate" /><br>
                <label class="creation">Loan Status: </label><br>
                <select name = "status"  required>
                    <option value="" selected disabled>Select an Option</option>
                    <option value="Approved">Approved</option>
                    <option value="Denied">Denied</option>
                </select>
                <input type='hidden' name='amountPaid' value='0' />
                <input type='hidden' name='paymentStatus' value='Awaiting Student Approval'/>
                <input type ="submit" name="updateLoan" value = "Update Loan!" />

        </form>




        <br><br>
        <form action="/~wood2944/CS471/logout.php" method="post" class="logout">
            <input type="submit" name="logout" value="Logout"/>
        </form>
        <br><br>
        <a href='bankLanding.php'>Bank Landing Page</a>

        
            


   </body>
</html>


