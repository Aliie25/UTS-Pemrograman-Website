
  <!-- Page Header -->
  <header class="masthead" style="background-image: url('css/black.jpg')">
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
  
  <div class="container">
    <div class="card">
        <div class="card-header">
            <h3>
            <?php if ($data['id']): ?>
                    Update Content <b><?php echo $data['judul'] ?></b>
                <?php else: ?>
                    Create New Content
                <?php endif ?>             
            </h3>
        </div>
        <div class="card-body">
            <form method="POST" enctype="multipart/form-data"
                  action="">
                    <div class="form-group">
                    <label>Judul</label>
                    <input name="judul" required="" value="<?php echo $data['judul'] ?>"
                           class="form-control">
                    </div>
                    <div class="form-group">
                    <label>Penulis</label>
                    <input name="author" required="" value="<?php echo $data['author'] ?>"
                           class="form-control">
                    </div>
                    <div class="form-group">
                    <label>Tanggal</label>
                    <input type="datetime-local" name="tanggal" required="" value="<?php echo $data['tanggal'] ?>"
                           class="form-control">
                    </div>
                    <div class="form-group">
                    <label>Deskripsi</label>
                    <textarea class="form-control" name="desc" rows="10" required=""> <?php echo $data['desc']?>
                    </textarea>
                    <br>
                <center>
                <button class="btn-success">Upload</button>
                <input type="button" class="btn-danger" value="Cancel" onclick="history.go(-1)"></input>
                </center>
            </form>
        </div>
    </div>
</div>