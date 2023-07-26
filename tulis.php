<?php 
require 'functions.php';
require ("tampilan/head.php");
require ("tampilan/navbar.php");
require ("tampilan/footer.php");


if (isset($_POST["submit"])) {
  if(tulis($_POST) > 0 )  {
    echo "
     <script>
        alert('blog berhasil ditambahkan');
        document.location.href = 'index.php';
     </script>
    ";

  }else {
    echo "
    <script>
    alert('blog gagal  ditambahkan');
 </script>
    ";
  }
}

?>

<?=$head?>
<body>
<?=$navbar?>

<form action="" method="post">
  <div class="card " style="margin-top:4em;">
    <div class="card-header bg-primary">TULIS BLOG</div>
  <div class="card-body" style="background-color:silver;">
     <div class="mb-1  ">
     <label for="judul" class="form-label mt-2">JUDUL</label>
     <input id="judul" class="form-control " type="text"  aria-label="default input example " name="judul" required >
     </div>

     <div class="mb-3  ">
     <label for="subjudul" class="form-label mt-2">SUBJUDUL</label>
     <input id="subjudul" class="form-control " type="text"  aria-label="default input example " name="subjudul" required >
     </div>

     <div class="mb-3  ">
     <label for="isi" class="form-label mt-2">ISI</label>
     <textarea id="isi" class="form-control " type="text"  aria-label="default input example " name="isi" required rows="10"></textarea>
     </div>
   
     <button class="btn btn-primary col-3 " type="submit" name="submit">UPLOAD</button>
     <a class="btn btn-secondary float-end"  href="index.php" role="button">BATAL</a>
    </div>
  </div>
</form>

<?=$footer?>