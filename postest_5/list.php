<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="login.css">
        <title>admin area</title>
    </head>
    <body>
        <div class="container">
            <a href="tambah.php" class="tambah">tambah barang</a>
            <div class="isi">

        <table border="2">
            <tr>
                <td>NOMOR</td>
                <td>judul</td>
                <td>KATEGORI</td>
                <td>TANGGAL RILIS</td>
                <td>MENU</td>
            </tr>
            <?php 
            require "konek.php";
            $value = mysqli_query($konek,"SELECT*FROM jadwal");
            $i=1;
            while($row = mysqli_fetch_array($value)){
                echo"
            <tr>
                <td>$i</td>
                <td>$row[judul]</td>
                <td>$row[kategori]</td>
                <td>$row[tanggal]</td>
                <td>
                    <a href='edit.php ? kode=$row[id]'>ubah</a>
                    <a href ='hapus.php ? kode=$row[id]'>hapus</a>
                </td>
            </tr>";}
            $i++; ?>
        </table>
                
            </div>
        </div>
    </body>
</html>