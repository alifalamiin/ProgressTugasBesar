<?php
 session_start();

    require 'fungsi.php';

    if(isset($_POST['submit']))
    {

        var_dump($_POST);
        var_dump($_FILES);
        die();

        if(tambah($_POST>0))
        {
            echo "
        <script>
            alert('data berhasil disimpan');
            document.location.href='blank.php';
        </script>";
        }
    else
    {
        echo "
        <script>
            alert('data gagal disimpan');
            document.location.href='Blank.php';
        </script>";
        echo "<br>";
        echo mysqli_error($conn);
    }
    }
?>

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
<style type="text/css">
        .class{

        }
        #id{

        }
        body{
            background-color: yellow;
            background-image: url('img/obat.jpg');
            background-size: cover;
        }
    </style>
<body>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <center>
    <h1>Tambah Data Obat</h1>
    <form action="" method="post" enctype="multipart/form-data"> 
    <ul>
    <div class="row">
            <label class="col-md-2 col-form-label">Obat</label>
            <div class="col-md-9">
                <input type="text" name="obat" id="" class="form-control" required>
            </div>
        </div>

        <div class="row">
            <label class="col-md-2 col-form-label">Kode</label>
            <div class="col-md-9">
                <input type="text" name="kode" id="" class="form-control" required>
            </div>
        </div>

        <div class="row">
            <label class="col-md-2 col-form-label">Produsen</label>
            <div class="col-md-9">
                <input type="text" name="produsen" id="" class="form-control" required>
            </div>
        </div>

        <div class="row">
            <label class="col-md-2 col-form-label">Gambar</label>
            <div class="col-md-9">
                <input type="text" name="gambar" id="" class="form-control">
            </div>
        </div><br>
            <button type="submit" name="submit" class='btn btn-success'>Tambah</button>
    </ul></center>
    </form>
</body>
</html>