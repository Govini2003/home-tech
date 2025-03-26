<?php
$pagename="Sign Up"; //Create and populate a variable called $pagename
echo "<link rel=stylesheet type=text/css href=mystylesheet.css>"; //Call in stylesheet
echo "<title>".$pagename."</title>"; //display name of the page as window title
echo "<body>";
include ("headfile.html"); //include header layout file
echo "<h4>".$pagename."</h4>"; //display name of the page on the web page

//create a HTML form to capture the user's details
echo "<form method=post action=signup_process.php>" ;
echo "<table style='border: 0px'>";
echo "<tr><td style='border: 0px'>First Name </td>";
echo "<td style='border: 0px'><input type=text name=r_firstname size=35></td></tr>";
echo "<tr><td style='border: 0px'>Last Name </td>";
echo "<td style='border: 0px'><input type=text name=r_lastname size=35></td></tr>";
echo "<tr><td style='border: 0px'>Address </td>";
echo "<td style='border: 0px'><input type=text name=r_address size=35></td></tr>";
echo "<tr><td style='border: 0px'>Postcode </td>";
echo "<td style='border: 0px'><input type=text name=r_postcode size=35></td></tr>";
echo "<tr><td style='border: 0px'>Tel No </td>";
echo "<td style='border: 0px'><input type=text name=r_telno size=35></td></tr>";
echo "<tr><td style='border: 0px'>Email Address </td>";
echo "<td style='border: 0px'><input type=text name=r_email size=35></td></tr>";
echo "<tr><td style='border: 0px'>Password </td>";
echo "<td style='border: 0px'><input type=password name=r_password1 maxlength=10 size=35></td></tr>";
echo "<tr><td style='border: 0px'>Confirm Password </td>";
echo "<td style='border: 0px'><input type=password name=r_password2 maxlength=10 size=35></td></tr>";
echo "<tr>";
echo "<td style='border: 0px'><input type=submit value='Sign Up' name='submitbtn' id='submitbtn'></td>";
echo "<td style='border: 0px'><input type=reset value='Clear Form' name='submitbtn' id='submitbtn'> </td>";
echo "</tr>";
echo "</table>";
echo "</form>" ;
include("footfile.html"); //include head layout
?>