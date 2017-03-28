<?php session_start(); ?>
<HTML>
<?php include ("../template_parts/head.html"); ?>
	<BODY>
		<?php
		include("../template_parts/header.php");
		include("../template_parts/nav.html");
		?>
		<div class="main">
		<?php if ($_SESSION['login_error'] == 1) : ?>
		<p class="error">Veuillez remplir tous les champs.</p>
		<?php elseif ($_SESSION['login_error'] == 2) :?>
		<p class="error">La combinaison login/mot de passe est incorrect.</p>
		<?php endif; ?>
		<?php include("../template_parts/login.html"); ?>
		</div>
	</BODY>
</HTML>
