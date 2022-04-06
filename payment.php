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
    <div class="wrapper">
      <article id="payment">
        <h2>Betaling afronden</h2>
        <span>Selecteer de manier waarop u de bestelling wilt betalen.</span>
        <div class="side-by-side">
          <div>
            <a href="javascript:alert('stop');">
              <img src="img/ideal-logo-1024.png" alt="Met iDeal betalen" class="payment-option">
            </a>
          </div>
          <div>
            <a href="javascript:alert('stop');">
              <img src="img/visa-logo-1024.png" alt="Met Visa betalen" class="payment-option">
            </a>
          </div>
          <div>
            <a href="javascript:alert('stop');">
              <img src="img/mastercard-logo-1024.png" alt="Met Mastercard betalen" class="payment-option">
            </a>
          </div>
          <div>
            <a href="javascript:alert('stop');">
              <img src="img/paypal-logo-1024.png" alt="Met PayPal betalen" class="payment-option">
            </a>
          </div>
        </div>
      </article>
    </div>
  </main>
  <footer>
    <div class="wrapper">
      <div class="copyright">
        &copy; ik
      </div>
    </div>
  </footer>
</body>
</html>