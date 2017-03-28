#!/usr/bin/php
<?PHP
$tab = array();

$tab[] = "Tout simplement pour qu'en feuilletant le sujet \non ne s'apercoive pas de la nature de l'exo";
$tab[] = "Parceque Kwame a des enfants";
$tab[] = "Nan c'est parceque c'est le premier avril";
$tab[] = "Oui il a vraiment des enfants";
$tab[] = "Franchement tu n'es pas beau !";
$tab[] = "Honnetement je te trouve debile";
$tab[] = "Ta beaute m'impressione";
$tab[] = "TU m'eblouis par ton intelligence !";

if ($argc > 1)
  echo $tab[rand(0, 7)]."\n";
?>
