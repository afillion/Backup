<?PHP
$file = "../private/passwd";
$folder = "private";
if (!$_POST['login'] || !$_POST['passwd'])
{
  echo "ERROR\n";
  return ;
}
else
{
  $data['login'] = $_POST['login'];
  $data['passwd'] = hash("whirlpool", $_POST['passwd']);
}

if (!file_exists("../$folder"))
  mkdir("../$folder");

if (!file_exists($file))
{
  $base[] = $data ;
  file_put_contents($file, serialize($base));
}
else
{
  $base = unserialize(file_get_contents($file));;
  foreach ($base as $e)
  {
    if (($e['login']) && $e['login'] === $data['login'])
    {
      echo "ERROR\n";
      return ;
    }
  }
  $base[] = $data;
  file_put_contents($file, serialize($base));
}
echo "OK\n";
?>
