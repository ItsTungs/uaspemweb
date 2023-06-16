<?php
// Menghubungkan ke database
require_once "koneksi.php";

// Menginisialisasi variabel
$username = $password = "";
$username_err = $password_err = "";


    // Mengecek keberadaan username dan password
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Validasi username
        if (empty(trim($_POST["username"]))) {
            $username_err = "Silakan masukkan username.";
        } else {
            $username = trim($_POST["username"]);
        }
    
        // Validasi password
        if (empty(trim($_POST["password"]))) {
            $password_err = "Silakan masukkan password.";
        } else {
            $password = trim($_POST["password"]);
        }
    
        // Mengecek keberadaan username dan password
        if (empty($username_err) && empty($password_err)) {
            $sql = "SELECT id, username, password, role FROM users WHERE username = ? LIMIT 1";
    
            $stmt = mysqli_prepare($conn, $sql);
            mysqli_stmt_bind_param($stmt, "s", $username);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            $row = mysqli_fetch_assoc($result);
    
            if ($row) {
                if ($password === $row["password"]) {
                    // Jika password cocok, mulai session baru
                    session_start();
    
                    // Menyimpan data dalam session
                    $_SESSION["id"] = $row["id"];
                    $_SESSION["username"] = $row["username"];
                    $_SESSION["role"] = $row["role"]; // Menyimpan peran pengguna
    
                    // Mengarahkan user ke halaman welcome
                    header("location: welcome.php");
                    exit;
                } else {
                    $password_err = "Password yang Anda masukkan salah.";
                }
            } else {
                $username_err = "Username yang Anda masukkan tidak ditemukan.";
            }
    
            mysqli_stmt_close($stmt);
            mysqli_close($conn);
        }
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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
        <h2>Login</h2>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                <label>Username</label>
                <input type="text" name="username" value="<?php echo $username; ?>">
                <span class="error">
                    <?php echo $username_err; ?>
                </span>
            </div>
            <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                <label>Password</label>
                <input type="password" name="password">
                <span class="error">
                    <?php echo $password_err; ?>
                </span>
            </div>
            <div class="form-group">
                <button type="submit">Login</button>
            </div>
            <p>Belum punya akun? <a href="register.php">Registrasi</a></p>
        </form>
    </div>
</body>

</html>