#!/usr/bin/php
<?PHP
// teste avec ./  "\t4" " \t  /\t  "    "3 \t"
// ./ w + r
// ./ w r r
function  ft_empty($c)
{
  if ($c == NULL)
    return FALSE;
  else
    return TRUE;
}

function  ft_is_tab($c)
  {
    if ($c == '\t')
      return FALSE;
    else
      return TRUE;
  }

if ($argc != 4)
  {
    echo "Incorrect Parameters\n";
    return ;
  }
$tab = array();
foreach($argv as $e)
  {
    $tmp = explode(" ", $e);
    $tab = array_merge($tab , $tmp);
  }


// print_r($tab);
$tmp = array(NULL);
$new = array();

foreach($tab as $e)
{
  $tmp = explode('\t', $e);
  $new = array_merge($new, $tmp);
}

// print_r($new);
array_shift($new);


$new = array_filter($new, "ft_empty");
// print_r($new);
$new = array_filter($new, "ft_is_tab");
// print_r($new);
$p1 = array_shift($new);
$op = array_shift($new);
$p2 = array_shift($new);
if (is_numeric($p1) == FALSE || is_numeric($p2) == FALSE)
  {
    echo "This is not a valid operation\n"; // to avoid w + r make 0
    return ;
  }
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
  $result = $p1 / $p2;
  echo "$result\n";
  }
else if ($op == "%")
{
  $result = $p1 % $p2;
  echo "$result\n";
 }
else
  echo "Bad operande\n";
?>
