#!/usr/bin/php
<?PHP

if (!file_exists("table"))
  mkdir("table");

$permission = array();
$permission[1] = "root";
$permission[2] = "admin";
$permission[3] = "client";
$permission[4] = "guest";

$users = array();
$users[1]['id'] = 1;
$users[1]['permssion'] = $permission[1];
$users[1]['firstname'] = "Alexis";
$users[1]['lastname'] = "Fillion";
$users[1]['login'] = "afillion";
$users[1]['passwd'] = hash("whirlpool", "rootafillion");
$users[1]['mail'] = "afillion@student.42.fr";
$users[1]['img'] = "https://cdn.intra.42.fr/userprofil/afillion.jpg";
$users[2]['id'] = 2;
$users[2]['permssion'] = $permission[1];
$users[2]['firstname'] = "Foulques";
$users[2]['lastname'] = "De Moncade";
$users[2]['login'] = "fde-monc";
$users[2]['passwd'] = hash("whirlpool", "rootfde-monc");
$users[2]['mail'] = "fde-monc@student.42.fr";
$users[2]['img'] = "https://cdn.intra.42.fr/userprofil/fde-monc.jpg";

$genres = array();
$genres[1] = "Rap";
$genres[2] = "R'n'B";
$genres[3] = "Variete";
$genres[4] = "Classique";
$genres[5] = "Pop";

$categories = array();
$categories[1] = "Albulm";
$categories[2] = "Francais";
$categories[3] = "US";
$categories[4] = "Meilleurs ventes";
$categories[5] = "Promotions";

$articles = array();

$articles[1]['id'] = 1;
$articles[1]['name'] = "50 Cent - The Massacre";
$articles[1]['quantite'] = 50;
$articles[1]['description'] = "Albulm The Massacre de 50 Cent. Sorti le 03 Mars 2005. PARENTAL ADVISORY EXPLICIT CONTENT";
$articles[1]['img'] = "./img/50cent.JPG";
$articles[1]['price'] = 9.99;
$articles[1]['categories'] = array($categories[1], $categories[3], $categories[4]);
$articles[1]['genres'] = array($genres[1]);

$articles[2]['id'] = 2;
$articles[2]['name'] = "A. Dvorak";
$articles[2]['quantite'] = 12;
$articles[2]['description'] = "Compilation du celebre compositeur Dvorak";
$articles[2]['img'] = "./img/Dvorak_Poroshina.jpg";
$articles[2]['price'] = 9.99;
$articles[2]['categories'] = array($categories[1]);
$articles[2]['genres'] = array($genres[4]);

$articles[3]['id'] = 3;
$articles[3]['name'] = "Seth Gueko - Barlou";
$articles[3]['quantite'] = 42;
$articles[3]['description'] = "Albulm 'Barlou' de Seth Gueko. Sortie le 18 Novembre 2016. PARENTAL ADVISORY EXPLICIT CONTENT";
$articles[3]['img'] = "./img/barlou.jpg";
$articles[3]['price'] = 19.99;
$articles[3]['categories'] = array($categories[1], $categories[2], $categories[4]);
$articles[3]['genres'] = array($genres[1]);

$articles[4]['id'] = 4;
$articles[4]['name'] = "Beyonce - 4";
$articles[4]['quantite'] = 7;
$articles[4]['description'] = "Albulm '4' de Beyonce sortie le 24 Juin 2011 en plus elle est trop bonne sur la pochette sa mere";
$articles[4]['img'] = "./img/beyonce.png";
$articles[4]['price'] = 4.99;
$articles[4]['categories'] = array($categories[1], $categories[3], $categories[5]);
$articles[4]['genres'] = array("$genres[2], $genres[5]");

$articles[5]['id'] = 5;
$articles[5]['name'] = "Coldplay - Viva la Vida";
$artciles[5]['quantite'] = 34;
$articles[5]['description'] = "Single extrait de l'albulm 'Viva la Vida or Death and All His Friends' sortie le 7 mai 2008";
$articles[5]['img'] = "./img/coldplay.jpg";
$articles[5]['price'] = 9.99;
$articles[5]['categories'] = array($categories[1], $categories[3], $categories[4]);
$articles[5]['genres'] = array($genres[3], $genres[5]);

$articles[6]['id'] = 6;
$articles[6]['name'] = "Debussy - Clair de Lune";
$articles[6]['quantite'] = 16;
$articles[6]['description'] = "Single Clair de Lune de Debussy sortie en 1984 parce quon sen ballek";
$articles[6]['img'] = "./img/debussy.jpg";
$articles[6]['price'] = 4.99;
$articles[6]['categories'] = array($categories[5]);
$articles[6]['genres'] = array($genres[4]);


$articles[7]['id'] = 7;
$articles[7]['name'] = "B.O EMPIRE";
$articles[7]['quantite'] = 24;
$articles[7]['description'] = "Bande Originale de la Serie EMPIRE (Saison 1) produit par HBO en 2015.";
$articles[7]['img'] = "./img/empirebo.jpg";
$articles[7]['price'] = 14.99;
$articles[7]['categories'] = array($categories[3]);
$articles[7]['genres'] = array($genres[1], $genres[2]);

$articles[8]['id'] = 8;
$articles[8]['name'] = "Musique Negre - Kery James";
$articles[8]['quantite'] = 67;
$articles[8]['description'] = "Single 'Musique Negre' de Kery James sorti le 13 Novembre 2015 produit par la Mafia K1fry et en feat avec le grand Youssoupha, le best.";
$articles[8]['img'] = "./img/musiquenegre.jpg";
$articles[8]['price'] = 9.99;
$articles[8]['categories'] = array($categories[2], $categories[4]);
$articles[8]['genres'] = array($genres[1]);

$articles[9]['id'] = 9;
$articles[9]['name'] = "Lil Wayne - The Carter IV";
$articles[9]['quantite'] = 43;
$articles[9]['description'] = "Albulm de Rap Us 'The Carter IV' de Lil Wayne sortie le 29 Aout 2011";
$articles[9]['img'] = "./img/lilwayne.jpg";
$articles[9]['price'] = 9.99;
$articles[9]['categories'] = array($categories[1], $categories[3], $categories[5]);
$articles[9]['genres'] = array($genres[1], $genres[2]);

$articles[10]['id'] = 10;
$articles[10]['name'] = "Nero Nemesis - Booba";
$articles[10]['quantite'] = 66;
$articles[10]['description'] = "Albulm 'Nero Nemesis' sortie le 4 Decembre 2015, album de l'annee car Booba c'est les vrais bails";
$articles[10]['img'] = "./img/neronemesis.jpg";
$articles[10]['price'] = 21.99;
$articles[10]['categories'] = array($categories[1]. $categories[2], $categories[4]);
$articles[10]['genres'] = array($genres[1]);

$articles[11]['id'] = 11;
$articles[11]['name'] = "B.O Pulp Fiction";
$articles[11]['quantite'] = 23;
$articles[11]['description'] = "Bande Originale du film 'Pulp Fiction' de Tarantino sortie en 0000 blabla produit par Machin";
$articles[11]['img'] = "./img/pulpfiction.jpg";
$articles[11]['price'] = 4.99;
$articles[11]['categories'] = array($categories[5]);
$articles[11]['genres'] = array($genres[5]);

$articles[12]['id'] = 12;
$articles[12]['name'] = "Doll Domination - Pussycat Dolls";
$articles[12]['quantite'] = 6;
$articles[12]['description'] = "Albulm 'Doll Domination' sortie le 19 Septembre 2008 par les Pussy Cat Dolls sous le label Grande Chatte";
$articles[12]['img'] = "./img/pussycatdolls.jpg";
$articles[12]['price'] = 2.99;
$articles[12]['categories'] = array($categories[1], $categories[3]);
$articles[12]['genres'] = array($genres[2], $genres[5]);

$articles[13]['id'] = 13;
$articles[13]['name'] = "The Red Hot Chilli Peppers - Red Hot Chilli Peppers";
$articles[13]['quantite'] = 6;
$articles[13]['description'] = "Albulm des Red Hot Chili Peppers eponyme sortie le 10 Aout 1984, album de lannee 1985";
$articles[13]['img'] = "./img/redhot.jpg";
$articles[13]['price'] = 4.99;
$articles[13]['categories'] = array($categories[1], $categories[3], $categories[5]);
$articles[13]['genres'] = array($genres[5]);

$articles[14]['id'] = 14;
$articles[14]['name'] = "Ne quelquepart - Tryo";
$articles[14]['quantite'] = 54;
$articles[14]['description'] = "Albulm sortie le 1 Decembre 2014 mais bon cest pas grave on les aimes bien qund meme";
$articles[14]['img'] = "./img/tryo.jpg";
$articles[14]['price'] = 19.99;
$articles[14]['categories'] = array($categories[1], $categories[2]);
$articles[14]['genres'] = array($genres[3]);

$articles[15]['id'] = 15;
$articles[15]['name'] = "Mi Amor - Vanessa Paradis";
$articles[15]['quantite'] = 10;
$articles[15]['description'] = "Albulm 'Mi Amor' de Vanessa Paradis sortie en 2016 sous le label Chatte, album de l'annee derniere";
$articles[15]['img'] = "./img/vanessaparadismiamor.jpg";
$articles[15]['price'] = 4.99;
$articles[15]['categories'] = array($categories[1], $categories[2]);
$articles[15]['genres'] = array($genres[3]);


$cart = array();
$cart[0]['articles'] = 1;
$cart[0]['total'] = 0;

if (file_put_contents("table/articles.csv", serialize($articles)) > 0)
  echo "./table/articles.csv has been created !\n";
else
  echo "Can't create ./table/articles.csv, file_put_contents FAIL !\n";

if (file_put_contents("table/genres.csv", serialize($genres)) > 0)
  echo "./table/genres.csv has been created !\n";
else
  echo "Can't create ./table/genres.csv, file_put_contents FAIL !\n";

if (file_put_contents("table/cart.csv", serialize($cart)) > 0)
  echo "./table/cart.csv has been created !\n";
else
  echo "Can't create ./table/cart.csv, file_put_contents FAIL !\n";

if (file_put_contents("table/categories.csv", serialize($categories)) > 0)
  echo "./table/categories.csv has been created !\n";
else
  echo "Can't create ./table/categories.csv, file_put_contents FAIL !\n";

if (file_put_contents("table/users.csv", serialize($users)) > 0)
  echo "./table.users.csv has been created !\n";
else
  echo "Can't create ./table/users.csv, file_put_contents FAIL !\n";

if (file_put_contents("table/permission.csv", serialize($permission)) > 0)
  echo "./table/permission.csv has been created !\n";
else
  echo "Can't create ./table/permission.csv, file_put_contents FAIL !\n";

function add_admins($users) {
  mkdir('./private');
  $file = array();
  foreach ($users as $account){
    $file[] = $account;
  }
  $s_file = serialize($file);
  file_put_contents('./private/passwd', $s_file);
}

add_admins($users);

?>
