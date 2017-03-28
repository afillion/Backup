#!/usr/bin/php
<?PHP
if ($argc > 2)
{
  array_shift($argv);
  $find = array_shift($argv);
  foreach ($argv as $e)
  {
    $tmp = explode(':', $e);
    $stock[$tmp[0]] = $tmp[1];
  }
  foreach($stock as $key => $param)
  {
    if ($find == "0")
    {
      if ($key == $find)
        echo "$param\n";
    }
    else
      {
        if ($key === $find)
          echo "$param\n";
      }
  }
}
?>
