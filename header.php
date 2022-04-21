<header>
	<div class="hamburger-menu">
	    <input id="menu__toggle" type="checkbox" />
	    <label class="menu__btn" for="menu__toggle">
	      <span></span>
	    </label>
	    <ul class="menu__box">
	     	<li><a class="menu__item" href="index.php">Home</a></li>
	    	<?php if(!isset($_SESSION['user_id'])): ?>
	      	  	<li><a class="menu__item" href="logIn.php">Log in</a></li>
	      	<?php else: ?>
	      		<li><a class="menu__item" href="logIn.php">Log out</a></li>
	      	<?php endif; ?>
	      	<?php if(!isset($_SESSION['user_id'])): ?>
	        	<li><a class="menu__item" href="status.php">Status</a></li>
	        <?php endif; ?>
		</ul>
  	</div>
	<h1>winkeltje</h1>
	<a href="winkelmand.php">
		<img src="img/winkelmandje.png" alt="winkelmand" id="imgheader"width="50px" height="50px">
	</a>
</header>