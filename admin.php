<!DOCTYPE html>
<html>
<head>
    <title>Halaman Admin</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        table {
            border-collapse: collapse;
        }

        table,
        th,
        td {
            border: 1px solid black;
            padding: 5px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Halaman Admin</h1>

        <form method="POST" action="">
            <label for="pilihan">Pilih Tampilan:</label>
            <select id="pilihan" name="pilihan">
                <option value="1">Tampilkan Data Siswa Baru dan User</option>
                <option value="2">Hapus Data Calon Siswa</option>
                <option value="3">Hapus User</option>
            </select>
            <button type="submit" class="btn btn-primary">Tampilkan</button>
        </form>

        <?php
        // Koneksi ke database
        $host = "localhost";
        $username = "root";
        $password = "";
        $database = "pendaftaransiswabaru";

        $conn = mysqli_connect($host, $username, $password, $database);
        if (!$conn) {
            die("Koneksi ke database gagal: " . mysqli_connect_error());
        }

        // Fungsi hapus data calon siswa
        function hapusDataCalonSiswa($id)
        {
            global $conn;
            $query = "DELETE FROM data_calon_siswa WHERE id = $id";
            $result = mysqli_query($conn, $query);
            if ($result) {
                echo "Data calon siswa berhasil dihapus.";
            } else {
                echo "Gagal menghapus data calon siswa: " . mysqli_error($conn);
            }
        }

        // Fungsi hapus username dan password user
        function hapusUser($id)
        {
            global $conn;
            $query = "DELETE FROM users WHERE id = $id";
            $result = mysqli_query($conn, $query);
            if ($result) {
                echo "Username dan password user berhasil dihapus.";
            } else {
                echo "Gagal menghapus username dan password user: " . mysqli_error($conn);
            }
        }

        // Fungsi konfirmasi data pendaftaran siswa baru
        function konfirmasiDataSiswaBaru($id)
        {
            global $conn;
            $query = "UPDATE data_calon_siswa SET status = 'Dikonfirmasi' WHERE id = $id";
            $result = mysqli_query($conn, $query);
            if ($result) {
                echo "Data pendaftaran siswa baru berhasil dikonfirmasi.";
            } else {
                echo "Gagal mengkonfirmasi data pendaftaran siswa baru: " . mysqli_error($conn);
            }
        }

        // Fungsi untuk menampilkan semua data siswa baru dan user
        function tampilkanDataSiswaDanUser()
        {
            global $conn;
            $query = "SELECT * FROM data_calon_siswa";
            $result = mysqli_query($conn, $query);

            echo "<h2>Data Siswa Baru:</h2>";
            echo "<table class='table table-bordered'>";
            echo "<tr><th>Id</th><th>pendaftaran</th><th>Tahun Masuk</th><th>Nama</th><th>NIK</th><th>NISN</th><th>Jenis Kelamin</th><th>Tempat Lahir</th><th>Tanggal Lahir</th><th>Alamat</th><th>Nomor WA</th><th>Nama Ayah</th><th>Nomor Telpon Ayah</th><th>Pekerjaan Ayah</th><th>Penghasilan Ayah</th><th>Nama Ibu</th><th>Nomor Telepon Ibu</th><th>Pekerjaan Ibu</th><th>Penghasilan Ibu</th></tr>";

            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . $row['kode'] . "</td>";
                echo "<td>" . $row['pendaftaran'] . "</td>";
                echo "<td>" . $row['tahun_masuk'] . "</td>";
                echo "<td>" . $row['nama_lengkap'] . "</td>";
                echo "<td>" . $row['nik'] . "</td>";
                echo "<td>" . $row['nisn'] . "</td>";
                echo "<td>" . $row['jenis_kelamin'] . "</td>";
                echo "<td>" . $row['tempat_lahir'] . "</td>";
                echo "<td>" . $row['tanggal_lahir'] . "</td>";
                echo "<td>" . $row['alamat_lengkap'] . "</td>";
                echo "<td>" . $row['nomor_wa'] . "</td>";
                echo "<td>" . $row['nama_ayah'] . "</td>";
                echo "<td>" . $row['nomor_wa_ayah'] . "</td>";
                echo "<td>" . $row['pekerjaan_ayah'] . "</td>";
                echo "<td>" . $row['penghasilan_ayah'] . "</td>";
                echo "<td>" . $row['nama_ibu'] . "</td>";
                echo "<td>" . $row['nomor_wa_ibu'] . "</td>";
                echo "<td>" . $row['pekerjaan_ibu'] . "</td>";
                echo "<td>" . $row['penghasilan_ibu'] . "</td>";
                echo "</tr>";
            }

            echo "</table>";

            $query = "SELECT * FROM users";
            $result = mysqli_query($conn, $query);

            echo "<h2>Data User:</h2>";
            echo "<table class='table table-bordered'>";
            echo "<tr><th>ID</th><th>Username</th><th>Password</th></tr>";

            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['username'] . "</td>";
                echo "<td>" . $row['password'] . "</td>";
                echo "</tr>";
            }

            echo "</table>";
        }

        // Proses form
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if ($_POST['pilihan'] === '1') {
                tampilkanDataSiswaDanUser();
            } elseif ($_POST['pilihan'] === '2') {
                echo "<h2>Hapus Data Calon Siswa</h2>";
                echo "<form method='post' action=''>";
                echo "<div class='form-group'>";
                echo "<label for='hapus_calon_siswa'>Masukkan ID Calon Siswa:</label>";
                echo "<input type='number' class='form-control' name='hapus_calon_siswa' id='hapus_calon_siswa' required>";
                echo "</div>";
                echo "<button type='submit' class='btn btn-danger'>Hapus</button>";
                echo "</form>";
            } elseif ($_POST['pilihan'] === '3') {
                echo "<h2>Hapus User</h2>";
                echo "<form method='post' action=''>";
                echo "<div class='form-group'>";
                echo "<label for='hapus_user'>Masukkan ID User:</label>";
                echo "<input type='number' class='form-control' name='hapus_user' id='hapus_user' required>";
                echo "</div>";
                echo "<button type='submit' class='btn btn-danger'>Hapus</button>";
                echo "</form>";
            }
        }

        // Tutup koneksi ke database
        mysqli_close($conn);
        ?>
        <a href="index.php" class="btn btn-primary">Logout</a>
    </div>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
