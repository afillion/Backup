#!/usr/bin/php
<?PHP
function ft_split($str)
{
  $tab = explode(" ", $str);
  sort($tab);
  while ($tab[0] == NULL)
    array_shift($tab);
  return ($tab);
}
?>
