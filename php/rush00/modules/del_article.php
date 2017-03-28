<?PHP

include_once("get_data.php");

$articles = get_articles();
if ($_POST['submit'] == "OK")
{
  if (isset($_POST['name']))
  {
    foreach($articles as $e)
    {
      if ($e['name'] === $_POST['name'])
        $id = $e['id'];
    }
    unset($articles[$id]);
    file_put_contents("../table/articles.csv", serialize($articles));
  }
  else
  {
    echo "L'article que vous souhaitez supprimer n'existe pas\n";
  }
}
if (!isset($_POST['price']))
	header('Location: ../index.php');
?>
