<?php
$pageTitle = "Přidání tarifu"; // název stránky - NEODSTRAŇUJ!
include 'header.php'; // vloží předchystané menu ze šablony - NEODSTRAŇUJ!
include 'db.php';

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $nazev = $_POST["nazev"];
    $typ = $_POST["typ"];
    $cena = $_POST["cena"];

    $sql = "INSERT INTO tarify(nazev,typ,cena) VALUES ('$nazev','$typ','$cena')";

    if (mysqli_query($mysqli, $sql) === TRUE) {
        echo "Data byla úspěšně přidána.";
    } else {
        echo "Chyba při přidávání dat: " . $mysqli->error;
    }
}

?>

<form method="post" action="pridej_tarif.php">
   název: <input type="text" name="nazev" id="nazev"><p>
   typ tarifu: <input type="text" name="typ" id="typ"><p>
   cena: <input type="number" name="cena" id="cena"><p>
    <input type="submit" value="odeslat">
</form>