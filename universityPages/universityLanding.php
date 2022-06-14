<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>College Home Page! - Student Loan System</title>
    <link rel="stylesheet" type="text/css" href="university.css">
    <script src="universityScripts.js"></script>


    <head>
        <h1> University Landing Page </h1>
    </head>
   
    <body>
        <div class="buttons">    
            <div class="request">
                <input type="button" value="Track All Loans" onclick="trackAllLoans();"/>
                <input type="button" value="Request Payment" onclick="requestPayment();" />
            </div>
        </div>

                

        <form action="/~wood2944/CS471/logout.php" method="post" class="logout">
            <input type="submit" name="logout" value="Logout"/>
        </form>

    </body>
</html>

