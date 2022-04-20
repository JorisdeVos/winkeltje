<?php 
session_start();

require_once 'conn.php';

$mand = $_SESSION['basket'];
$mandAmount = $_SESSION['amount'];
$id = $_GET['itemId'];

array_splice($mandAmount, $id, $id);
array_splice($mand, $id, $id);

header("location: ../winkelmand.php");
?>