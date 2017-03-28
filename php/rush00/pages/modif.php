<?php session_start(); ?>
<HTML>
<?php include ("../template_parts/head.html"); ?>
	<BODY>
		<?php
		include("../template_parts/header.php");
		include("../template_parts/nav.html");
		var_dump($_SESSION);
		?>
		<div class="main">
		<?php if ($_SESSION['modif_error'] == 1) : ?>
		<p class="error">Veuillez remplir tous les champs.</p>
		<?php elseif ($_SESSION['modif_error'] == 2) :?>
		<p class="error">Le mot de passe est incorrect.</p>
		<?php elseif ($_SESSION['modif_error'] == 3) :?>
		<p class="error">Le login est incorrect.</p>
		<?php endif; ?>
		<?php include("../template_parts/modif.html"); ?>
		</div>
	</BODY>
</HTML>
