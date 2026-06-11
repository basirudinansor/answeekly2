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
        <tr>
            <td>1</td>
            <td>Fiqri Ilhami</td>
            <td>123123123123</td>
            <td>Teknologi Informasi</td>
            <td>fiqri@gmail.com</td>
            <td>087766552312</td>
            <td><img src="images/logo.jpg" width="60px"></td>
            <td>
                <a href="editdata.php"><button>Edit</button></a> |
                <a href="deletedata.php"><button>Hapus</button></a>
            </td>
        </tr>
    </table>
</body>
</html>