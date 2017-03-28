<?PHP

if ($_GET['action'] == "set")
{
  setcookie($_GET['name'], $_GET['value'], time()+3600);
}
else if ($_GET['action'] == "get")
{
  $name = $_GET['name'];
  if ($_COOKIE[$name] !== NULL)
    echo $_COOKIE[$name]."\n";
}
else if ($_GET['action'] == "del")
{
  setcookie($_GET['name'], "empty", 1);
}

?>
