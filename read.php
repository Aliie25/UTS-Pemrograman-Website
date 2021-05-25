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


?>

  <!-- Page Header -->
  <header class="masthead" style="background-image: url('css/black.jpg')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="post-heading">
            <h1><?php echo $data['judul'] ?></h1>
            <span class="meta">Posted by
              <a href="#"><?php echo$data['author'] ?></a>
              on <?php echo $data['tanggal'] ?></span>
          </div>
        </div>
      </div>
    </div>
  </header>

 <!-- Post Content -->
 <article>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
        <p class="post-meta">Posted by
            <a href="#"><?php echo$data['author'] ?></a>
            on <?php echo$data['tanggal'] ?></p>
          <h2 class="section-heading"><?php echo $data['judul'] ?></h2>
          <p><?php echo $data['desc'] ?></p>
          <p>
            <button class="btn-primary" style="float:left; margin-right:10px;" onclick="window.location.href='edit.php?id=<?php echo $data['id']?>'">Edit</button>  
            <form method="POST" action="delete.php">
                        <input type="hidden" name="id" value="<?php echo $data['id'] ?>">
                        <button class="btn-danger">Delete</button>
            </form>
          </p>
          
        </div>
      </div>
    </div>
  </article>

<?php

include'footer.php';

?>