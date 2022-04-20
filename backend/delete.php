<?php 
session_start();

require_once 'conn.php';

$mand = $_SESSION['basket'];
$mandAmount = $_SESSION['amount'];
$id = $_GET['itemId'];

array_splice($mandAmount, $id, 1);
array_splice($mand, $id, 1);

$_SESSION['basket'] = $mand;
$_SESSION['amount'] = $mandAmount;
header("location: ../winkelmand.php");
?>