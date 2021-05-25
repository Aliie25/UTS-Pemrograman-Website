<?php
include 'header.php';
require 'konfigurasi.php';


$data = [
    'id' => '',
    'judul' => '',
    'author' => '',
    'desc' => '',
    'tanggal' => '',
    'extension' => '',
];


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = array_merge($data, $_POST);
        $data = BuatData($_POST);
        header("Location: index.php");

}
include 'form.php';
?>