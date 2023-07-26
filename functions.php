<?php 
//koneksi ke data base
$dbs = mysqli_connect("localhost","root","","dbblog");

//nama tabel yang dipilih
$blog = "SELECT * FROM blog";





function tulis($saepulloh){
    global $dbs;
    $judul =htmlspecialchars ($saepulloh["judul"]);
    $subjudul =htmlspecialchars ($saepulloh["subjudul"]);
    $isi = ($saepulloh["isi"]);
   
    $tulis= "INSERT INTO blog(judul,subjudul,isi) VALUES ('$judul','$subjudul','$isi')";
    mysqli_query($dbs,$tulis);

     return mysqli_affected_rows($dbs);
    }



function hapus ($id) {
    global $dbs;
    mysqli_query($dbs,"DELETE FROM blog WHERE id = $id");
    return mysqli_affected_rows($dbs);
}

function ubah($saepulloh){
    global $dbs;
    $id = $saepulloh ["id"];
    $judul =htmlspecialchars ($saepulloh["judul"]);
    $isi =htmlspecialchars ($saepulloh["isi"]);
   
    $ubah= "UPDATE blog SET 
    
               judul = '$judul' ,
               isi = '$isi' 
               
               WHERE id  = $id  
               ";

     mysqli_query($dbs,$ubah);

     return mysqli_affected_rows($dbs);
 }


 




?>