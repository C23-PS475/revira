<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Monitoring Pendaki</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<style>
    img {
        white-space: nowrap;
        max-width: 100%;
        /* Gambar akan menyesuaikan lebar kontainer induknya */
        height: auto;
        /* Tinggi gambar akan menyesuaikan proporsi lebar gambar */
        display: block;
        /* Membuat gambar menjadi blok, untuk mengatur margin */
        margin: auto;
        /* Mengatur margin otomatis untuk membuat gambar menjadi tengah */
    }

    /* Untuk lebar maksimum 50% pada resolusi < 768px */
    @media (max-width: 767.98px) {
        img {
            max-width: auto;
        }
    }

    /* Untuk lebar maksimum 450px pada resolusi >= 768px */
    @media (min-width: 768px) {
        img {
            max-width: auto;
        }
    }

    .error-message {
        color: red;
        text-align: center;
        margin-top: 5%;
    }
</style>

</style>

<body class="bg-gradient" style="background-color: #2a87a5">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-5 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <img src="img/gunung2.png" alt="Deskripsi Gambar">
                            <div class="col-lg-12">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Login</h1>
                                    </div>
                                    <form class="user" action="login_process.php" method="post"> <!-- Menetapkan action ke login_process.php dan method POST -->
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user" id="exampleInputUsername" aria-describedby="usernameHelp" placeholder="Enter username" name="username"> <!-- Menambahkan name="username" -->
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password" name="password"> <!-- Menambahkan name="password" -->
                                        </div>
                                        <button type="submit" class="btn btn-success btn-user btn-block" style="background-color: #2a87a5">
                                            Login
                                        </button>
                                    </form>
                                    <?php
                                    if (isset($_GET['login']) && $_GET['login'] == 'failed') {
                                        echo '<p class="error-message">Username or password is incorrect.</p>';
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>