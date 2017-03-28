<?php
session_start(); 
include('../modules/display.php');
?>
<HTML>
<?php include ("../template_parts/head.html"); ?>
	<BODY>
		<?php
		include("../template_parts/header.php");
		include("../template_parts/nav.html");
		?>
		<div class="main">
<?
		$articles = $_SESSION['cart'];
		if (!$articles)
			echo "<p class='error'>Votre panier est vide</p>";
		else
			display_cart($articles);
?>
<?php	if (isset($articles[0])):?>
<a class="valid" href="../pages/validate.php">VALIDER COMMANDE</a>
<?php endif; ?>
		</div>
	</BODY>
</HTML>
