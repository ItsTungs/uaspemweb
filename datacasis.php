<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>PSISBA - SISWA BARU SMAN 14 SURABAYA</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

    <style>
    table {
        display: block;
        overflow-y: auto;
        height: 420px;
    }
    </style>
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
        <a href="index.html" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <h2 class="m-0 text-primary"><i class="fa fa-book me-3"></i>SMAN 14 SURABAYA
            </h2>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="index.php" class="nav-item nav-link">Home</a>
                <a href="daftar.php" class="nav-item nav-link ">Daftar</a>
                <a href="datacasis.php" class="nav-item nav-link active">Data Calon Siswa</a>
                <a href="grafik.php" class="nav-item nav-link">Grafik</a>
            </div>
            <!-- <a href="" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">Login<i
                    class="fa fa-arrow-right ms-3"></i></a> -->
        </div>
    </nav>
    <!-- Navbar End -->


    <!-- Header Start -->
    <div class="container-fluid bg-primary py-5 mb-5 page-header">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h1 class="display-3 text-white animated slideInDown">PENERIMAAN SISWA BARU SMAN 14
                        SURABAYA</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-white" href="index.php">Home</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Daftar</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- Contact Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Pendidikan adalah sumber pondasi
                    generasi muda</h6>
                <h1 class="mb-5">DATA CALON SISWA SMAN 14 SURABAYA</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-12 col-md-12 wow fadeInUp" data-wow-delay="0.5s">

                    <button class="btn btn-primary " type="button" onclick="cetakpdf();">Cetak PDF</button>
                    <button class="btn btn-primary" type="button" onclick="cetakexcel();">Cetak Excel</button>

                    <?php
                    $koneksi = mysqli_connect("localhost", "root", "", "pendaftaransiswabaru");
                    ?>

                    <table border="3" style="width: 100%; margin-top: 10px;">
                        <tr>
                            <td style="text-align: center;"><b>Pendaftaran</b></td>
                            <td style="text-align: center;"><b>Tahun Masuk</b></td>
                            <td style="text-align: center;"><b>Nama Lengkap</b></td>
                            <td style="text-align: center;"><b>Jenis Kelamin</b></td>
                            <td style="text-align: center;"><b>Tempat Lahir</b></td>
                            <td style="text-align: center;"><b>Tanggal Lahir</b></td>
                            <td style="text-align: center;"><b>Alamat Lengkap</b></td>
                            <td style="text-align: center;"><b>Nomor Whatsapp</b></td>
                        </tr>
                        <tr>
                            <td style="text-align: center;" colspan="8">
                                <hr>
                            </td>
                        </tr>
                        <?php
                        $query = mysqli_query($koneksi, "select *, date_format(tanggal_lahir, '%d-%m-%Y') as tgl from data_calon_siswa;");
                        while ($row = mysqli_fetch_array($query)) {
                            ?>
                        <tr>
                            <td style="text-align: center;">
                                <?php echo $row['pendaftaran']; ?>
                            </td>
                            <td style="text-align: center;">
                                <?php echo $row['tahun_masuk']; ?>
                            </td>
                            <td style="text-align: left;">
                                <?php echo $row['nama_lengkap']; ?>
                            </td>
                            <td style="text-align: left;">
                                <?php echo $row['jenis_kelamin']; ?>
                            </td>
                            <td style="text-align: left;">
                                <?php echo $row['tempat_lahir']; ?>
                            </td>
                            <td style="text-align: center;">
                                <?php echo $row['tgl']; ?>
                            </td>
                            <td style="text-align: left;">
                                <?php echo $row['alamat_lengkap']; ?>
                            </td>
                            <td style="text-align: center;">
                                <?php echo $row['nomor_wa']; ?>
                            </td>
                        </tr>
                        <?php
                        }
                        ?>
                    </table>

                    <!-- merubah query ke dalam format array =  mysqli_fetch_array -->
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->


    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-12 col-md-12">
                <h4 class="text-white mb-3">Contact</h4>
                <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Perum YKP IV Blok KK, Jl. Raya Tenggilis
                    Mejoyo, Kali Rungkut, Kec. Rungkut, Surabaya, Jawa Timur 60292</p>
                <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>(031) 8414451</p>
                <div>
                    <a href="https://www.facebook.com/sma14sby" target="_blank" class="me-3"><i class="fab fa-facebook fa-lg"></i></a>
                    <a href="https://www.instagram.com/mediafourteen/?hl=en" target="_blank"><i class="fab fa-instagram fa-lg"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>

    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>

    <script>
    function cetakpdf() {
        window.location.href = "cetakpdf.php";
    }

    function cetakexcel() {
        window.location.href = "cetakexcel.php";
    }
    </script>
</body>

</html>