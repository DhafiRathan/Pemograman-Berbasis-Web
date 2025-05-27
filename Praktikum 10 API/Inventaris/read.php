<?php
require 'db.php';  

$sql = "SELECT * FROM barang";
$stmt = $conn->query($sql);
$data = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($data);
?>