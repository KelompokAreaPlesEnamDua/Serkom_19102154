<!DOCTYPE html>
<html lang="en">

<!-- ini merupakan header html -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Beranda</title>
    <!-- Memasukkan Link Bootstrap  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <style>
        .navbar-brand {
            color: white;
            font-size: 30px;
            font-weight: 500;
        }

        .nav-link {
            color: white;
            font-size: 20px;
        }
    </style>
</head>
<!-- Ini merupakan body html-->
<body>
    <!-- ini merupakan navigasi bar -->
    <nav class="navbar navbar-expand-lg" style="background-color: #146C94;">
        <div class="container">
            <a class="navbar-brand" href="index.php">BEASISWA KOMINFO</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse navbar-right" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="jenis_beasiswa.php">JENIS BEASISWA</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="daftar.php">DAFTAR BEASISWA</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="hasil.php">HASIL PENDAFTARAN</a>
                    </li>
                </ul>
                <a class="nav-link" aria-current="page" href="login.php">LOGIN</a>
            </div>
        </div>
    </nav>
    <!-- ini akhir dari navigasi bar -->
    <div class="container position-absolute top-50 start-50 translate-middle">
        <h1>DAFTARKAN DIRIMU</h1>
        <h1>UNTUK MASA DEPAN LEBIH BAIK</h1>
    </div>

    <div class="me-0">
        <img src="assets/images/Study.jpg" class="rounded float-end" style="width: 40%;" alt="">
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</body>
<!-- Ini merupakan akhir dari body html-->
</html>