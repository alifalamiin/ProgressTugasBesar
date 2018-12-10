<?php
require 'fungsi.php';

if(isset($_POST['submit']))
{
    $id=$_GET["id"];
    $apotek=query("SELECT * FROM apotek WHERE id=$id")[0];
    
    if(edit($_POST)>0)
    {
        echo "
        <script>
        alert('data berhasil diperbarui');
        document.location.href='blank.php';
        </script>
        ";
    }
    else
    {
        echo "
        <script>
        alert('data gagal diperbaruhi');
        document.location.href='Blank.php';
        </script>";
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
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <title>Update Data</title>
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
    <center>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <h1> Update Data Obat</h1>

    <form action="" method="post">
    
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
                <input type="text" name="gambar" id="" class="form-control" required>
            </div>
        </div><br>
            <button type="submit" name="submit" class='btn btn-success'>Update</button>
    
    </form></center>
</body>
</html>