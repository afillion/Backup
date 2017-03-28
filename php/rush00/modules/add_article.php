<?PHP

include_once("./get_data.php");

$articles = get_articles();
if (!file_exists("./table/articles.csv"))
	$file = "../table/articles.csv";
else
	$file = "./table/articles.csv";
$id = file_get_contents($file, $use_include_path = false, NULL,2, 1);

if (isset($_POST))
{
  foreach ($articles as $article)
  {
    if ($article['name'] == $_POST['name'])
    {
      echo "Un artcile du meme nom existe deja !\n";
      return ;
    }
  }
}

$new['id'] = $id;
$new['name'] = $_POST['name'];
$new['quantite'] = $_POST['quantite'];
$new['description'] = $_POST['description'];
$new['img'] = $_POST['img'];
$new['price'] = $_POST['price'];
$new['categories'] = $_POST['categories'];
$new['genres'] = $_POST['genres'];
array_push($articles, $new);
file_put_contents($file, serialize($articles));

header('Location: ../index.php');

?>

