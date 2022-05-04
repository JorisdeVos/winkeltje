<?php
    session_start();
    $id = $_GET['id'];
    $status = "Verzonden";
    require_once 'conn.php';
    $query = "UPDATE bestelingen SET status = :status WHERE id = :id";
    $statement = $conn->prepare($query);
    $statement->execute([
        ":id" => $id,
        ":status" => $status
    ]);
    header("location: ../status.php");
?>