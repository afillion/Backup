#!/usr/bin/php
<?PHP
function  ft_empty($str)
{
  if ($str == NULL)
    return FALSE;
  else
    return TRUE;
}

$tab = explode(" ", $argv[1]);
$tab = array_filter($tab, "ft_empty");
$begin = array_shift($tab);
foreach($tab as $elem)
  echo $elem." ";
echo "$begin\n";
?>
