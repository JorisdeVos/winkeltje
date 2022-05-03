<?php

    $names = $_POST['names'];
    $amount = $_POST['amount'];
    $method = $_POST['method'];
    $status = 'Niet voldaan';
    require_once 'conn.php';
    $query = "INSERT INTO bestelingen (producten, aantal, method, status)
    VALUES(:producten, :aantal, :method, :status)";
    $statement = $conn->prepare($query);
    $statement->execute([
        ":producten" => $names,
        ":aantal" => $amount,
        ":method" => $method,
        ":status" => $status
    ]);
    header("Location: ../index.php?msg=Je bestelling is geplaatst!");


?>