<?php

include "koneksi.php";

//AMBIL ID DARI HASIL LINK HAPUS

$id = $_GET['id'];

$hapus = "DELETE FROM tbl_siswa WHERE id_siswa = '$id' ";
$hasil = mysqli_query($koneksi,$hapus);

if($hasil){

    echo "
    <script>
    alert('Data Berhasil Di Hapus');
    document.location.href='tampil_siswa.php';
    </script>
    
    ";
}
?>