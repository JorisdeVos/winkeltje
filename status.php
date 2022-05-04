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
  <?php require_once 'header.php';?>
<?php
            require_once 'backend/conn.php';
            $query = "SELECT * FROM bestelingen WHERE status = 'Niet verzonden'";
            $statement = $conn->prepare($query);
            $statement->execute();
            $bestelingen = $statement->fetchALL(PDO::FETCH_ASSOC);
        ?>
        <div id="tabel1" class="wrapper">
        <table> 
            <tr>
                <th>Producten</th>
                <th>Aantal</th>
                <th>Betalingsmethode</th>
                <th>Status</th>
                <th>Verzonden maken</th>
            </tr>
            <?php foreach($bestelingen as $besteling): ?>
                <tr>
                    <td><?php echo $besteling['producten'];?></td>
                    <td><?php echo $besteling['aantal'];?></td>
                    <td><?php echo $besteling['method'];?></td>
                    <td><?php echo $besteling['status'];?></td>
                    <td><a href="backend/bestelingVoldaan.php?id=<?php echo $besteling['id']; ?>">Verzonden maken</a></td>
                </tr>
            <?php endforeach; ?>
        </table>
      </div>
<?php
            require_once 'backend/conn.php';
            $query = "SELECT * FROM bestelingen WHERE status = 'Verzonden'";
            $statement = $conn->prepare($query);
            $statement->execute();
            $bestelingen = $statement->fetchALL(PDO::FETCH_ASSOC);
        ?>
        <div id="tabel1" class="wrapper">
        <table> 
            <tr>
                <th>Producten</th>
                <th>Aantal</th>
                <th>Betalingsmethode</th>
                <th>Status</th>
            </tr>
            <?php foreach($bestelingen as $besteling): ?>
                <tr>
                    <td><?php echo $besteling['producten'];?></td>
                    <td><?php echo $besteling['aantal'];?></td>
                    <td><?php echo $besteling['method'];?></td>
                    <td><?php echo $besteling['status'];?></td>
                </tr>
            <?php endforeach; ?>
        </table>
      </div>
  </main>
  <footer id="footerMargin">
    <?php require_once 'footer.php';?>
  </footer>
</body>