<?php
    session_start();
    if ( isset($_POST["login"]) ) {
        header("location: index.php");
        exit;
    }
    if(isset($_POST['login'])){
        $username = $_POST['username'];
        $password = $_POST['password'];

        $result = mysqli_query($conn, "SELECT * FROM db_login WHERE username = '$username'");

        if(mysqli_num_rows($result) === 1){
            $row = mysqli_fetch_assoc($result);
            if(password_verify($password, $row['password'])){
                $_SESSION['login'] = $row["username"];
                $_SESSION['priv'] = $row["priv"];
                if($_SESSION['priv'] == "admin"){
                    header("Location: admin.php");
                }
                else{header("Location: index.php");}
                exit;
            }
        }
        $error = true;
    }

?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
    <link rel="stylesheet" href="stylelogin.css">
</head>
<body>
    <div class="container">
        <div class="login">
            <form action="db.php"  method="post" enctype="multipart/form-data">
            <h1>Login</h1>
            <p>Luthfish Market</p>
            <label for="">Email</label>
            <input type="email" name= "email" placeholder="fulan@gmail.com" required>
            <label for="">Password</label>
            <input type="password" name="pass" placeholder="password" required>
            <button name="login" >Login</button>
            <p>
                <a href="#">Forgot Password?</a><br>
                <p>Not registered yet? <a href="register.php">Create an account</a></p>
                
            </p>
            
            </form>
        </div>
        <div class="right">
            <img src="gambar/logoLogin.jpg" alt="">
        </div>
    </div>
</body>
</html>