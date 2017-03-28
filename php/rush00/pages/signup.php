<?php
session_start();
include ("../template_parts/head.html");
?>
<HTML>
	<BODY>
		<?php
		include("../template_parts/header.php");
		include("../template_parts/nav.html");
		?>
		<div class="main">
		<?php if ($_SESSION['signup_error'] == 1) : ?>
			<p class="error">Veuillez remplir tous les champs.</p>
		<?php elseif ($_SESSION['signup_error'] == 2) : ?>
			<p class="error">Le login que vous essayer d'utiliser n'est pas disponible.</p>
		<?php endif; ?>
		<?php include("../template_parts/signup.html"); ?>
		</div>
	</BODY>
</HTML>
