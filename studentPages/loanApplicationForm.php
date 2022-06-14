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
		<h2>Loan Application for <?php echo $_SESSION['username']; ?> </h2><br>
      <div class="application">
        <form method="post" action="loanApplication.php" name="application">
            
            
            <label>Desired Bank</label>
            <select name = "bank" required>
               <option value="" selected disabled>Select an Option</option>
               <option value="Chase">Chase Bank</option>
               <option value="Huntington">Huntington Bank</option>
               <option value="Capital One">Capital One Bank</option>
               <option value="American Express">American Express Bank</option>
            </select>
            <br><br>
            <div><label>Loan Amount:</label>
            <input type = "number" name = "amount" required >
          </div><br>
          <div><label>Credit Score:</label>
            <input type = "number" name = "crscore" required >
          </div><br>
            <input type = "hidden" name = "status" value="Applied" required >


            <input type="submit" value="Apply for Loan!" name="submit"/>
            <br><br>
            
        </form>
    </div>

    
        <form action="/~wood2944/CS471/logout.php" method="post" class="logout">
            <input type="submit" name="logout" value="Logout"/>
        </form>
        <br> <a href="studentLanding.php">Student Landing Page<a>

    
  </body>
</html>