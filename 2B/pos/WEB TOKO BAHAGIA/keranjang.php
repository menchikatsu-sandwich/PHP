

<?php
session_start();

if (!isset($_GET['customer'])) {
    header('Location: index.php');
}

$_SESSION['customer'] = $_GET['customer'];

header('Location: kasir.php');
?>
