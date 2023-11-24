<!DOCTYPE html>
<html style="font-size: 16px;" lang="pl"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>wyszukaj</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="wyszukaj.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
   
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    <link rel="icon" type="image/x-icon" href="/images/ikona.ico">
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "",
		"logo": "images/logo.png",
		"sameAs": [
				"https://www.facebook.com/pinkipaj.to.ja/",
				"https://www.instagram.com/eatassnotgrass/",
				"tel:512999999"
		]
}</script>
<script>
document.addEventListener("DOMContentLoaded", function() {
  const opinie = document.querySelectorAll('.opinia'); // Znajdź wszystkie elementy z klasą 'opinia'

  opinie.forEach(opinia => {
    const slowa = opinia.innerText.split(' ').length; // Podziel tekst opinii na słowa
    if (slowa > 20) {
      const button = document.createElement('button'); // Utwórz przycisk
      button.innerText = 'Pokaż więcej'; // Ustaw tekst przycisku
      let fullText = false; // Flaga wskazująca, czy cały tekst jest widoczny

      button.addEventListener('click', () => {
        if (fullText) {
          opinia.classList.add('skrocona'); // Dodaj klasę 'skrocona' dla skróconej treści
          button.innerText = 'Pokaż więcej';
          fullText = false;
        } else {
          opinia.classList.remove('skrocona'); // Usuń klasę 'skrocona', aby pokazać cały tekst
          button.innerText = 'Pokaż mniej';
          fullText = true;
        }
      });

      opinia.classList.add('skrocona'); // Dodaj klasę 'skrocona' na początku dla skróconej treści
      opinia.parentElement.appendChild(button); // Dodaj przycisk na końcu rodzica opinii
    }
  });
});
</script>

    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="wyszukaj">
    <meta property="og:type" content="website">
  <meta data-intl-tel-input-cdn-path="intlTelInput/">
    <style>
#first{
    font-size: x-large;
    font-weight: bold;
}


    </style>

</head>
  <body data-path-to-root="./" data-include-products="false" class="u-body u-xl-mode" data-lang="pl"><header class="u-clearfix u-header u-palette-5-dark-3 u-header" id="sec-d12c"><div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
  <a href="Strona-główna.html" class="u-image u-logo u-image-1" data-image-width="196" data-image-height="188">
          <img src="images/logo.png" class="u-logo-image u-logo-image-1">
        </a>
        <nav class="u-menu u-menu-one-level u-offcanvas u-menu-1">
          <div class="menu-collapse" style="font-size: 1rem; letter-spacing: 0px;">
            <a class="u-button-style u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-text-hover-color u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="#">
              <svg class="u-svg-link" viewBox="0 0 24 24"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#menu-hamburger"></use></svg>
              <svg class="u-svg-content" version="1.1" id="menu-hamburger" viewBox="0 0 16 16" x="0px" y="0px" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"><g><rect y="1" width="16" height="2"></rect><rect y="7" width="16" height="2"></rect><rect y="13" width="16" height="2"></rect>
</g></svg>
            </a>
          </div>
          <div class="u-custom-menu u-nav-container">
            <ul class="u-nav u-unstyled u-nav-1"><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-1-light-2" href="Strona-główna.html" style="padding: 10px 20px;">Strona główna</a>
            </li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-1-light-2" href="rezerwacje.html" style="padding: 10px 20px;">Rezerwacja</a>
            </li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-1-light-2" href="galeria.html" style="padding: 10px 20px;">Galeria</a>
            </li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-1-light-2" href="kontakt.html" style="padding: 10px 20px;">Kontakt</a>
            </li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-1-light-2" href="wyszukaj.php" style="padding: 10px 20px;">Wyszukaj opinie</a>
            </li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-1-light-2" href="dodaj.html" style="padding: 10px 20px;">Dodaj opinie</a>
            </li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-1-light-2" href="wyświetl.php" style="padding: 10px 20px;">Wyświetl opinie</a>
            </li></ul>
          </div>
          <div class="u-custom-menu u-nav-container-collapse">
            <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
              <div class="u-inner-container-layout u-sidenav-overflow">
                <div class="u-menu-close"></div>
                <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Strona-główna.html">Strona główna</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="rezerwacje.html">Rezerwacja</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="galeria.html">Galeria</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="kontakt.html">Kontakt</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="wyszukaj.html">Wyszukaj opinie</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="dodaj.html">Dodaj opinie</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="wyświetl.html">Wyświetl opinie</a>
</li></ul>
              </div>
            </div>
            <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
          </div>
        </nav>
      </div></header>
        
    </form>
<br><br>
<?php


$con = new mysqli("127.0.0.1", "root", "", "ksiega");

$q="SELECT * FROM ksiega";

if($wynik=$con->query($q)){
  echo"<form action='usunienty.php' method='get' enctype='text/plain'>";
    echo "<table id='tabelka'>";
    echo    "<tr>";
  
    echo "<td></td>";
    echo "<td id='first'>ID</td>";
    echo "<td id='first'>Imie</td>";
     echo "<td id='first'>Wpis</td>";
     echo "<td id='first'>Ocena hotelu</td>";
     echo "<td id='first'>Ocena czystości</td>";
     echo "<td id='first'>Zdjęcie</td>";
     echo "<td id='first'>Data wpisu</td>";
     echo "<td id='first'>Pokój</td>";
     echo "</tr>";
     
while($row=$wynik->fetch_array()){
    echo "<tr>";
  echo "<td> <input type='radio' name='jj' id='".$row["id"] ."'value='".$row["id"]."'></input></td>";
  echo "<td id='duo'>".$row["id"] .  "</td>";
echo "<td id='duo'>" .$row["imie"] .  "</td>";
echo "<td id='duo'>" .$row["wpis"] .  "</td>";
echo "<td id='duo'>" .$row["hotel"] .  "</td>";
echo "<td id='duo'>" .$row["czystosc"] .  "</td>";
echo "<td id='duo'>" .$row["image_path"] .  "</td>";
echo "<td id='duo'>" .$row["czas"] .  "</td>";
echo "<td id='duo'>" .$row["rodzaj"] .  "</td>";


echo"</tr>";

}
//echo"<tr>";
//echo "<td colspan='7'>" ."<input type='submit' id='przycisk' value='Usuń'>".  "</td>";
//echo"</tr>";
echo"</table>";
echo"<div id='rama'>";
echo "<input class='u-active-palette-5-light-1 u-border-none u-btn u-btn-round u-btn-submit u-button-style u-hover-palette-5-dark-2 u-palette-5-dark-1 u-radius-12 u-btn-1' type='submit' value='Usuń'>";
echo"</div>";
}

else{
echo $con->errno . " " . $con->error;}
?>
    <section class="u-clearfix u-section-1" id="sec-fae7">
      <div class="u-clearfix u-sheet u-sheet-1"></div>
    </section>
    
    
    
    <footer class="u-clearfix u-footer u-grey-80" id="sec-ec2b"><div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-align-left u-social-icons u-spacing-10 u-social-icons-1">
          <a class="u-social-url" title="facebook" target="_blank" href="https://www.facebook.com/pinkipaj.to.ja/"><span class="u-icon u-social-facebook u-social-icon u-icon-1"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-3947"></use></svg><svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0" id="svg-3947"><circle fill="currentColor" cx="56.1" cy="56.1" r="55"></circle>
            <img src="fb.png" width='32px'  height='32px'  />
          </svg></span>
          </a>
          <a class="u-social-url" title="instagram" target="_blank" href="https://www.instagram.com/eatassnotgrass/"><span class="u-icon u-social-icon u-social-instagram u-icon-2"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-b563"></use></svg><svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0" id="svg-b563"><circle fill="currentColor" cx="56.1" cy="56.1" r="55"></circle>
            <img src="insta.png" width='32px'  height='32px'  />
          </svg></span>
          </a>
          <a class="u-social-url" target="_blank" data-type="Phone" title="Phone" href="tel:512999999"><span class="u-icon u-social-icon u-social-phone u-icon-3"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-6b7b"></use></svg><svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0" id="svg-6b7b"><circle fill="currentColor" cx="56.1" cy="56.1" r="55"></circle>
            <img src="tel.png" width='32px'  height='32px'/>
          </svg></span>
          </a>
        </div><span class="u-icon u-text-palette-1-base u-icon-4" data-href="zal.php" ><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 55 55" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-e61b"></use></svg><svg class="u-svg-content" viewBox="0 0 55 55" x="0px" y="0px" id="svg-e61b" style="enable-background:new 0 0 55 55;">
          <img src="c.png" width='64px'  height='64px' />
        </svg></span>
      </div></footer>

  
</body></html>