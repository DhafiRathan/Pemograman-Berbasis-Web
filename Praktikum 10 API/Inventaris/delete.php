<?php
require 'db.php';

$data = json_decode(file_get_contents("php://input"));

$sql = "DELETE FROM barang WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->execute([$data->id]);

echo json_encode(["message" => "Barang berhasil dihapus"]);
?>
