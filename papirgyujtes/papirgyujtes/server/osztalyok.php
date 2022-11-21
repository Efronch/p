<?php
require_once "db.php";
$sql="SELECT DISTINCT(osztaly) FROM tanulok order by osztaly";
$stmt=$db->query($sql);
echo json_encode($stmt->fetchAll());
?>