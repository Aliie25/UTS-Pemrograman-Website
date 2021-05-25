<?php

require 'konfigurasi.php';
$alldata = AmbilData();

include'header.php';
?>

  <!-- Page Header -->
  <header class="masthead" style="background-image: url('img/black.jpg')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="site-heading">
            <h1>Alie's Blog</h1>
            <span class="subheading">Disini Tempat Kita Bercerita Banyak Hal</span>
          </div>
        </div>
      </div>
    </div>
  </header>


  <!-- Main Content -->
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
      <?php foreach ($alldata as $data ):?>
        <div class="post-preview">
          <a href="read.php?id=<?php echo $data['id']?>">
             <h2 class="post-title">
              <?php echo$data['judul']?>
            </h2>
            <h3 class="post-subtitle">
            <?php echo substr($data['desc'],0,45)."..."; ?>
            </h3>
          </a>
          <p class="post-meta">Posted by
            <a href="#"><?php echo $data['author'] ?></a>
            on <?php echo $data['tanggal']?></p>
        </div>
        <hr>
        <?php endforeach; ; ?>

        <!-- Button -->
        <div class="clearfix">
        <center><a class="btn btn-secondary" href="create.php">Tambahkan Data</a></center>
        </div>
      </div>
    </div>
  </div>
<?php

include'footer.php';
?>