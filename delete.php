<?php
include 'header.php';
require 'konfigurasi.php';

$dataId = $_POST['id'];
HapusData($dataId);

header("Location: index.php");
?>