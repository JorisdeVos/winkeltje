<?php 
session_start();

require_once 'conn.php';

$productId = $_POST['productId'];
$amount = $_POST['amount'];
if(empty($_SESSION['basket']))
  $_SESSION['basket'] = array();
if(empty($_SESSION['amount']))
  $_SESSION['amount'] = array();
$mand = $_SESSION['basket'];
$mandAmount = $_SESSION['amount'];

array_push($mand, $productId);
array_push($mandAmount, $amount);
print_r($mand);
print_r($mandAmount);

$_SESSION['basket'] = $mand;
$_SESSION['amount'] = $mandAmount;

header("location: ../index.php")
?>