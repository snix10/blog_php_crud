<?php 
require 'functions.php';
require ("tampilan/head.php");
require ("tampilan/navbar.php");
require ("tampilan/footer.php");

$id = $_GET["id"]; 

$ubah="SELECT * FROM blog WHERE id =" . $id;
$hasil=mysqli_query($dbs,$ubah);




 

if (isset($_POST["submit"])) {
  if(ubah($_POST) > 0 )  {
    echo "
     <script>
        alert('blog berhasil ubah');
        document.location.href = 'index.php';
     </script>
    ";

  }else {
    echo "
    <script>
       alert('blog gagal  ubah');
    </script>
    ";
  }
}

?>


<?=$head?>
<body style="background-color:silver;">
<?=$navbar?>

 <form action="" method="post">
   <?php while ($data=mysqli_fetch_array($hasil)) { ?>
   <input type="hidden" name="id" value="<?= $data["id"];?>">
    
<div class="card " style="margin-top:4em;">
<div class="card-header bg-warning">UBAH BLOG</div>
  <div class="card-body" style="background-color:silver;">
     <div class="mb-1  ">
     <label for="judul" class="form-label mt-2">JUDUL</label>
     <input id="judul" class="form-control " type="text" placeholder="Default input" aria-label="default input example " name="judul" required value="<?= $data['judul'];?>">
     </div>

     <div class="mb-1 ">
     <label for="subjudul" class="form-label mt-3">SUB JUDUL</label>
     <input id="subjudul" class="form-control " type="text" placeholder="Default input" aria-label="default input example " name="subjudul" required value="<?= $data['subjudul'];?>">
     </div>
  
     <div class="mb-3  ">
     <label for="exampleFormControlTextarea1" class="form-label mt-3">ISI</label>
     <textarea class="form-control " id="exampleFormControlTextarea1" rows="10"  type="text" name="isi" placeholder="Default input" ><?= $data['isi'];?></textarea>
     </div>
  
     <button class="btn btn-primary col-3 " type="submit" name="submit">UBAH</button>
     <a class="btn btn-secondary float-end"  href="index.php" role="button">BATAL</a>
     
  </div>
</div>  

   <?php } ?>
 </form>

<?=$footer?>