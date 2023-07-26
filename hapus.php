<?php
require'functions.php';
$id = $_GET["id"];

if (hapus($id) > 0) {

    echo "
    <script>
       alert('blog berhasil hapus');
       document.location.href = 'index.php';
    </script>
   ";

 }else {
   echo "
   <script>
   alert('blog gagal  hapus');
</script>
   ";
}


?>