<?php
    
    $koneksi = mysqli_connect("localhost", "root", "", "answeekly-bti");

    $query = "SELECT * FROM mahasiswa";

    $result = mysqli_query($koneksi, $query); ///lemari

    /// ambil data (fetch) dari mahasiswa
    

    /// mysqli_fetch_row array numeric
    /// mysqli_fetch_assoc array associative
    /// mysqli_fetch_array array numeric/associative
    /// mysqli_fetch_object

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
</head>
<body>
    <h1 align="center">
        WEB TI ANS | 2026
    </h1>
    <table border="1" align="center" cellspacing="0" cellpadding="10px">
        <tr>
            <td>
                <a href="index.php">Home</a>
            </td>
            <td>
                <a href="profile.php">Profile</a>
            </td>
            <td>
                <a href="contact.php">Contact</a>
            </td>
            <td>
                <a href="mahasiswa.php">Data Mahasiswa</a>
            </td>
        </tr>
    </table>
    <br><br>
    <h2>Data Mahasiswa</h2>
    <a href="tambahdata.php"><button>Tambah Data</button></a>
    <table border="1" cellpadding="5px">
        <tr>
            <th>No</th>
            <th>Nama</th>  
            <th>NIM</th>
            <th>Program Studi</th>  
            <th>Email</th>
            <th>Nomor Whatsapp</th>
            <th>Foto</th>
            <th>Aksi</th>        
        </tr>

        <?php 
            while($mhs = mysqli_fetch_assoc($result))
            {
        ?>
        <tr>
            <td>1</td>
            <td><?php echo $mhs["nama"] ?></td>
            <td><?php echo $mhs["nim"] ?></td>
            <td><?= $mhs["prodi"] ?></td>
            <td><?= $mhs["email"] ?></td>
            <td><?= $mhs["no_hp"] ?></td>
            <td><img src="images/<?= $mhs["foto"] ?>" width="60px"></td>
            <td>
                <a href="editdata.php"><button>Edit</button></a> |
                <a href="deletedata.php"><button>Hapus</button></a>
            </td>
        </tr>
        <?php 
            }
        ?>
    </table>
</body>
</html>