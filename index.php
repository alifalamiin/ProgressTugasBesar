<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
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
    <form action="cekLogin.php" method="post">
    <div class="container">
        <div class="row">
            <font color="white">
            <label class="col-md-2 col-form-label">Username</label>
            <div class="col-md-10">
                <input type="text" name="username" id="" class="form-control" required>
            </div>
        </div>

        <div class="row">
            <label class="col-md-2 col-form-label">Password</label>
            <div class="col-md-10">
                <input type="password" name="password" id="" class="form-control" required>
            </div>
        </div>

        <div class="row">
            <label class="col-md-2 col-form-label">Tipe User</label>
            <div class="col-md-10">
                <input type="radio" name="user" value="Admin" required>Admin
                <input type="radio" name="user" value="Customer" required>Customer 
            </div></font>
        </div>
        
        <div class="row">
            <div class="col-md-10">
            <button type="submit" class='btn btn-primary'>Submit</button>
            </div>
        </div>
    </form>

        <div class="row">
            <div class="col-md-10">
            <a href='register.php' class='btn btn-primary'>Registrasi</a>
            </div>
        </div>
    


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