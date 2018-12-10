<?php
    //buat koneksi
    $conn=mysqli_connect("localhost","root","","phpdatabase");

    //cek apakah button submit sudah ditekan atau belum
    if(isset($_POST['submit']))
    {
        //ambil data dri tiap elemen dalam form yang disimpan di variable baru
        $obat=$_POST["obat"];
        $kode=$_POST["kode"];
        $produsen=$_POST["produsen"];
        $gambar=$_POST["gambar"];

        //query inserrt data
        $query="INSERT INTO apotek 
                VALUES
                ('','$obat','$kode','$produsen','$gambar')";
        mysqli_query($conn,$query);

        //cek sukses data ditambah menggunakan mysqli_affected_rows
        //jika kita var_dump maka akan muncul int(1) jika gagal maka akan muncul int(-1)
        //var_dump(mysqli_affected_rows($conn));

        if(mysqli_affected_rows($conn)>0)
        {
            echo "data berhasil disimpan";
        }
        else
        {
            echo "gagal!";
            echo "<br>";
            echo mysqli_error($conn);
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Data</title>
</head>
<body>
    <h1>Tambah Data Obat</h1>
    <form action="" method="post">
    <ul>
        <li>
            <label for="obat">Obat</label>
            <input type="text" name="obat" id="obat">
        </li>
        <li>
            <label for="kode">Kode</label>
            <input type="text" name="kode" id="kode">
        </li>
        <li>
            <label for="produsen">Produsen</label>
            <input type="text" name="produsen" id="produsen">
        </li>
        <li>
            <label for="gambar">Gambar</label>
            <input type="text" name="gambar" id="gambar">
        </li>
        <li>
            <button type="submit" name="submit">Tambah</button>
        </li>
    </ul>
    </form>
</body>
</html>