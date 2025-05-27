<?php
require 'db.php';

$data = json_decode(file_get_contents("php://input"));

$sql = "UPDATE barang SET nama = ?, jumlah = ?, harga = ? WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->execute([$data->nama, $data->jumlah, $data->harga, $data->id]);

echo json_encode(["message" => "Barang berhasil diperbarui"]);
?>