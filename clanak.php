<?php
include 'connect.php'; 
echo'<!DOCTYPE html>
<html>
    <head>
      <title>Projekt</title>
      <meta charset="utf-8">  
      <link rel="stylesheet" type="text/css" href="style_sport.css">
    </head>
    <body>
        
      <header>
        <img class="logo-class" src="le-monde-logotype.png" alt="image" />
        <div class="blue-line"></div> 
        <nav class="izbornik">
         <ul class="navigacija">
         <li><a href=\"index.php\">Početna</a></li>
         <li><a href=\"kategorija.php?id=politique\">Politique</a></li>
         <li><a href=\"kategorija.php?id=sport\">Sport</a></li>
         <li><a href=\"administracija.php\">Administracija</a></li>
         <li><a href=\"kategorija.php?id=znanost\">Znanost</a></li>
         <li><a href=\"registracija.php\">Registracija</a></li>
         </ul> 
        </nav>
    </header><div class="glavniDiv">';
  $postedId= $_GET['id'];    
  $query = "SELECT kategorija,naslov,datum,slika,sazetak,tekst FROM vijesti WHERE id=$postedId;";
  $result = mysqli_query($dbc, $query); 
  $i=0; 
 while($row = mysqli_fetch_array($result)) 
 { 
   echo '<section role="main"> 
   <div class="row"> 
   <h2 class="category">';
       
   echo "<span>".$row['kategorija']."</span>"; 
    echo '
    </h2> 
        <h1 class="title">'. $row['naslov'];'</h1>
        <p>AUTOR:</p> 
    <p>OBJAVLJENO:<span>'.$row['datum'].'</span></p></div><section class="slika1">';
        echo '
        <img src="' . "img/" . $row['slika'] . '" height="50%" width="50%"></section>';

        echo '
        <section class="about"><p>
        <i>"'.$row['sazetak'].'</i>"</p> 
        </section>';

        echo '
        <section class="sadrzaj"> 
           <p>'; echo $row['tekst']; 
           
        echo  '</p> 
        </section>
        </section>';

 }
    echo '</div>
        <footer>
            <article class="whiteDiv"></article>
            <p class="textFooter">SUIVEZ LE MONDE</p>
          </footer>
    </body>
</html>';

?>