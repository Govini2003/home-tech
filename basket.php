<?php
session_start();
file: include ("detectlogin.php");
session_start(); // Start the session to store basket data
include("db.php");
$pagename = "Smart Basket"; // Page title

// Include stylesheet
echo "<link rel=stylesheet type=text/css href=mystylesheet.css>";
echo "<title>" . $pagename . "</title>";
echo "<body>";

include("headfile.html"); // Include header

echo "<h4>" . $pagename . "</h4>";

// Check if a new product is being added
if (isset($_POST['h_prodid'])) {
    $newprodid = $_POST['h_prodid'];
    $reququantity = $_POST['p_quantity'];
    $_SESSION['basket'][$newprodid] = $reququantity;
    echo "<p>1 item added";
} else {
echo "<p>Basket unchanged";
}

$total = 0; // Initialize total price to zero

echo "<p><table id='baskettable'>";
echo "<tr>";
echo "<th>Product Name</th><th>Price</th><th>Quantity</th><th>Subtotal</th>";
echo "</tr>";

// Check if the basket session is set
if (isset($_SESSION['basket']) && !empty($_SESSION['basket'])) {
    foreach ($_SESSION['basket'] as $index => $value) {
        $SQL = "SELECT prodId, prodName, prodPrice FROM Product WHERE prodId=$index";
        $exeSQL = mysqli_query($conn, $SQL) or die(mysqli_error($conn));
        $arrayp = mysqli_fetch_array($exeSQL);

        echo "<tr>";
        echo "<td>" . $arrayp['prodName'] . "</td>";
        echo "<td>&pound" . number_format($arrayp['prodPrice'], 2) . "</td>";
        echo "<td style='text-align:center;'>" . $value . "</td>";
        
        $subtotal = $arrayp['prodPrice'] * $value;
        echo "<td>&pound" . number_format($subtotal, 2) . "</td>";
        echo "</tr>";
        
        $total += $subtotal;
    }
} else {
echo "<p>Empty basket";
}

// Display total amount
echo "<tr>";
echo "<td colspan=3><strong>TOTAL</strong></td>";
echo "<td>&pound" . number_format($total, 2) . "</td>";
echo "</tr>";
echo "</table>";

include("footfile.html"); // Include footer
echo "</body>";
?>
