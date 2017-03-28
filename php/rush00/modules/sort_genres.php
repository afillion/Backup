<?PHP

include("./get_data");

function  sort_genres($genres) //== le genre dont tu veux afficher les articles
{
  $array_id = array();
  $articles = get_articles();
  $new = array();
  foreach($articles as $article)
  {
    foreach($article['genres'] as $e)
    {
      if ($e === $genres)
      {
        $array_id[] = $article['id'];
        $id = $article['id'];
        $new[] = $articles[$id];
      }
    }
  }
  return $new;
}

?>
