<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>winkeltje!</title>

  <link rel="stylesheet" href="css/main.css">
</head>
<body>
  <header>
  </header>
  <main>
    <?php require_once 'header.php' ?>
    <?php
    $names = $_POST['names'];
    $amount = $_POST['amount'];
    ?>
    <article id="payment">
      <p></p>
      <h2>Betaling afronden</h2>
      <div class="wrapper">
        <h3>Selecteer de manier waarop u de bestelling wilt betalen.</h3>
        <div class="side-by-side">
          <div>
                <form action="backend/paymentController.php" method="POST">
                    <input type="hidden" name="names" value="<?php echo $productsNames; ?>">
                    <input type="hidden" name="amount" value="<?php echo $productsAmounts; ?>">
                    <input type="hidden" name="method" value="Ideal">
                <input id="nobuttoneffect" type="submit" name="submit" value="Betalen">  
                </form>
              <img src="img/ideal-logo-1024.png" alt="Met iDeal betalen" class="payment-option">
            </a>
          </div>
          <div>
                <form action="backend/paymentController.php" method="POST">
                    <input type="hidden" name="names" value="<?php echo $productsNames; ?>">
                    <input type="hidden" name="amount" value="<?php echo $productsAmounts; ?>">
                    <input type="hidden" name="method" value="Visa">
                <input id="nobuttoneffect" type="submit" name="submit" value="Betalen">  
                </form>
              <img src="img/visa-logo-1024.png" alt="Met Visa betalen" class="payment-option">
            </a>
          </div>
          <div>
                <form action="backend/paymentController.php" method="POST">
                    <input type="hidden" name="names" value="<?php echo $productsNames; ?>">
                    <input type="hidden" name="amount" value="<?php echo $productsAmounts; ?>">
                    <input type="hidden" name="method" value="Mastercard">
                <input id="nobuttoneffect" type="submit" name="submit" value="Betalen">  
                </form>
              <img src="img/mastercard-logo-1024.png" alt="Met Mastercard betalen" class="payment-option">
            </a>
          </div>
          <div>
                <form action="backend/paymentController.php" method="POST">
                    <input type="hidden" name="names" value="<?php echo $productsNames; ?>">
                    <input type="hidden" name="amount" value="<?php echo $productsAmounts; ?>">
                    <input type="hidden" name="method" value="Paypal">
                <input id="nobuttoneffect" type="submit" name="submit" value="Betalen">  
                </form>
              <img src="img/paypal-logo-1024.png" alt="Met PayPal betalen" class="payment-option">
            </a>
          </div>
        </div>
      </article>
    </div>
  </main>
  <footer>
    <?php require_once 'footer.php' ?>
  </footer>
</body>
</html>