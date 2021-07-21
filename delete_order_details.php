<?php
    session_start();
    include('dbcon.php');

    if (!isset($_SESSION['id']) ||(trim ($_SESSION['id']) == '')) {
    header('location: login.php');
    exit();
  }
?>

<?php

$user_id = $_SESSION['id'];
$order_id=$_GET['order_id'];

$result = mysqli_query($con, "DELETE FROM order_details WHERE order_details_id=$order_id");

header('location: user_cart.php');
?>