<?PHP
function  auth($login, $passwd)
{
  if (!file_exists("../private/passwd") || !$login || !$passwd)
    return FALSE;
  else
  {
    $base = unserialize(file_get_contents("../private/passwd"));
    foreach ($base as $e)
    {
      if ($e['login'] === $login && $e['passwd'] === hash("whirlpool", $passwd))
        return TRUE;
      return FALSE;
    }
  }
}
?>
