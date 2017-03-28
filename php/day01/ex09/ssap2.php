#!/usr/bin/php
<?PHP
function ft_empty($c)
{
  if ($c == NULL)
    return FALSE;
  else
    return TRUE;
}

function  ft_is_numeric($c)
{
  if ($c[0] >= "0" && $c[0] <= "9")
    return TRUE;
  else
    return FALSE;
}

function  ft_is_alpha($c)
  {
    if (($c >= "A" && $c <= "Z") || ($c >= "a" && $c <= "z"))
      return TRUE;
    else
      return FALSE;
  }

function  ft_is_other($c)
  {
    if (ft_is_alpha($c) == FALSE && ft_is_numeric($c) == FALSE)
      return TRUE;
    else
      return FALSE;
  }

$tab = array();
$alpha = array();
$numeric = array();
$other = array();

array_shift($argv);

foreach($argv as $e)
  {
    $tmp = explode(" ", $e);
    $tab = array_merge($tab, $tmp);
  }

foreach($tab as $e)
  $alpha = array_filter($tab, "ft_is_alpha");
foreach($tab as $e)
  $numeric = array_filter($tab, "ft_is_numeric");
foreach($tab as $e)
  $other = array_filter($tab, "ft_is_other");

sort($alpha, SORT_FLAG_CASE | SORT_NATURAL);
foreach($alpha as $e)
  $alpha = array_filter($alpha, "ft_empty");

sort($numeric, SORT_STRING);
foreach($numeric as $e)
  $numeric = array_filter($numeric, "ft_empty");

sort($other);
foreach($other as $e)
  $other = array_filter($other, "ft_empty");

foreach($alpha as $e)
  echo "$e\n";
foreach($numeric as $e)
  echo "$e\n";
foreach($other as $e)
  echo "$e\n";
?>
