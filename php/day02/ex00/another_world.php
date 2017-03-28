#!/usr/bin/php
<?PHP

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

if ($argc > 1)
{
  $tab = explode(" ", $argv[1]);
  $tab = array_filter($tab, "ft_empty");
  $new = array();
  foreach($tab as $e)
    {
      $tmp = explode('\t', $e);
      $new = array_merge($new, $tmp);
    }
  $new = array_filter($new, "ft_is_tab");
  $new = array_filter($new, "ft_empty");
  echo implode(" ", $new)."\n";
}

?>
