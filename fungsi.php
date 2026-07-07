<?php

    $koneksi = mysqli_connect("localhost", "root", "", "answeekly-bti");

    function tampildata($query)
    {
        global $koneksi;
        $result = mysqli_query($koneksi, $query); 

        $rows = [];
        while($row = mysqli_fetch_assoc($result))
        {
            $rows[] = $row;
        }

        return $rows;
    }

    function hapusdata($id)
    {
        global $koneksi;
        $query = "DELETE FROM mahasiswa WHERE id=$id";
        mysqli_query($koneksi, $query);

        return mysqli_affected_rows($koneksi);
    }

    function tambahdata($data, $files)
    {
        global $koneksi;

        $nama = htmlspecialchars($data["nama"]);
        $nim = htmlspecialchars($data["nim"]);
        $prodi = htmlspecialchars($data["jurusan"]);
        $email = htmlspecialchars($data["email"]);
        $nohp = htmlspecialchars($data["nohp"]);
        
        $namafoto = $files["name"];
        $tmpfoto = $files["tmp_name"];

        $path = "images/$namafoto";

        if(move_uploaded_file($tmpfoto,$path))
        {
            $query = "INSERT INTO mahasiswa (nama,nim,prodi,email,no_hp,foto) VALUES ('$nama','$nim','$prodi','$email','$nohp','$namafoto')";
            mysqli_query($koneksi, $query);
        }

        return mysqli_affected_rows($koneksi);

    }


    function editdata($data, $id)
    {
        global $koneksi;

        $nama = htmlspecialchars($data["nama"]);
        $nim = htmlspecialchars($data["nim"]);
        $prodi = htmlspecialchars($data["jurusan"]);
        $email = htmlspecialchars($data["email"]);
        $nohp = htmlspecialchars($data["nohp"]);
        $foto = $data["foto"];

        $query = "UPDATE mahasiswa SET 
                    nama='$nama',
                    nim='$nim',
                    prodi='$prodi',
                    email='$email',
                    no_hp='$nohp',
                    foto='$foto'
                WHERE id=$id
        ";
        mysqli_query($koneksi, $query);

        return mysqli_affected_rows($koneksi);

    }


?>