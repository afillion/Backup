<?PHP

include_once("../modules/get_data.php");

function  sort_categories($categorie) //$categoire dois etre la categories dont tu veux afficher les articles
{
  $array_id = array();
  $articles = get_articles(); //obtient liste des articles via le csv
  $new = array();
  foreach($articles as $article)
  {
    foreach($article['categories'] as $e)
    {
      if ($e === $categorie)
      {
        $array_id[] = $article['id'];
        $id = $article['id'];
        $new[] = $articles[$id];
      }
    }
  }
  return $new; //contient les articles concerne par la categorie ainsi que toute leurs data
}
sort_categories("US");

//attention les ID peuvents etre decale, i.g: dans articles(array) un article en positon 6 a son ID a 6, mais si l'article le precedent (num 5) n'est pas concerne par le tri, une fois dans $new(array) il sera 5eme et son ID restera 6
?>



