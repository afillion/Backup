#!/usr/bin/php
<?PHP
function ft_empty($str)
{
  if ($str == NULL)
    return FALSE;
  else
    return TRUE;
}

if ($argc != 2)
    return ;
else
  {
    $tab = explode(" ", $argv[1]);
    $tab = array_filter($tab, "ft_empty");
    $i = 0;
    foreach($tab as $elem)
      {
        if ($i > 0)
          echo " ";
        echo $elem;
        $i++;
      }
      echo "\n";
  }
?>
