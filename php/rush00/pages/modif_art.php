<?php session_start();
include ('../modules/get_data.php');
if (isset($_GET['name']))
	$article = get_article($_GET['name']);
?>
<HTML>
<?php include ("../template_parts/head.html"); ?>
	<BODY>
		<?php
		include("../template_parts/header.php");
		include("../template_parts/nav.html");
		?>
<div class="main">
	<form method="POST" action="../modules/modif_art.php" >
		<p>  Nom de l'article que vous souhaitez modifier:
		<input type="text" name="name" value="<?php echo $article['name']?>"required />
		<br />
		<p>Image: 
		<input type="text" name="img" value="<?php echo $article['img']?>"required />
		<br />
		<p>Description: 
		<input type="text" name="description" value="<?php echo $article['description']?>"required />
		<br />
		<p>Prix:
		<input type="text" name="price" value="<?php echo $article['price']?>"required />
		<br />
		<p>Quantite:
		<input type="text" name="quantite" value="<?php echo $article['quantite']?>"required />
		<br />
		<p>Categories: 
		<input type="text" name="categories" value="" required />
		<br />
		<p>Genres:
		<input type="text" name="genres" value="" required />
		<br />
			<input type="submit" name="submit" value="OK" />
		</p>
	</form>
</div>
</BODY>
</HTML>
