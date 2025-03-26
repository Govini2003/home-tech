<?php
session_start();

$pagename="Sign Up"; //Create and populate a variable called $pagename
echo "<link rel=stylesheet type=text/css href=mystylesheet.css>"; //Call in stylesheet
echo "<title>".$pagename."</title>"; //display name of the page as window title
echo "<body>";
include ("headfile.html"); //include header layout file
echo "<h4>".$pagename."</h4>"; //display name of the page on the web page
//display random text


//create a HTML form to capture the user's email and pwd
echo "<form action=login_process.php method=post>";
echo "<table id='baskettable'>";
//create text field called l_email to capture user’s input for the email
echo "<tr>";
echo "<td>Email</td>";
echo "<td><input type=text name=l_email size=40></td>";
echo "</tr>";
//create text field called l_password to capture user’s input for the password
echo "<tr>";
echo "<td>Password</td>";
echo "<td><input type=password name=l_password size=40></td>";
echo "</tr>";
//create a submit button and reset button
echo "<tr>";
echo "<td><input type=submit value='Login' id='submitbtn'></td>";
echo "<td><input type=reset value='Clear Form' id='submitbtn'></td>";
echo "</tr>";
echo "</table>";
echo "</form>";



include("footfile.html"); //include head layout
echo "</body>";
?>