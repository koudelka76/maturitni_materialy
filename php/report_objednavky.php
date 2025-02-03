<?php
$pageTitle = "Report tarifů"; // název stránky - NEODSTRAŇUJ!
include 'header.php'; // vloží předchystané menu ze šablony - NEODSTRAŇUJ!
include 'db.php';
$tarif_id=$_GET["tarif_id"];

?>

<table>
    <tr>
        <th>NÁZEV TARIFU</th>
        <th>ČÍSLO ZÁKAZNÍKA</th>
        <th>DATUM OBJEDNÁVKY</th>
    </tr>
<?php
if($_SERVER["REQUEST_METHOD"] === "GET") {

    $sql = "SELECT tarify.nazev, objednavky.zakaznik, objednavky.datum FROM tarify, objednavky
        WHERE '$tarif_id' = tarify.ID AND tarify.ID = objednavky.sluzba_id";
    $result = $mysqli->query($sql);

}
    while($row = $result->fetch_assoc()): ?>
    <tr>
        <td><?= $row["nazev"] ?></td>
        <td><?= $row["zakaznik"] ?></td>
        <td><?= $row["datum"] ?></td>
    </tr>
    <?php endwhile; ?>

</table>