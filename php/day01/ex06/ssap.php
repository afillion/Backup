#!/usr/bin/php
<?PHP
function ft_empty($str)
{
  if ($str == NULL)
    return FALSE;
  else
    return TRUE;
}
array_shift($argv);
$tab = array();
foreach ($argv as $arg)
{
  $tmp = explode(" ", $arg);
  $tab = array_merge($tab, $tmp);
}
$tab = array_filter($tab, "ft_empty");
sort($tab, SORT_STRING);
foreach($tab as $elem)
  echo $elem."\n";
?>
