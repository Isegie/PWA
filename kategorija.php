<?php 
include 'connect.php'; 
define('UPLPATH', 'img/');

echo "
 <!DOCTYPE html>
 <html>
 <head>
 <title>Projekt</title>
 <meta charset=\"utf-8\">
 <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
 <link rel=\"stylesheet\" type=\"text/css\" href=\"style_index.css\">
 </head>
 <body>
 
   <header>
     <img class=\"logo-class\" src=\"le-monde-logotype.png\" alt=\"image\" />
     <div class=\"blue-line\"></div> 
     <nav class=\"izbornik\">
      <ul class=\"navigacija\">
           <li><a href=\"index.php\">Početna</a></li>
           <li><a href=\"kategorija.php?id=politique\">Politique</a></li>
           <li><a href=\"kategorija.php?id=sport\">Sport</a></li>
           <li><a href=\"administracija.php\">Administracija</a></li>
           <li><a href=\"kategorija.php?id=znanost\">Znanost</a></li>
           <li><a href=\"registracija.php\">Registracija</a></li>
           <li><a href=\"unos.html\">Unos</a></li>
      </ul> 
     </nav>
 </header>";

echo '
<div class="glavniDiv">';

$kategorija='sport';

echo '<section><div class=\"dark-line prazniDiv\"></div>
  <h1>Kategorija</h1>';

  $query = "SELECT * FROM vijesti WHERE kategorija LIKE '$kategorija'";
  $result = mysqli_query($dbc, $query); 
  $i=0; 
 while($row = mysqli_fetch_array($result)) 
 { 
   echo '<article>'; 
   echo'<div class="slika1">';
   echo '<div>';
   echo '<img src="' . UPLPATH . $row['slika'] . '" height="50%" width="60%"'; 
   echo '</div>'; 
   echo '<div>';
   echo '<h4>'; 
   echo '<a href="clanak.php?id='.$row['id'].'">'; 
   echo $row['naslov']; 
   echo '</a></h4>'; 
   echo '</div></div>'; 
   echo '</article>';
 }
  echo'</section>';
echo '</div>
</body>
</html>
';

?> 