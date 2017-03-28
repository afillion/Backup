<?PHP

  if ($_SERVER['PHP_AUTH_USER'] == "zaz" && $_SERVER['PHP_AUTH_PW'] == "jaimelespetitsponeys")
  {
    echo "<html><body>\n";
    echo "Bonjour Zaz<br />\n";
    $img = base64_encode(file_get_contents('../img/42.png'));
    echo "<img src='data:image/png;base64,";
    echo "$img'>\n";
    echo "</body></html>\n";
   }
   else
   {
     header('HTTP/1.0 401 Unauthorized');
     header('Content-Type: text/html');
     echo "<html><body>Cette zone est accessible uniquement aux membres du site</body></html>\n";
    }


?>
