<?php
include 'header.php';
require __DIR__.'/konfigurasi.php';

if(!isset($_GET['id'])){
    include 'maaf.php';
    exit;
}

$dataId = $_GET['id'];

$data = AmbilDataById($dataId);

if (!$data) {
    include 'maaf.php';
    exit;
}
   
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
 $data =  updateData($_POST,$dataId);
    header("location:read.php?id=$dataId");

}

?>

<?php
  include'form.php';
?>