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
	<main>
		<div class="topImage">
			<?php 
				$id = $_GET['id']; 
				require_once 'backend/conn.php';
				$query = "SELECT * FROM products WHERE id = :id";
				$statement = $conn->prepare($query);
				$statement->execute([":id" => $id]);
				$products = $statement->fetch(PDO::FETCH_ASSOC);
       		?>
			<p><?php echo $products['name']; ?></p>
		</div>
		<div class="detailText">	
			<div class="wrapper">
				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente nulla, aliquam. Quas ducimus sequi officiis eos illum eaque, voluptatem, voluptatibus dolor distinctio nulla, maiores quam, iste nostrum incidunt beatae? Atque.
				<img src="img/schep.png" alt="">
			</div>
		</div>
		<div class="detailText2">
			<div class="wrapper">
			<p>Lorem, ipsum dolor, sit amet consectetur adipisicing elit. Quidem assumenda debitis unde iusto culpa quae soluta, dignissimos vel corrupti iure repudiandae delectus, exercitationem illo nesciunt necessitatibus ipsam provident minima sint?</p>
			</div>
		</div>
		<div class="detailText3">
			<div class="wrapper">
				<p>Lorem ipsum, dolor sit amet, consectetur adipisicing elit. Laborum amet vitae deleniti, minus ullam quae magnam ducimus natus quis doloremque, architecto, excepturi odio, placeat. Quaerat sint consectetur itaque sapiente odit.</p>
				<img src="img/schep.png">
			</div>
		</div>
		<div class="addToCard">
			<div class="wrapper">
				<form action="backend/mandController.php" method="POST">
					<input id="forminput" type="number" name="amount" placeholder="Vul hier het aantal in">
					<input type="submit" value="Koop"/> 
					<input type="hidden" name="productId" value="<?php echo $id ?>">
				</form>
			</div>
		</div>
	</main>
	<?php require_once 'footer.php';?>
</body>
</html>