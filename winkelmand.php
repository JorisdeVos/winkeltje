<?php session_start()?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/main.css">
  <title>Document</title>
</head>

<body>
  <?php 
    require_once('backend/conn.php');
    $personalBasket = $_SESSION['basket'];
    $amount = $_SESSION['amount'];
    $basketNow = array();
    $itemCounter = 0;

    foreach($personalBasket as $personalItem):
        $query = "SELECT * FROM products where id = :basket";
        $statement = $conn->prepare($query);
        $statement->execute([
            ":basket" => $personalItem
        ]);
        $item = $statement->fetch(PDO::FETCH_ASSOC);
        array_push($basketNow, $item);
    endforeach;

    require_once('header.php')
  ?>
    <main>
        <div class="wrapper">
            <table>
                <thead>
                    <tr class="solid">
                        <th>product</th>
                        <th>prijs</th>
                        <th>hoeveelheid</th>
                        <th>totaal prijs product</th>
                        <th>verwijderen</th>
                    </tr>
                </thead>
                <?php foreach($basketNow as $itemNow): ?>
                <tbody>			                
                    <tr>
                        <td><?php echo $itemNow['name']; ?></td>
                        <td><?php echo $itemNow['price']; ?></td>
                        <td><?php echo $amount[$itemCounter]; ?></td>
                        <td><?php echo $amount[$itemCounter]*$itemNow['price']; ?></td>
                        <td><a href="backend/delete.php?itemId=<?php echo $itemCounter;?>">delete</a></td>
                    </tr>
                </tbody>
                <?php 
                $itemCounter++;
                endforeach; 
                ?>
            </table>
        </div>
    </main>
</body>