
<?php 
require ("functions.php");
require ("tampilan/head.php");
require ("tampilan/navbar.php");
require ("tampilan/footer.php");


$id = $_GET["id"]; 
$blog="SELECT * FROM blog WHERE id = $id ";
$hasil = mysqli_query($dbs,$blog);

?>


<?=$head?>
<body class="container">
<?=$navbar?>

<div style="background-color:silver; height:200px; widht:90%; margin-top:4em;"></div>

<?php while ($data=mysqli_fetch_array($hasil)) { ?>
   <h2 style="margin-top:2em;"><?= $data['judul'];?></h2>
   <p><?= $data['isi'];?></p>

<?php } ?>

<?=$footer?>