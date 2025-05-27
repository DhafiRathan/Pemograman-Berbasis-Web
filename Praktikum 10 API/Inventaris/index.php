<?php
$request = $_SERVER['REQUEST_URI'];

switch (true) {
    case $request === '/barang/create':
        require __DIR__ . '/barang/create.php';
        break;
    case $request === '/barang/read':
        require __DIR__ . '/barang/read.php';
        break;
    case preg_match('/\/barang\/read_single\/\d+/', $request):
        require __DIR__ . '/barang/read_single.php';
        break;
    case $request === '/barang/update':
        require __DIR__ . '/barang/update.php';
        break;
    case $request === '/barang/delete':
        require __DIR__ . '/barang/delete.php';
        break;
    default:
        http_response_code(404);
        echo json_encode(["message" => "Endpoint tidak ditemukan"]);
        break;
}
?>
