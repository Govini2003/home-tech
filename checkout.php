<?php
session_start();
include("db.php");
mysqli_report(MYSQLI_REPORT_OFF);
$pagename="Checkout"; //Create and populate a variable called $pagename
echo "<link rel=stylesheet type=text/css href=mystylesheet.css>"; //Call in stylesheet
echo "<title>".$pagename."</title>"; //display name of the page as window title
echo "<body>";

include ("headfile.html"); //include header layout file
include ("detectlogin.php");

//store the current date and time in a local variable $currentdatetime
$currentdatetime = date('Y-m-d H:i:s');
//write a SQL query to insert a new record in the Orders table to generate a new order.
$SQL = "INSERT into Orders (userId, orderDateTime, orderStatus)
VALUES ('".$_SESSION['userid']."','".$currentdatetime."', 'Placed')";
//if execution of the INSERT INTO SQL query to add new order is correct
if (mysqli_query($conn, $SQL))
{
//Display "order success" message
echo "<p><b>Order successfully placed!</b></p>";
}
else
{
//Display "order error" message
echo "<p><b>Error with the placing of your order!</b></p>";
}

include("footfile.html"); //include head layout
echo "</body>";
?>