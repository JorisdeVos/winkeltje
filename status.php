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
  <?php require_once 'header.php';
    $query = "SELECT * FROM  WHERE";
    $statement = $conn->prepare($query);
    $statement->execute();
    $todo = $statement->fetchAll(PDO::FETCH_ASSOC);
  ?>
  <main>
  <table>
    <thead>
            <tr class="solid">
                <th>Titel</th>
        <th>Naam</th>
        <th>Asignee</th>
                <th>Bericht</th>
                <th>Afdeling</th>
                <th>deadline</th>
                <th>Gemaakt op</th>
                <th>Aanpassen</th>
            </tr>
          </thead>
          <?php foreach($todo as $taken): ?>
          <tbody>			                <tr>
                  <?php $id = $taken['id'] ?>
                  <td><?php echo $taken['titel']; ?></td>
        <td><?php echo $taken['naam']; ?></td>
        <td><?php echo $taken['asignee']; ?></td>
                  <td><?php echo $taken['beschrijving']; ?></td>
                  <td><?php echo $taken['afdeling']; ?></td>
                  <td><?php echo $taken['deadline']; ?></td>
                  <td><?php echo $taken['created_at']; ?></td>
                  <td><a href="edit.php?id=<?php echo $id;?>">Aanpassen</a></td>
              </tr>
          </tbody>
          <?php endforeach; ?>
      </table>
  </main>
</body>