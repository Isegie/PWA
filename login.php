<!DOCTYPE html>
<html lang="en">
<head>
<title>Unos</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<header>
    <img class="logo-class" src="le-monde-logotype.png" />
    <div class="blue-line"></div> 
    <nav class="izbornik">
      <ul class="navigacija">
        <li><a href="index.php" class="">Početna</a></li>
        <li><a href="kategorija.php?id=politique" class="">Politique</a></li>
        <li><a href="kategorija.php?id=sport" class="">Sport</a></li>
        <li><a href="kategorija.php?id=znanost" class="">Znanost</a></li>
        <li><a href="administracija.php" class="">Administracija</a></li>
        <li><a href="unos.html">Unos</a></li>
    </ul> 
    </nav>
</header>

<div class="glavniDiv">
    <form action="administracija.php" method="POST" enctype="multipart/form-data">
      <div class="form-item">
        <span id="porukaKor"></span>
           <label for="username">Korisničko ime</label> 
       <div class="form-field"> 
         <input type="text" name="username" id="username" class="form-field-textual"> 
       </div>
      </div>
      <div class="form-item">
        <span id="porukaLevel"></span>
           <label for="level">Razina dozvole</label> 
       <div class="form-field"> 
         <input type="text" name="level" id="level" class="form-field-textual"> 
       </div>
      </div>
      <div class="form-item">
        <span id="porukaLoz"></span>
           <label for="lozinka">Lozinka</label> 
       <div class="form-field"> 
         <input type="password" name="lozinka" id="lozinka" class="form-field-textual"> 
       </div>
      </div>
     
    <div class="form-item"> 
      <button type="reset" value="Poništi">Poništi</button> 
      <button type="submit" name="prijava" id="prijava" value="prijava">Prijava</button> 
    </div>
    </form>
    </div>    
  
<footer>
  <p class="textFooter">SUIVEZ LE MONDE</p>
</footer>

<script type="text/javascript"> 
  document.getElementById("prijava").onclick = function(event) {
       var slanjeForme = true; 
       var poljeKorisnika = document.getElementById("porukaKor");
       var korisnik = document.getElementById("username").value;
       var poljeLozinka = document.getElementById("porukaLoz");
       var lozinka = document.getElementById("lozinka").value;

       var poljeLevel = document.getElementById("porukaLevel");
       var level = document.getElementById("level").value;
           if (korisnik.length ==0) 
            {
            slanjeForme = false; 
            poljeKorisnika.style.border="1px dashed red";
            document.getElementById("porukaKor").innerHTML="Korisničko ime mora biti uneseno!<br>";
             } else
             {
             poljeKorisnika.style.border="1px solid green"; 
             document.getElementById("porukaKor").innerHTML=""; 
             }  
             if (lozinka.length==0) 
            {
            slanjeForme = false; 
            poljeKorisnika.style.border="1px dashed red";
             document.getElementById("porukaLevel").innerHTML="Lozinka mora biti unesena!<br>";
             } else
             {
             poljeKorisnika.style.border="1px solid green"; 
             document.getElementById("level").innerHTML=""; 
             }  
            if (slanjeForme == false) {
                 event.preventDefault();
                } 
                 };    
  </script>
</body>
</html>

