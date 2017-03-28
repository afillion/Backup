<?php
session_start();
include_once('../modules/sort_categories.php');
include_once("../modules/get_data.php");
include ("../modules/display.php");
?>
<HTML>
	<?php include ($inc."../template_parts/head.html") ?>
	<BODY>
		<?
		include("../template_parts/header.php");
		include("../template_parts/nav.html");
		?>
		<div class="main">
<?
		$articles = sort_categories('Promotions');
		display_img($articles);
?>
		</div>
	</BODY>
</HTML>
