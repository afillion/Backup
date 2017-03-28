<?php 
session_start();

$name = $_GET['name'];
$articles = $_SESSION['cart'];
$i = 0;
$id = 0;
foreach($articles as $art)
{
	if ($art['name'] == $name)
		$i = $id;
	$id++;
}
unset($_SESSION['cart'][$i]);
header('Location: ../pages/panier.php');

?>
