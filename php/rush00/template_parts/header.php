<div class="header">
	<h1 id="logo">
		<a href="../index.php">
			Webshop
		</a>
	</h1>
	<ul id="id">
<?php if (!$_SESSION['log']) :?>
		<li><a href='./login.php'>Connexion</a></li>
		<li><a href='./signup.php'>Inscription</a></li>
<?php else : include('../template_parts/account_manager.html'); endif; ?>
	</ul>
</div>
