<?php
session_start();
include ("./modules/get_data.php");
include ("./modules/display.php");
$link = dirname(__DIR__)."/rush00";
$inc = $link.'/template_parts/'; 
?>
<HTML>
	<?php include ($inc."home/head.html") ?>
	<BODY>
		<?
		include($inc."home/header.php");
		include($inc."nav.html");
		?>
		<div class="main">
<?
		$articles = get_articles();
		display($articles);
?>
		</div>
	</BODY>
</HTML>
