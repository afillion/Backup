#!/usr/bin/php
<?PHP

function  ft_syntax($p1, $op, $p2)
{
  if (is_numeric($p1) == FALSE || is_numeric($p2) == FALSE)
  {
    echo "Syntax Error\n";
    return TRUE;
  }
  else if ($op != "+" && $op != "-" && $op != "*" && $op != "/" && $op != "%")
    {
      echo "Syntax Error\n";
      return TRUE;
    }
  else
    return FALSE;
}

function  ft_empty($s)
{
  if ($s == NULL)
    return FALSE;
  else
    return TRUE;
}

if ($argc != 2)
  {
    echo "Incorrect Parameters\n";
    return ;
  }
$tab = array();

foreach($argv as $e)
  {
    $tmp = explode(" ", $e);
    $tab = array_merge($tab, $tmp);
  }
array_shift($tab);
//print_r($tab);
$new = array();
foreach($tab as $e)
  {
    $tmp = explode('\t', $e);
    $new = array_merge($new, $tmp);
  }
 // print_r($new);

$new = array_filter($new, "ft_empty");
//print_r($new);
$tab = array();
//foreach($new as $e)
//  {
//    $tmp = explode(!"", $e); // delimiter vide ("") retourne FALSE, dc !"" return TRUE
//    $tab = array_merge($tab, $tmp);
//  }
$new = array_values($new);
$tab = $new;
//  print_r($tab);
$new = array();
  if (strpos($tab[0], "+") == TRUE)
    {
      foreach($tab as $e)
      {
        $tmp = explode("+", $e);
        $new = array_merge($new, $tmp);
      }
      $p1 = array_shift($new);
      $p2 = array_shift($new);
      $op = "+";
    }
  else if (strpos($tab[0], "-") == TRUE)
    {
      foreach($tab as $e)
      {
        $tmp = explode("-", $e);
        $new = array_merge($new, $tmp);
      }
      $p1 = array_shift($new);
      $p2 = array_shift($new);
      $op = "-";
    }
  else if (strpos($tab[0], "*") == TRUE)
    {
      foreach($tab as $e)
      {
        $tmp = explode("*", $e);
        $new = array_merge($new, $tmp);
      }
      $p1 = array_shift($new);
      $p2 = array_shift($new);
      $op = "*";
    }
  else if (strpos($tab[0], "/") == TRUE)
    {
      foreach($tab as $e)
      {
        $tmp = explode("/", $e);
        $new = array_merge($new, $tmp);
      }
      $p1 = array_shift($new);
      $p2 = array_shift($new);
      $op = "/";
    }
  else if (strpos($tab[0], "%") == TRUE)
    {
      foreach($tab as $e)
      {
        $tmp = explode("%", $e);
        $new = array_merge($new, $tmp);
      }
      $op = "%";
      $p1 = array_shift($new);
      $p2 = array_shift($new);
    }
    else
      {
        $p1 = array_shift($tab);
        $op = array_shift($tab);
        $p2 = array_shift($tab);
      }
//print_r($new);
if (ft_syntax($p1, $op, $p2) == TRUE)
  return ;

if ($op == "+")
{
  $result = $p1 + $p2;
  echo "$result\n";
}
else if ($op == "-")
{
  $result = $p1 - $p2;
  echo "$result\n";
}
else if ($op == "*")
{
  $result = $p1 * $p2;
  echo "$result\n";
}
else if ($op == "/")
{
  if ($p2 == 0)
  {
    echo "Can't divided by zero\n";
    return ;
  }
  $result = $p1 / $p2;
  echo "$result\n";
}
else if ($op == "%")
{
  $result = $p1 % $p2;
  echo "$result\n";
}
?>
