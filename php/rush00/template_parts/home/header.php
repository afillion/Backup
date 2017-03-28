<div class="header">
	<h1 id="logo">
		<a href="##">
			Webshop
		</a>
	</h1>
	<ul id="id">
<?php if (!$_SESSION['log']) :?>
		<li><a href='pages/login.php'>Connexion</a></li>
		<li><a href='pages/signup.php'>Inscription</a></li>
<?php else :
include("template_parts/account_manager.html");
endif; ?>
	</ul>
</div>
