<?php
require_once "db.php";
$sql="SELECT SUM(mennyiseg) as kg ,osztaly FROM leadasok,tanulok WHERE leadasok.tanulo=tanulok.tazon GROUP BY osztaly";
$stmt=$db->query($sql);
echo json_encode($stmt->fetchAll());
?>
