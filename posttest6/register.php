<?php
require 'config.php';

if (isset($_POST['register'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    if ($password === $cpassword) {
        $password = password_hash($password, PASSWORD_DEFAULT);

        $result = mysqli_query($conn, "SELECT email FROM db_login WHERE email = '$email'");

        if (mysqli_fetch_assoc($result)) {
            echo "
                    <script>
                        alert('email Telah Digunakan');
                        document.location.href = 'register.php';
                    </script>
                ";
        } else {
            $sql = "INSERT INTO db_login VALUES ('','$email','$password','user')";
            $result = mysqli_query($conn, $sql);

            if (mysqli_affected_rows($conn) > 0) {
                echo "
                        <script>
                            alert('Registrasi Berhasil');
                            document.location.href = 'index.php';
                        </script>
                    ";
            } else {
                echo "
                        <script>
                            alert('Registrasi Gagal');
                            document.location.href = 'register.php';
                        </script>
                    ";
            }
        }
    } else {
        echo "
                <script>
                    alert('Password Anda Tidak Sama !!!');
                    document.location.href = 'register.php';
                </script>
            ";
    }
}
?>

<script>
    if (window.history.replaceState) {
        window.history.replaceState(null, null, window.location.href);
    }
</script>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="style3.css">
    <!-- <link href="images/logo.png" rel="shortcut icon"> -->
    <title>Register</title>
</head>

<body>
    <section id="navbar">
        <div class="navbar">
            <div class="container">
                <center>
                    <h2>Selamat datang di Luthfish Market</h2>
                    <hr>
                    <p>Silahkan Mengisi form pembelian terlebih dahulu untuk pengiriman Ikan <br> data anda 100% aman bersama kami.</p>
                </center>
            </div>
        </div>
    </section>
    <center>
        <div class="container">
            <h3>Tambah Data Pembeli</h3>
            <form action="" method="POST" enctype="multipart/form-data">
                <table border="1" cellpadding="7">
                    <tr>
                        <td>
                            <div class="textBox">
                                <label> email :     </label>
                                <input type="text" name="email" required>
                                <span></span>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="textBox">
                                <label> Password </label>
                                <input type="password" name="password" required>
                                <span></span>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>    
                            <div class="textBox">
                                <label> Confirm Password </label>
                                <input type="password" name="cpassword" required>
                                <span></span>
                                </div>
                        </td>
                    </tr>
                    
                </table>
                <input type="submit" name="register" value="register" class = "req"><br> <br>
                <div class="kata2"> Sudah Punya Akun? <a href="halamanLogin.php"> Login Here</a> </div>
            </form>
        </div>
    </center>
    <section class="footer">
        <div class="footer">
            <b>
                <p>Copyright &copy; 2022 Luthfish Market</p>
            </b>
        </div>
    </section>
</body>

</html>