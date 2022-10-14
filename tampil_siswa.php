<?php
include "koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, intial-scale=1.0">
    <title>Document</title>
    <link href="table.css" rel="stylesheet" type="text/css">
</head>
<body>

<a href="form_input_siswa.php">Tambah Data</a>

    <h2>TAMPIL DATA SISWA</h2>
    
    <table border="1" id="customers">
        <tr>
            <th>NO</th>
            <th>NIS</th>
            <th>NAMA SISWA</th>
            <th>ALAMAT</th>
            <th>FOTO</th>
            <th>AKSI</th>
        </tr>
    <?php
    $no=1;
    while ($data=mysqli_fetch_array($hasil)){
        echo"
            <tr>
            <td>$no<?td>
            <td>$data[nis]</td>
            <td>$data[nama_siswa]<?td>
            <td>$data[alamat]</td>
            <td><img src=\"gambar/$data[foto]\"width=\"50px\" height=\"50px]\"></td>
            <td>EDIT || HAPUS</td>
        </tr>
            ";
            $no++;
    }

    ?>
    </table>
<br>
    <strong>JUMLAH DATA SISWA <?php echo $total ?>
</strong>
</body>
</html>