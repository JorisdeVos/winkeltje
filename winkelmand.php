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
        <div id="tabel1" class="wrapper">
            <?php $totalMoney = 0 ?>
            <table>
                <thead>
                    <tr class="solid">
                        <th>Product</th>
                        <th>Prijs</th>
                        <th>Aantal</th>
                        <th>Totale Prijs</th>
                        <th>Verwijder</th>
                    </tr>
                </thead>
                <?php foreach($basketNow as $itemNow): ?>
                <tbody>			                
                    <tr>
                        <td><?php echo $itemNow['name']; ?></td>
                        <td><?php echo $itemNow['price']; ?></td>
                        <td><?php echo $amount[$itemCounter]; ?></td>
                        <td><?php echo $amount[$itemCounter]*$itemNow['price']; ?></td>
                        <td><a href="backend/delete.php?itemId=<?php echo $itemCounter;?>">Verwijder</a></td>
                        <?php $totalMoney += $amount[$itemCounter]*$itemNow['price'];?>
                    </tr>
                </tbody>
                <?php 
                $itemCounter++;
                endforeach; 
                ?>
            </table>
            <div class="confirm">
                <div class="geenButton">
                    <p>Totale bedrag:</p>
                    <?php echo $totalMoney; ?>
                </div>
            </div>
        </div>
        <div class="wrapper">
            
        </div>
    </main>
</body>