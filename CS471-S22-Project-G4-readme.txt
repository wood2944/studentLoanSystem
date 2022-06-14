CS 471 Final Project README

This file contains instructions on how to setup, and run the Student Loan System that was created for the final Project

To run the files successfully there are a few steps to be taken before hand

    1. A web server running PHP 5.4 or later
    2. MySQL Database with read and write access to a schema
    3. An SFTP Client setup with connection to the web server


Once the steps above are taken, upload the files to the web server

Once the files have been uploaded to the web-server, create a MySQL table based on the .sql files that are contained within the folder
 adding the relative user information where needed.

After the MySQL table has been created there are a few hard coded links that need to be changed mainly the CSS links, and the links for 
 logout.php file as it is relative to where it is being stored. Once these things are changed as long as the table names and the column names within the tables stay
 the same, everything will work as expected. You will also need to update the username and password for the mysql connection and possibly the database name and host address.

To work the system, create an account based on the desired user type, then proceed to log in as the user you just created. Once you have logged in, depending on the
 user type of the account you created, you will have different functionality available to you.

The website is available at the link webtech.kettering.edu/~wood2944/CS471/index.html

  

    