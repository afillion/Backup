<?php session_start(); ?>
<HTML>
<?php include ("../template_parts/head.html"); ?>
<BODY>
<?
include("../template_parts/header.php");
include("../template_parts/nav.html");
?>
<div class="main">
<form method="POST" action="../modules/del_article.php" >
      <p>
	  Nom du produit a supprimer de la base de donnees: <input type="text" name="name" value="<?php if (isset($_GET['name'])) {echo $_GET['name'];}?>"
required />
      <br />
      <input type="submit" name="submit" value="OK" />
      </p>
	</form>
</div>
  </body>
</html>
