<?PHP

$file = '../private/passwd';
if (!$_POST['login'] || !$_POST['oldpw'] || !$_POST['newpw'] || !file_exists($file) || $_POST['submit'] !== "OK")
{
  echo "ERROR\n";
  return ;
}
else
{
  $base = unserialize(file_get_contents($file));
      if ($base['passwd'] === hash("whirlpool", $_POST['newpw']))
      {
        echo "ERROR\n";
        return ;
      }
  foreach($base as $e)
  {
    if ($e['login'] === $_POST['login'] && $e['passwd'] === hash("whirlpool", $_POST['oldpw']))
    {
      $e['passwd'] = hash("whirlpool", $_POST['oldpw']);
      $data['login'] = $_POST['login'];
      $data['passwd'] = hash("whirlpool", $_POST['newpw']);
      $test[] = $data;
      file_put_contents($file, serialize($test));
      echo "OK\n";
      return ;
    }
  }
  echo "ERROR\n";
  return ;
}
?>
