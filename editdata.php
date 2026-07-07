<?php
    require 'fungsi.php';

    $id = $_GET["id"];

    $query = "SELECT * FROM mahasiswa WHERE id=$id";

    $mhs = tampildata($query)[0]; /// isinya data spesifik $id;

    
    if(isset($_POST["kirim"]))
    {
        if(editdata($_POST, $id) > 0) /// laporan
        {
            echo "<script>
            alert('Data berhasil diedit!!');
            window.location.href='mahasiswa.php';
            </script>";
        }
        else
        {
            echo "<script>
            alert('Data gagal diedit!!');
            window.location.href='mahasiswa.php';
            </script>";
        }


    }



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Mahasiswa | Teknologi Informasi</title>
</head>
<body>
    <h2>Edit Data Mahasiswa</h2>
    <form action="" method="post" >
        <table cellpadding="5px">
            <tr>
                <td><label for="nama">Nama</label></td>
                <td>:</td>
                <td><input type="text" id="nama" name="nama" required value="<?= $mhs["nama"] ?>" /></td>
            </tr>
            <tr>
                <td><label for="nim">NIM</label></td>
                <td>:</td>
                <td><input type="number" id="nim" name="nim" value="<?= $mhs["nim"] ?>" required /></td>
            </tr>
            <tr>
                <td><label for="jurusan">Jurusan</label></td>
                <td>:</td>
                <td><input type="text" id="jurusan" name="jurusan" value="<?= $mhs["prodi"] ?>" /></td>
            </tr>
            <tr>
                <td><label for="email">Email</label></td>
                <td>:</td>
                <td><input type="email" id="email" name="email" value="<?= $mhs["email"] ?>" /></td>
            </tr>
            <tr>
                <td><label for="nohp">Nomor HP</label></td>
                <td>:</td>
                <td><input type="number" id="nohp" name="nohp" value="<?= $mhs["no_hp"] ?>" /></td>
            </tr>
            <tr>
                <td><label for="foto">Foto</label></td>
                <td>:</td>
                <td><input type="text" id="foto" name="foto" value="<?= $mhs["foto"] ?>" /></td>
            </tr>
            <tr>
                <td colspan="3">
                    <button type="submit" name="kirim">Edit Data</button>
                </td>
            </tr>
        </table>
        
        
    </form>
</body>
</html>