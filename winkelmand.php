<?php session_start();
error_reporting(0);
?>
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
            <?php 
            $totalMoney = 0;
            $productsNames = "Namen: -";
            $productsAmounts = "Aantal: -";
            ?>
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
                        <?php $productsNames .= $itemNow['name'] . "-"; ?>
                        <td><?php echo $itemNow['price']; ?></td>
                        <td><?php echo $amount[$itemCounter]; ?></td>
                        <?php $productsAmounts .= $amount[$itemCounter] . "-"; ?>
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
                    <p>Totaalbedrag:</p>
                    <?php echo $totalMoney; ?>
                </div>
                <form action="payment.php" method="POST">
                    <input type="hidden" name="names" value="<?php echo $productsNames; ?>">
                    <input type="hidden" name="amount" value="<?php echo $productsAmounts; ?>">
                <input type="submit" name="submit" value="Betalen">  
                </form>
            </div>
        </div>
          <?php require_once 'footer.php';?>
        <div class="wrapper">
        </div>
    </main>
</body>