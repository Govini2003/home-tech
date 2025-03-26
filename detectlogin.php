<?php
session_start(); // Add this at the beginning

if (isset($_SESSION['userid'])) {
    echo "<p style='float: right'><i><b>Account: " . $_SESSION['fname'] . " " . $_SESSION['sname'] . "</b></i></p>";
}

// SESSION var is a super global variable
?>
