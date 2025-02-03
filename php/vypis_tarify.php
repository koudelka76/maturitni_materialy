<?php
$pageTitle = "Výpis tarifů"; // název stránky - NEODSTRAŇUJ!
include 'header.php'; // vloží předchystané menu ze šablony - NEODSTRAŇUJ!
include 'db.php';
?>

<table>
    <th>ID</th>
    <th>NAZEV</th>
    <th>TYP</th>
    <th>CENA</th>
    </thead>

<?php
$sql ="SELECT * FROM tarify";
$result = $mysqli->query($sql);
while($row = $result->fetch_assoc()): ?>
    <tr>
        <td><?=$row["ID"]?></td>
        <td><?=$row["nazev"]?></td>
        <td><?=$row["typ"]?></td>
        <td><?=$row["cena"]?></td>
    </tr>
<?php endwhile?>

</table>