<?php
// Menghubungkan ke database
require_once "koneksi.php";

// Menginisialisasi variabel
$username = $password = $confirm_password = "";
$username_err = $password_err = $confirm_password_err = "";

// Memproses data saat form disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validasi username
    if (empty(trim($_POST["username"]))) {
        $username_err = "Silakan masukkan username.";
    } else {
        // Mengecek apakah username sudah digunakan
        $sql = "SELECT id FROM users WHERE username = ?";

        if ($stmt = mysqli_prepare($conn, $sql)) {
            mysqli_stmt_bind_param($stmt, "s", $param_username);

            $param_username = trim($_POST["username"]);

            if (mysqli_stmt_execute($stmt)) {
                mysqli_stmt_store_result($stmt);

                if (mysqli_stmt_num_rows($stmt) == 1) {
                    $username_err = "Username sudah digunakan.";
                } else {
                    $username = trim($_POST["username"]);
                }
            } else {
                echo "Oops! Terjadi kesalahan. Silakan coba lagi nanti.";
            }

            mysqli_stmt_close($stmt);
        }
    }

    // Validasi password
    if (empty(trim($_POST["password"]))) {
        $password_err = "Silakan masukkan password.";
    } elseif (strlen(trim($_POST["password"])) < 6) {
        $password_err = "Password minimal terdiri dari 6 karakter.";
    } else {
        $password = trim($_POST["password"]);
    }

    // Validasi konfirmasi password
    if (empty(trim($_POST["confirm_password"]))) {
        $confirm_password_err = "Silakan konfirmasi password.";
    } else {
        $confirm_password = trim($_POST["confirm_password"]);
        if (empty($password_err) && ($password != $confirm_password)) {
            $confirm_password_err = "Konfirmasi password tidak sesuai.";
        }
    }

    // Menyimpan data ke database jika tidak ada error
    if (empty($username_err) && empty($password_err) && empty($confirm_password_err)) {
        $sql = "INSERT INTO users (username, password, role) VALUES (?, ?, ?)";

        if ($stmt = mysqli_prepare($conn, $sql)) {
            mysqli_stmt_bind_param($stmt, "sss", $param_username, $param_password, $param_role);

            $param_username = $username;
            $param_password = $password;
            $param_role = $_POST["role"];

            // Eksekusi pernyataan persiapan
            if (mysqli_stmt_execute($stmt)) {
                header("location: login.php");
            } else {
                echo "Oops! Terjadi kesalahan. Silakan coba lagi nanti.";
            }

            mysqli_stmt_close($stmt);
        }

    }

    mysqli_close($conn);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi</title>
    <style>
        .container {
            width: 300px;
            padding: 16px;
            border: 1px solid black;
            margin-top: 50px;
            margin-left: auto;
            margin-right: auto;
        }

        input[type=text],
        input[type=password] {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }

        button {
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
        }

        button:hover {
            opacity: 0.8;
        }

        .error {
            color: red;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>Registrasi</h2>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group">
                <label>Peran</label>
                <select name="role">
                    <option value="Admin">Admin</option>
                    <option value="Siswa" selected>Siswa</option>
                </select>
            </div>

            <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                <label>Username</label>
                <input type="text" name="username" value="<?php echo $username; ?>">
                <span class="error">
                    <?php echo $username_err; ?>
                </span>
            </div>
            <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                <label>Password</label>
                <input type="password" name="password" value="<?php echo $password; ?>">
                <span class="error">
                    <?php echo $password_err; ?>
                </span>
            </div>
            <div class="form-group <?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>">
                <label>Konfirmasi Password</label>
                <input type="password" name="confirm_password" value="<?php echo $confirm_password; ?>">
                <span class="error">
                    <?php echo $confirm_password_err; ?>
                </span>
            </div>
            <div class="form-group">
                <button type="submit">Registrasi</button>
            </div>
            <p>Sudah punya akun? <a href="login.php">Login</a></p>
        </form>
    </div>
</body>

</html>