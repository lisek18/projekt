<!DOCTYPE html>
<html style="font-size: 16px;" lang="pl"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>wyświetl</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="wyświetl.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 6.0.3, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    
    <link rel="icon" type="image/x-icon" href="/images/ikona.ico">
    
    <style>
        
        #goToTop {
            position: fixed;
            bottom: 20px;
            right: 20px;
            cursor: pointer;
            display: none;
            z-index: 9999;
        }
    </style>

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
        function skrocOpinie(opiniaId) {
            var opinia = document.getElementById(opiniaId);
            var opiniaTekst = opinia.innerHTML;
            var skroconaOpinia = opiniaTekst.split(' ').slice(0, 10).join(' '); // Skróć do 10 słów
            opinia.innerHTML = skroconaOpinia + '... <a  onclick="pokazWiecej(\'' + opiniaId + '\')">Pokaż więcej</a>';
        }

        function pokazWiecej(opiniaId) {
    var opinia = document.getElementById(opiniaId);
    var opiniaTekst = opinia.getAttribute('data-pelna-opinia');
    opinia.innerHTML = opiniaTekst;
}

    </script>

    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="wyświetl">
    <meta property="og:type" content="website">
  <meta data-intl-tel-input-cdn-path="intlTelInput/"></head>
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
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-1-light-2" href="wyszukaj.html" style="padding: 10px 20px;">Wyszukaj opinie</a>
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
      <h1>Wpisy w Księdze Gości</h1>
      <hr>
      <?php
$con = new mysqli("127.0.0.1", "root", "", "ksiega");

if ($con->connect_error) {
    die("Błąd połączenia z bazą danych: " . $con->connect_error);
}
$select_q = "SELECT * FROM ksiega";
$result = $con->query($select_q);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<h3>Opinia od {$row['imie']}</h3>";
        echo "<p><strong>Data dodania:</strong> " . $row["czas"] . "</p>";
        echo "<p><strong>Rodzaj pokoju:</strong> " . $row["rodzaj"] . "</p>";
        echo "<p><strong>Ocena hotelu:</strong> " . $row["hotel"] . "</p>";
        echo "<p><strong>Ocena czystości:</strong> " . $row["czystosc"] . "</p>";
        echo "<p><strong>Wiadomość:</strong> " . "</p>";
        $opiniaId = $row['id'];
        $pelnaOpinia = $row['wpis'];
        echo "<div id='opinia$opiniaId' data-pelna-opinia='$pelnaOpinia'>";
       
        echo "<p>{$row['wpis']}</p>";
        echo "<script>skrocOpinie('opinia$opiniaId');</script>";
        echo "</div>";
        if (!empty($row["image_path"])) {
          echo '<img src="' . $row["image_path"] . '" alt="zdj" high="200" width="200"><br>';
      }
        echo "<hr>";
    }
} 

       
        

$con->close();
?>



    <section class="u-clearfix u-section-1" id="sec-d3e3">
      <div class="u-clearfix u-sheet u-sheet-1"></div>
    </section>
    
    
    <a href="#" id="goToTop" onclick="scrollToTop()">
        <img src="s.jpeg" alt="Strzałka do góry" width="50" height="50">
    </a>

    <script>
       
        function scrollToTop() {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        }

        window.onscroll = function () {
            var scrollToTopBtn = document.getElementById('goToTop');

            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                scrollToTopBtn.style.display = 'block';
            } else {
                scrollToTopBtn.style.display = 'none';
            }
        };
    </script>
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