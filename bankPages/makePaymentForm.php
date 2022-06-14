<?php
session_start();
?>
<!DOCTYPE html>

<html>
<link rel='stylesheet' href='/~wood2944/CS471/css/style.css'>
<head>
    <title> Make Payments on Loans </title>
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
echo "<h3 class='header'>Connection Successful, Loans to pay</h3> <br><br>";



$uname = $_SESSION['username'];
$bank = $_SESSION['bankName'];



$sql = "SELECT * FROM loanApplication WHERE distributingBank = '$bank' AND `status` = 'Approved' AND paymentStatus = 'Awaiting Bank Payment';";



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
                echo "<th>Amount Paid</th>";
                echo "<th>Payment Status</th>";
            echo "</tr></b>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['username'] . "</td>";
                echo "<td>" . $row['distributingBank'] . "</td>";
                echo "<td>" . $row['dateApplied'] . "</td>";
                echo "<td>$" . $row['loanAmount'] . "</td>";
                echo "<td>" . $row['creditScore'] . "</td>";
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
        echo "There are no active loans through your bank that need to be paid!";
    }
} else{
    echo " $sql " . mysqli_error($conn);
}






// Close connection
mysqli_close($link);
?>

        <h2> Loan Payment Form </h2>
        <br>
        <form method='post' action='submitPayment.php'> 
            
        
            <h3>ID of Loan To pay on:</h3>
            <input type="number" name="loanID" /><br>



            <h3> How much is being paid this time? </h3>
                <input type="number" name="amount" /><br>
                <br><input type ="submit" name="updateLoan" value = "Pay Loan!" /><br>
        </form>

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

            if ($loanAmount === $amountPaid ) {
                $sql2 = "UPDATE loanApplication SET paymentStatus = 'Completed' WHERE loanAmount=amountPaid ";

                $result2 = mysqli_query($conn, $sql2);
            }



            
        } else{
    echo " $sql " . mysqli_error($conn);
}
mysqli_close($link);

        ?>



        <br><br>
        <form action="/~wood2944/CS471/logout.php" method="post" class="logout">
            <input type="submit" name="logout" value="Logout"/>
        </form>
        <br><br>
        <a href='bankLanding.php'>Bank Landing Page</a>

        
            


   </body>
</html>


