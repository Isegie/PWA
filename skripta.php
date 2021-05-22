<?php

$target_dir = "img/";
$target_file = $target_dir . basename($_FILES["pphoto"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));


if(isset($_POST['prihvati'])){
    $naslovVijesti = $_POST['title'];
    $kratkiSadrzaj = $_POST['about'];
    $sadrzajVijesti = $_POST['content'];
    $slika = $_FILES["pphoto"]["name"];
    $target_dir = 'img/'.$slika; 
    move_uploaded_file($_FILES["pphoto"]["tmp_name"], $target_dir);
    

    $kategorijaVijesti = $_POST['category'];
   // $arhiviranje = $_POST['arhiva'];

    if(isset($_POST['category'])){
    if($kategorijaVijesti=='politique'){
      echo "<!DOCTYPE html>
        <html>
            <head>
              <meta charset=\"utf-8\">  
              <title>Projekt</title>
              <link rel=\"stylesheet\" type=\"text/css\" href=\"style_sport.css\">
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
                     <li><a href=\"login.php\">Login</a></li>
                     <li><a href=\"unos.php\">Unos</a></li>
                 </ul> 
                </nav>
            </header>
              
                <section>
                  <article class=\"titles\">
                    <h2>POLITIKA</h2>
                    <h1> $naslovVijesti</h1>
                        <p> $kratkiSadrzaj</p>
                            <aside class=\"gray-line\"></aside>
                  </article>
                  <article>
                    <div>
                      <img  class=\"slika1\" src=\"img/$slika\" height=50%; width=50%; alt=\"image\">
                      <p class=\"altSlika\"></p>
                    </div>
                  </article>
                  <article class=\"tekst\">
                      <p>$sadrzajVijesti</p>
                  </article>
                </section>
                <footer>
                    <article class=\"whiteDiv\"></article>
                    <p class=\"textFooter\">SUIVEZ LE MONDE</p>
                  </footer>
            </body>
        </html>";

    }elseif($kategorijaVijesti=='sport'){
        echo "<!DOCTYPE html>
        <html>
            <head>
            <meta charset=\"utf-8\">  
              <title>Projekt</title>
              <link rel=\"stylesheet\" type=\"text/css\" href=\"style_sport.css\">
            </head>
            <body>
                
            <header>
                <img class=\"logo-class\" src=\"le-monde-logotype.png\" alt=\"image\" />
                <div class=\"blue-line\"></div> 
                <nav class=\"izbornik\">
                 <ul class=\"navigacija\">
                      <li><a href=\"index.php\">Početna</a></li>
                      <li><a href=\"politique.html\">Politique</a></li>
                      <li><a href=\"sport.html\">Sport</a></li>
                      <li><a href=\"administracija.php\">Administracija</a></li>
                      <li><a href=\"unos.html\">Unos</a></li>
                 </ul> 
                </nav>
            </header>
              
                <section>
                  <article class=\"titles\">
                    <h2>SPORT</h2>
                    <h1> $naslovVijesti</h1>
                        <p> $kratkiSadrzaj</p>
                            <aside class=\"gray-line\"></aside>
                  </article>
                  <article>
                    <div>
                      <img  class=\"slika1\" src=\"img/$slika\" height=50%; width=50%; alt=\"image\">
                      <p class=\"altSlika\"></p>
                    </div>
                  </article>
                  <article class=\"tekst\">
                      <p>$sadrzajVijesti</p>
                  </article>
                </section>
                <footer>
                    <article class=\"whiteDiv\"></article>
                    <p class=\"textFooter\">SUIVEZ LE MONDE</p>
                  </footer>
            </body>
        </html>";
    }elseif($kategorijaVijesti=='znanost'){
      echo "<!DOCTYPE html>
      <html>
          <head>
          <meta charset=\"utf-8\">  
            <title>Projekt</title>
            <link rel=\"stylesheet\" type=\"text/css\" href=\"style_sport.css\">
          </head>
          <body>
              
          <header>
              <img class=\"logo-class\" src=\"le-monde-logotype.png\" alt=\"image\" />
              <div class=\"blue-line\"></div> 
              <nav class=\"izbornik\">
               <ul class=\"navigacija\">
                   <li><a href=\"index.php\">Početna</a></li>
                    <li><a href=\"politique.html\">Politique</a></li>
                    <li><a href=\"sport.html\">Sport</a></li>
                    <li><a href=\"administracija.html\">Administracija</a></li>
                    <li><a href=\"unos.html\">Unos</a></li>
               </ul> 
              </nav>
          </header>
            
              <section>
                <article class=\"titles\">
                  <h2>ADMINISTRACIJA</h2>
                  <h1> $naslovVijesti</h1>
                      <p> $kratkiSadrzaj</p>
                          <aside class=\"gray-line\"></aside>
                </article>
                <article>
                  <div>
                    <img  class=\"slika1\" src=\"img/$slika\" height=50%; width=50%; alt=\"image\">
                    <p class=\"altSlika\"></p>
                  </div>
                </article>
                <article class=\"tekst\">
                    <p>$sadrzajVijesti</p>
                </article>
              </section>
              <footer>
                  <article class=\"whiteDiv\"></article>
                  <p class=\"textFooter\">SUIVEZ LE MONDE</p>
                </footer>
          </body>
      </html>";
    }
}
}

?>