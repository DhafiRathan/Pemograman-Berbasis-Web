<?php
require 'db.php';

$data = json_decode(file_get_contents("php://input"));

if (!$data || !isset($data->nama) || !isset($data->jumlah) || !isset($data->harga)) {
    http_response_code(400); 
    echo json_encode(["message" => "Data tidak lengkap atau tidak valid"]);
    exit;
}

$sql = "INSERT INTO barang (nama, jumlah, harga) VALUES (?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->execute([$data->nama, $data->jumlah, $data->harga]);

echo json_encode(["message" => "Barang berhasil ditambahkan"]);
?>
