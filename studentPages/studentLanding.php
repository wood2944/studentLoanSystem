<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Student Home Page! - Student Loan System</title>
    <link rel="stylesheet" type="text/css" href="student.css">
    <script src="studentScripts.js"></script>
    <?php
    $uname = $_SESSION['username'];
    ?>

    <head>
        <h1> Student Landing Page </h1>
        <h3> Welcome <?php echo "$uname"?> </h3>
        <br>
    </head>
   
    <body>
        <div class="buttons">    
            <div class="request">
                <input type="button" value="Loan Application" onclick="loanApplication();" />
                <input type="button" value="View Active Loans" onclick="viewLoans();" />
                <input type="button" value="Approve Payment for Approved Loans" onclick="viewApproved();" />
            </div>
        </div>


        <!--Advertising Available banks Should go below the Section to go to different pages-->
        <h2> Banks Available For Loans! </h2>
        <div class="banks">
            <div class="column">
            <img src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Ftse4.mm.bing.net%2Fth%3Fid%3DOIP.Ef_u17qN3yaJtFdbOg-YQAHaE8%26pid%3DApi&f=1" alt="Chase Bank" />
            </div>
            <div class="column">
            <img src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Ftse4.mm.bing.net%2Fth%3Fid%3DOIP.YousiYtpQeEImdDCRCplYAHaHa%26pid%3DApi&f=1" alt="Huntington Bank" />
            </div>
            <div class="column">
            <img src="https://logos-world.net/wp-content/uploads/2021/04/Capital-One-Emblem.jpg" />
            </div>
            <div class="column">
            <img src="https://chabilmarvillas.com/wp-content/blog_uploads/2017/04/american-express-logo-wallpaper.jpg" />
            </div>

        </div>
        

        <form action="/~wood2944/CS471/logout.php" method="post" class="logout">
            <input type="submit" name="logout" value="Logout"/>
        </form>

    </body>
</html>

