<?php
require ("tampilan/navbar.php");
require ("tampilan/head.php");
require ("tampilan/footer.php");
require ("functions.php");

$hasil = mysqli_query($dbs,$blog);



?>

<?= $head ?>
<body class="container">
  <?= $navbar ?>

  <div style="background-color:silver; height:200px; widht:90%; margin-top:4em;"></div>
  
  <h1 class="mt-2" >BLOG</h1>
  <h5>dibuat oleh Saepulloh</h5>
  <p>blog sederhana dengan CRUD php dan bootstrap</p>
  <a class="btn btn-primary my-3 col-3" href="tulis.php">tulis blog</a>
 
  <form action="" method="post">
    <input type="text" name="keyword" placeholder="cari..." autocomplete="off">
    <button type="submit" name="cari">cari</button>
</form>
  
  <hr style="color:black;"> 

  <div class="row row-cols-1 row-cols-md-3 g-4 mt-3">
  <?php while ($data=mysqli_fetch_array ($hasil)){ ?>
     
    <div class="col ">
      <div class="card h-100">
        <img src="" class="card-img-top" style="height: 200px;" alt="...">
        <div class="card-body">
          <h5 class="card-title"> <?=   $data  ['judul'] ; ?> </h5>  
          <p class="card-text"> <?=    $data  ['subjudul'] ; ?> </p>
        </div>

        <div class="card-footer">
          <div class="float-end">
            <a class="btn btn-warning" href="ubah.php?id=<?=$data["id"];?>">ubah</a>
            <a class="btn btn-danger" href="hapus.php?id=<?=$data["id"];?>" onclick="return confirm('hapus');">
            <small class="text-body-secondary">hapus</small></a><br>
          </div>
          <small class="text-body-secondary"><a class="ml-3 btn btn-primary" href="blog.php?id=<?=$data["id"];?>">lihat</a></small>
        </div>
      </div>
    </div>

    <?php } ?>
  </div>

 <?=$footer?>