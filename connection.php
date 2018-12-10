<?php

$con = mysqli_connect("localhost","root","","phpdatabase");

if(mysqli_connect_errno())
{
    echo "Gagal Koneksi ke MySQL";
}

?>