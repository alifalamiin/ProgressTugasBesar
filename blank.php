<?php include "helper/connection.php"; 
session_start();
$user = $_SESSION['user'];

if (isset($_POST["cari"]))
{
    $apotek = cari($_POST["keyword"]);
}

?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>APOTEK</title>
    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>

<body>



    <div id="wrapper">
        <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="adjust-nav">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">
                        <img src="assets/img/logo.jpg" width="85px" />
                    </a>
                </div>

                <span class="logout-spn">
                    <a href="logout.php" style="color:#fff;">LOGOUT</a>

                </span>
            </div>
        </div>
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li class="active-link">
                        <a href="blank.php"><i class="fa fa-edit "></i>Data Obat <span class="badge"></span></a>
                    </li>
                </ul>
            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h2>DATA OBAT </h2>
                    </div>
                    <div class="col-md-12">
                        <?php 
                        if($user == 'Admin')
                        {  ?>
                        <a href='tambah_data.php' class='btn btn-success'>Tambah Data</a>
                        <?php }
                        else
                        { ?>
                        <input type="text" name="keyword" size="40" autofocus placeholder="Masukkan keyword pencarian" autocomplete="off">
                        <button type="submit" name="cari" class="btn btn-primary"> Search </button>
                        <?php } ?>
                    </div>
                </div>
                <!-- /. ROW  -->
                <hr />
                <div class="row">
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="table table-striped text-center mt-3">
                                <thead>
                                    <tr>
                                        <td>ID</td>
                                        <td>Obat</td>
                                        <td>Kode</td>
                                        <td>Produsen</td>
                                        <td>Gambar</td>
                                        <?php 
                                        if($user == 'Admin')
                                        { 
                                            echo '<td>Action</td>';
                                        }

                                        ?>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                    
                                    $query = "SELECT * FROM apotek";
                                    $hasil = mysqli_query($con,$query);

                                    $action = 
                                    "
                                    <td>
                                    <a href='update.php' class='btn btn-primary'>Update</a>
                                    <a href='delete.php' class='btn btn-danger'>Delete</a>
                                    </td>
                                    ";

                                    if (mysqli_num_rows($hasil) > 0)
                                    {
                                        while($row = mysqli_fetch_assoc($hasil))
                                        {
                                            echo "
                                            <tr>
                                                <td>".$row['id']."</td>
                                                <td>".$row['obat']."</td>
                                                <td>".$row['kode']."</td>
                                                <td>".$row['produsen']."</td>
                                                <td><img src='img/".$row['gambar']."' width='100px'></td>
                                                ";

                                            if($user == "Admin")
                                            {
                                                echo $action;
                                            }

                                            echo "</tr>";
                                        }
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- /. ROW  -->
            </div>
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <div class="footer">
    </div>


    <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>


</body>

</html>