<?php
    require 'fungsi.php';

    if(isset($_POST['register']))
    {
        if(registrasi($_POST)>0)
        {
            echo "
                <style>
                    alert('user berhasil ditambahkan');
                </style>
            ";
        }
        else
        {
            echo mysqli_error($conn);
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charsey="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Form Registrasi</title>
        <style>
            label
            {
                display:block;
            }
        </style>
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
    <h1> Registrasi</h1>
    </center>
    <form action="" method="post"> 
    <ul>
        <div class="row">
            <label class="col-md-2 col-form-label">Username</label>
            <div class="col-md-9">
                <input type="text" name="username" id="" class="form-control" required>
            </div>
        </div>
        
        <div class="row">
            <label class="col-md-2 col-form-label">Password</label>
            <div class="col-md-9">
                <input type="password" name="password" id="" class="form-control" required>
            </div>
        </div>

        <div class="row">
            <label class="col-md-2 col-form-label">Konfirmasi Password</label>
            <div class="col-md-9">
                <input type="password" name="password2" id="" class="form-control" required>
            </div>
        </div>
            <button type="submit" name="register" class='btn btn-primary'>Registrasi</button>
    </ul>
</html>