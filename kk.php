<!DOCTYPE html>
<html lang="PL">
<head>
<meta charset="UTF-8">
<link rel="shortcut icon" href="icoo.ico">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel = "stylesheet" href = "dodaj.css" >
    <title>Wyświetlanie</title>
</head>
<body>
   
<header><br>
        
        <img src="logo.png" alt="logo" id="loggo" /><br>
       
        <ul id="menu" > 
          <li><a href="glowna.html"> &nbsp Strona główna &nbsp  </a></li> 
            <li><a href="rezerwacje.html"> &nbsp Rezerwacja &nbsp  </a></li>
            <li><a href="kk.php"> &nbsp Opinie &nbsp  </a></li>
            <li><a href="wyszukaj.php"> &nbsp Wyszukaj wpis &nbsp  </a></li>
            <li><a href="wpis.html"> &nbsp Dodaj wpis &nbsp  </a></li>
            <li><a href="glowna.html"> &nbsp O nas &nbsp  </a></li>
            </ul>
            <marquee bgcolor=#4572CC>Wrońska przystań ♥ ♥ ♥ Sramy na ceny innych hoteli</marquee>
            
                </header>


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
            echo "<p><strong>Imię:</strong> " . $row["imie"] . "</p>";
            echo "<p><strong>Data dodania:</strong> " . $row["czas"] . "</p>";
            echo "<p><strong>Rodzaj pokoju:</strong> " . $row["rodzaj"] . "</p>";
            echo "<p><strong>Ocena hotelu:</strong> " . $row["hotel"] . "</p>";
            echo "<p><strong>Ocena czystości:</strong> " . $row["czystosc"] . "</p>";
            echo "<p><strong>Wiadomość:</strong> " . $row["wpis"] . "</p>";
            
            if (!empty($row["image_path"])) {
                echo '<img src="' . $row["image_path"] . '" alt="zdj"high="200" width="200"><br>';
            }
            echo "<hr>";
        }
    } else {
        echo "Brak wpisów w księdze gości.";
    }

    
    $con->close();
    ?>
</body>
</html>
