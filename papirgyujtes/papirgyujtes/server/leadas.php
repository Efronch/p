<?php
require_once "db.php";
$sql="SELECT SUM(mennyiseg) as kg ,nev FROM leadasok,tanulok WHERE leadasok.tanulo=tanulok.tazon GROUP BY nev";
$stmt=$db->query($sql);
echo json_encode($stmt->fetchAll());
?>
