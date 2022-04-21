<!doctype html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8">
  <title></title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <meta property="og:title" content="">
  <meta property="og:type" content="">
  <meta property="og:url" content="">
  <meta property="og:image" content="">

  <link rel="manifest" href="site.webmanifest">
  <link rel="apple-touch-icon" href="icon.png">
  <!-- Place favicon.ico in the root directory -->

  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/main.css">

  <meta name="theme-color" content="#fafafa">
</head>

<body>

  
  <!-- Add your site or application content here -->
  <script src="js/vendor/modernizr-3.11.2.min.js"></script>
  <script src="js/plugins.js"></script>
  <script src="js/main.js"></script>

  <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
  <script>
    window.ga = function () { ga.q.push(arguments) }; ga.q = []; ga.l = +new Date;
    ga('create', 'UA-XXXXX-Y', 'auto'); ga('set', 'anonymizeIp', true); ga('set', 'transport', 'beacon'); ga('send', 'pageview')
  </script>
  <script src="https://www.google-analytics.com/analytics.js" async></script>

  <?php require_once 'header.php';?>
  <div class="wrapper">
    <div class="topnav">
      <input type="text" placeholder="Search..">
    </div>
    <div class="bigimg">
      <?php
          $id = "1";
          require_once 'backend/conn.php';
          $query = "SELECT * FROM products WHERE id = :id";
          $statement = $conn->prepare($query);
          $statement->execute([":id" => $id]);
          $products = $statement->fetch(PDO::FETCH_ASSOC);
      ?>
      <a href="details.php?id=<?php echo $products['id']; ?>"><button><img src="img/schep.jpg"/><p><?php echo $products['name']; ?></p><br><p><?php echo $products['description']; ?></p></br></button></a></div>
    
    <div class="shovelflex2">
        <?php
          $id = "2";
          require_once 'backend/conn.php';
          $query = "SELECT * FROM products WHERE id = :id";
          $statement = $conn->prepare($query);
          $statement->execute([":id" => $id]);
          $products = $statement->fetch(PDO::FETCH_ASSOC);
        ?>
      <div class="shovelflex1"><a href="details.php?id=<?php echo $products['id']; ?>"><button><img src="img/bloemen.jpg"/><p><?php echo $products['name']; ?></p><br><p><?php echo $products['description']; ?></p></br></button></a></div>
        <?php
          $id = "3";
          require_once 'backend/conn.php';
          $query = "SELECT * FROM products WHERE id = :id";
          $statement = $conn->prepare($query);
          $statement->execute([":id" => $id]);
          $products = $statement->fetch(PDO::FETCH_ASSOC);
        ?>
      <div class="shovelflex1"><a href="details.php?id=<?php echo $products['id']; ?>"><button><img src="img/pizza.jpg"/><p><?php echo $products['name']; ?></p><br><p><?php echo $products['description']; ?></p></br></button></a></div>
        <?php
          $id = "4";
          require_once 'backend/conn.php';
          $query = "SELECT * FROM products WHERE id = :id";
          $statement = $conn->prepare($query);
          $statement->execute([":id" => $id]);
          $products = $statement->fetch(PDO::FETCH_ASSOC);
        ?>
      <div class="shovelflex1"><a href="details.php?id=<?php echo $products['id']; ?>"><button><img src="img/boor.jpg"/><p><?php echo $products['name']; ?></p><br><p><?php echo $products['description']; ?></p></br></button></a></div>
    </div>

    <div class="shovelflex2">
        <?php
          $id = "5";
          require_once 'backend/conn.php';
          $query = "SELECT * FROM products WHERE id = :id";
          $statement = $conn->prepare($query);
          $statement->execute([":id" => $id]);
          $products = $statement->fetch(PDO::FETCH_ASSOC);
        ?>
      <div class="shovelflex1"><a href="details.php?id=<?php echo $products['id']; ?>"><button><img src="img/muis.jpg"/><p><?php echo $products['name']; ?></p><br><p><?php echo $products['description']; ?></p></br></button></a></div>
        <?php
          $id = "6";
          require_once 'backend/conn.php';
          $query = "SELECT * FROM products WHERE id = :id";
          $statement = $conn->prepare($query);
          $statement->execute([":id" => $id]);
          $products = $statement->fetch(PDO::FETCH_ASSOC);
        ?>
      <div class="shovelflex1"><a href="details.php?id=<?php echo $products['id']; ?>"><button><img src="img/keyboard.jpg"/><p><?php echo $products['name']; ?></p><br><p><?php echo $products['description']; ?></p></br></button></a></div>
        <?php
          $id = "7";
          require_once 'backend/conn.php';
          $query = "SELECT * FROM products WHERE id = :id";
          $statement = $conn->prepare($query);
          $statement->execute([":id" => $id]);
          $products = $statement->fetch(PDO::FETCH_ASSOC);
        ?>
      <div class="shovelflex1"><a href="details.php?id=<?php echo $products['id']; ?>"><button><img src="img/lamp.jpg"/><p><?php echo $products['name']; ?></p><br><p><?php echo $products['description']; ?></p></br></button></a></div>
    </div>


  </div>
  <?php require_once 'footer.php';?>
</body>

</html>
