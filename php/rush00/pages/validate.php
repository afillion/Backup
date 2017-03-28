<?PHP
session_start();
include_once("../modules/get_data.php");

if (!$_SESSION['log'])
  header('Location: ../pages/signup.php');
else if ($_SESSION['log'])
{
  $save_cart = $_SESSION['cart'];
  $users = get_users();
  foreach($users as $user)
  {
    if ($user['login'] === $_SESSION['login'])
    {
      $user['cart'] = $save_cart;
      array_push($users, $user['cart']);
      file_put_contents("../table/users.csv", serialize($users));
	  echo "<p>Votre commande a ete valide</p><p><a href='/rush00/index.php'>Retour accueil</a>";
    }
  }
}

?>
