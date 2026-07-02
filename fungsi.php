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

    function tambahdata($data)
    {
        global $koneksi;

        $nama = htmlspecialchars($data["nama"]);
        $nim = $data["nim"];
        $prodi = $data["jurusan"];
        $email = $data["email"];
        $nohp = $data["nohp"];
        $foto = $data["foto"];

        $query = "INSERT INTO mahasiswa (nama,nim,prodi,email,no_hp,foto) VALUES ('$nama','$nim','$prodi','$email','$nohp','$foto')";
        mysqli_query($koneksi, $query);

        return mysqli_affected_rows($koneksi);

    }


?>