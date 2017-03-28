<?PHP
session_start();

include_once("./get_data.php");

 $name = $_GET['name'];
  $articles = get_articles();
  foreach($articles as $article)
  {
    if ($article['name'] === $name)
    {
      $id = $article['id'];
    }
  }
  $_SESSION['cart'][] = $articles[$id];
  header('Location: ../pages/index.php');
?>
