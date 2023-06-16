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
                <a href="daftar.php" class="nav-item nav-link active">Daftar</a>
                <a href="datacasis.php" class="nav-item nav-link">Data Calon Siswa</a>
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
                <h6 class="section-title bg-white text-center text-primary px-3">Website Resmi</h6>
                <h1 class="mb-5">Penerimaan Siswa Baru SMAN 14 Surabaya</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-6 col-md-12 wow fadeInUp" data-wow-delay="0.5s">
                    <?php
                    if (isset($_POST['btnDaftar'])) {
                        $koneksi = mysqli_connect("localhost", "root", "", "pendaftaransiswabaru");

                        $pendaftaran = $_POST['pendaftaran'];
                        $tahun_masuk = $_POST['tahun_masuk'];
                        $gelombang = $_POST['gelombang'];
                        $nama_lengkap = $_POST['nama_lengkap'];
                        $nik = $_POST['nik'];
                        $nisn = $_POST['nisn'];
                        $jenis_kelamin = $_POST['jenis_kelamin'];
                        $tempat_lahir = $_POST['tempat_lahir'];
                        $tanggal_lahir = $_POST['tanggal_lahir'];
                        $alamat_lengkap = $_POST['alamat_lengkap'];
                        $nomor_wa = $_POST['nomor_wa'];
                        $nama_ayah = $_POST['nama_ayah'];
                        $nomor_wa_ayah = $_POST['nomor_wa_ayah'];
                        $pekerjaan_ayah = $_POST['pekerjaan_ayah'];
                        $penghasilan_ayah = $_POST['penghasilan_ayah'];
                        $nama_ibu = $_POST['nama_ibu'];
                        $nomor_wa_ibu = $_POST['nomor_wa_ibu'];
                        $pekerjaan_ibu = $_POST['pekerjaan_ibu'];
                        $penghasilan_ibu = $_POST['penghasilan_ibu'];




                        $simpan = mysqli_query($koneksi, "INSERT INTO `data_calon_siswa`(`pendaftaran`, `tahun_masuk`, `gelombang`, `nama_lengkap`, 
                            `nik`, `nisn`, `jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `alamat_lengkap`, `nomor_wa`, `nama_ayah`, `nomor_wa_ayah`,
                            `pekerjaan_ayah`, `penghasilan_ayah`, `nama_ibu`, `nomor_wa_ibu`, `pekerjaan_ibu`, `penghasilan_ibu`) 
                            VALUES ('" . $pendaftaran . "','" . $tahun_masuk . "','" . $gelombang . "','" . $nama_lengkap . "','" . $nik . "','" . $nisn . "',
                            '" . $jenis_kelamin . "','" . $tempat_lahir . "','" . $tanggal_lahir . "','" . $alamat_lengkap . "','" . $nomor_wa . "','" . $nama_ayah . "',
                            '" . $nomor_wa_ayah . "','" . $pekerjaan_ayah . "',
                            '" . $penghasilan_ayah . "','" . $nama_ibu . "','" . $nomor_wa_ibu . "','" . $pekerjaan_ibu . "','" . $penghasilan_ibu . "')");

                        if ($simpan == 1) {
                            ?>
                            <div class="alert alert-success" role="alert">
                                Data tersimpan
                            </div>
                            <?php
                        } else {
                            ?>
                            <div class="alert alert-danger" role="alert">
                                Data gagal tersimpan
                            </div>
                            <?php
                        }
                    }
                    ?>


                    <form action="daftar.php" method="post">
                        <div class="row g-3">
                            <h5>Form Pendaftaran</h5>
                            <div class="col-md-4">
                                <div class="form-floating">
                                    <select id="pendaftaran" name="pendaftaran" class="form-control">
                                        <option>Siswa Baru</option>
                                        <option>Siswa Pindahan</option>
                                    </select>
                                    <label for="pendaftaran">PENDAFTARAN</label>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-floating">
                                    <select id="tahun_masuk" name="tahun_masuk" class="form-control">
                                        <option>2023-2024</option>
                                        <option>2024-2025</option>
                                        <option>2025-2026</option>
                                    </select>
                                    <label for="tahun_masuk">TAHUN MASUK</label>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-floating">
                                    <select id="gelombang" name="gelombang" class="form-control">
                                        <option>Gelombang 1</option>
                                        <option>Gelombang 2</option>
                                    </select>
                                    <label for="gelombang">GELOMBANG</label>
                                </div>
                            </div>

                            <div class="col-xs-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap"
                                        autocomplete="off" required>
                                    <label for="nama_lengkap">NAMA LENGKAP</label>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="nik" name="nik" autocomplete="off"
                                        required>
                                    <label for="nik">NIK</label>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="nisn" name="nisn" autocomplete="off"
                                        required>
                                    <label for="nisn">NISN</label>
                                </div>
                            </div>


                            <div class="col-xs-12">
                                <div class="form-floating">
                                    <select id="jenis_kelamin" name="jenis_kelamin" class="form-control">
                                        <option>Laki - laki</option>
                                        <option>Perempuan</option>
                                    </select>
                                    <label for="jenis_kelamin">JENIS KELAMIN</label>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir"
                                        autocomplete="off" required>
                                    <label for="tempat_lahir">TEMPAT LAHIR</label>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-floating">
                                    <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir"
                                        autocomplete="off" required>
                                    <label for="tanggal_lahir">TANGGAL LAHIR</label>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="alamat_lengkap" name="alamat_lengkap"
                                        autocomplete="off" required>
                                    <label for="alamat_lengkap">ALAMAT LENGKAP</label>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="nomor_wa" name="nomor_wa"
                                        autocomplete="off" required>
                                    <label for="nomor_wa">NOMOR TELPON/WHATSAPP</label>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="nama_ayah" name="nama_ayah"
                                        autocomplete="off" required>
                                    <label for="nama_ayah">NAMA AYAH</label>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="nomor_wa_ayah" name="nomor_wa_ayah"
                                        autocomplete="off" required>
                                    <label for="nomor_wa_ayah">NOMOR TELEPON/WHATSAPP</label>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="pekerjaan_ayah" name="pekerjaan_ayah"
                                        autocomplete="off" required>
                                    <label for="pekerjaan_ayah">PEKERJAAN</label>
                                </div>
                            </div>


                            <div class="col-md-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="penghasilan_ayah"
                                        name="penghasilan_ayah" autocomplete="off">
                                    <label for="penghasilan_ayah">PENGHASILAN</label>
                                </div>
                            </div>


                            <div class="col-md-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="nama_ibu" name="nama_ibu"
                                        autocomplete="off" required>
                                    <label for="nama_ibu">NAMA IBU</label>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="nomor_wa_ibu" name="nomor_wa_ibu"
                                        autocomplete="off" required>
                                    <label for="nomor_wa_ibu">NOMOR TELEPON/WHATSAPP</label>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="pekerjaan_ibu" name="pekerjaan_ibu"
                                        autocomplete="off" required>
                                    <label for="pekerjaan_ibu">PEKERJAAN</label>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="penghasilan_ibu" name="penghasilan_ibu"
                                        autocomplete="off">
                                    <label for="penghasilan_ibu">PENGHASILAN</label>
                                </div>
                            </div>


                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" type="submit"
                                    name="btnDaftar">Daftar</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="row">
                        <div class="col-xs-12">
                            <h5>Tentang Kami</h5>
                            <p class="mb-4">SMA Negeri (SMAN) 14 Surabaya adalah sekolah menengah atas negeri yang
                                terletak di
                                kota Surabaya bagian timur.</p>
                            <div class="d-flex align-items-center mb-3">
                                <div class="d-flex align-items-center justify-content-center flex-shrink-0 bg-primary"
                                    style="width: 50px; height: 50px;">
                                    <i class="fa fa-map-marker-alt text-white"></i>
                                </div>
                                <div class="ms-3">
                                    <h5 class="text-primary">Lokasi</h5>
                                    <p class="mb-0">Perum YKP IV Blok KK, Jl. Raya Tenggilis Mejoyo, Kali Rungkut, Kec.
                                        Rungkut,
                                        Surabaya, Jawa Timur 60292</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-center mb-3">
                                <div class="d-flex align-items-center justify-content-center flex-shrink-0 bg-primary"
                                    style="width: 50px; height: 50px;">
                                    <i class="fa fa-phone-alt text-white"></i>
                                </div>
                                <div class="ms-3">
                                    <h5 class="text-primary">Nomor Telepon</h5>
                                    <p class="mb-0">(031) 8414451</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 wow fadeInUp" data-wow-delay="0.3s">
                            <iframe class="position-relative rounded w-100 h-100"
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.344313462129!2d112.7604384786868!3d-7.315163173851829!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fafd2624e713%3A0x605bb6e7f5bc213b!2sSMA%20Negeri%2014%20Surabaya!5e0!3m2!1sid!2sid!4v1685969593277!5m2!1sid!2sid"
                                frameborder="0" style="min-height: 300px; border:0;" allowfullscreen=""
                                aria-hidden="false" tabindex="0"></iframe>
                        </div>
                    </div>

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
</body>

</html>