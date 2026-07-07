<?php 
    require 'fungsi.php';
    $query = "SELECT * FROM mahasiswa";
    $mahasiswas = tampildata($query); /// wadah isi data

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
            $no = 1;
            foreach($mahasiswas as $mhs)
            {
        ?>
        <tr>
            <td><?= $no ?></td>
            <td><?php echo $mhs["nama"] ?></td>
            <td><?php echo $mhs["nim"] ?></td>
            <td><?= $mhs["prodi"] ?></td>
            <td><?= $mhs["email"] ?></td>
            <td><?= $mhs["no_hp"] ?></td>
            <td><img src="images/<?= $mhs["foto"] ?>" width="60px"></td>
            <td>
                <a href="editdata.php?id=<?= $mhs["id"] ?>"><button>Edit</button></a> |
                <a href="hapusdata.php?id=<?= $mhs["id"] ?>" onclick="return confirm('Yaqueeenn???')" ><button>Hapus</button></a>
            </td>
        </tr>
        <?php 
            $no++;
            }
        ?>
    </table>
</body>
</html>