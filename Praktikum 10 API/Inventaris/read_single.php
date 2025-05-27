<?php
require 'db.php';

$id = explode("/", $_SERVER['REQUEST_URI'])[3];

$sql = "SELECT * FROM barang WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->execute([$id]);
$data = $stmt->fetch(PDO::FETCH_ASSOC);

echo json_encode($data);
?>