<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Student Home Page! - Student Loan System</title>
    <link rel="stylesheet" type="text/css" href="bank.css">
    <script src="bankScripts.js"></script>


    <head>
        <h1> Bank Landing Page for <?php echo $_SESSION['bankName'] ?></h1>
    </head>
   
    <body>
        <div class="buttons">    
            <div class="request">
                <input type="button" value="Loan Approval" onclick="loanApproval();"/>
                <input type="button" value="Make payments to College" onclick="paymentForm();" />
                <input type="button" value="Track Active Loans" onclick="viewLoans();" />
            </div>
        </div>


        <form action="/~wood2944/CS471/logout.php" method="post" class="logout">
            <input type="submit" name="logout" value="Logout"/>
        </form>

    </body>
</html>

