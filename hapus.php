<?php
include("koneksi.php");
$hapus=mysqli_query($koneksi,"DELETE FROM tamu WHERE id=$_GET[id]");
if ($hapus){
    header ("Location: list.php");
}else{
    print "GAGAL menghapus data";
}
?>