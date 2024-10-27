<?php
session_start();

if (!isset($_POST['customer'])) {
    header('Location: index.php');
}

$_SESSION['keranjang'] = $_POST['qty'];
$_SESSION['customer'] = $_POST['customer'];

header('Location: kasir.php');
?>
