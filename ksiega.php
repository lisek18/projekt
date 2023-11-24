<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    
    $con = new mysqli("127.0.0.1", "root", "", "ksiega");

    if ($con->connect_error) {
        die("Błąd połączenia z bazą danych: " . $con->connect_error);
    }

    $imie = $_POST["imie"];
    $wpis = $_POST["wpis"];
    $hotel = $_POST["hotel"];
    $czystosc = $_POST["czystosc"];
    $rodzaj = $_POST["rodzaj"];
    $image_path = "";

    if (isset($_FILES["image"]) && $_FILES["image"]["error"] === 0) {
        $image_path = "zdj/" . $_FILES["image"]["name"];
        move_uploaded_file($_FILES["image"]["tmp_name"], $image_path);
    }

    
    $insert_q = "INSERT INTO ksiega (imie, wpis, hotel, czystosc, image_path, rodzaj) VALUES ('$imie', '$wpis', $hotel, $czystosc, '$image_path','$rodzaj')";

    if ($con->query($insert_q) === TRUE) {
        echo "Wpis został dodany.";
    } else {
        echo "Błąd podczas dodawania wpisu: " . $con->error;
    }

    $con->close();
    header('Location:wyświetl.php');
}
?>
