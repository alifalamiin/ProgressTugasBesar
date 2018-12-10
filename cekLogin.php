<?php

include "helper/connection.php";

$username = $_POST['username'];
$password = $_POST['password'];
$user = $_POST['user'];

$query = "SELECT * FROM apotekuser where username='$username' AND password = '$password'";

$hasil = mysqli_query($con,$query);

if (mysqli_num_rows($hasil) > 0)
{
    session_start();
    $_SESSION['username'] = $username;
    $_SESSION['password'] = $password;
    $_SESSION['user'] = $user;

    header('location:blank.php');
}
else
{
    echo "
    <script>
        alert ('Username atau password salah');
        document.location.href='index.php';
    </script>"; 
}


?>