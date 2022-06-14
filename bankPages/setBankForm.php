<?php 
session_start();
?>
<!DOCTYPE HTML>

<html>
	<link rel="stylesheet" type="text/css" href="student.css">

	<head>
		<title>Declare Bank Form</title>
	</head>
	<body>
		<h2>Bank Declaration For <?php echo $_SESSION['username']; ?> </h2><br>
      <div class="application">
        <form method="post" action="setBank.php" name="declaration">
            
            
            <label>Desired Bank</label>
            <select name = "bank" required>
               <option value="" selected disabled>Select an Option</option>
               <option value="Chase">Chase Bank</option>
               <option value="Huntington">Huntington Bank</option>
               <option value="Capital One">Capital One Bank</option>
               <option value="American Express">American Express Bank</option>
            </select>
            
            <input type="submit" value="Declare Bank" name="submit"/>
            <br><br>
            
        </form>
    </div>

    
    
    

    
  </body>
</html>