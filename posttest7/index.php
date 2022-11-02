<?php
session_start();
    // if(isset($_GET['search'])){
    //     $keyword = $_GET['keyword'];
    //     $result = mysqli_query($conn, "SELECT * FROM pelayanan where nama LIKE '%$keyword%' or metode LIKE '%$keyword%'");
    // } else {
    //     $result = mysqli_query($conn, "SELECT * FROM  pelayanan");
    // }
    // $pelayanan = [];
    // while ($row = mysqli_fetch_assoc($result)) {
    //     $pelayanan[] = $row;
    // }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toko Ikan Luthfish</title>
    <link rel="stylesheet" href="style.css">


</head>

<body>
    <section id="navbar">
        <div class="navbar">
            <div class="container">
                <div class="logo">
                    <h1 id="toko">Luthfish Market</h1>
                </div>
                <div class="label">
                    <label for="input"></label>
                    <input type="text" id="input" name="input" placeholder="Seacrh..">
                    <input type="submit" value="Search">
                    <script>
                        // alert("Ini adalah website Praktikum Web")
                        let input = document.getElementById("input");
                        input.value = "Cari ikan anda disini!";

                        function ubahMode() {
                            const ubah = document.body
                            ubah.classList.toggle("dark");
                        }
                    </script>
                </div>
                <nav>
                    <ul>
                        <li><a href="#">Beranda</a></li>
                        <li><a href="#hero">Tentang Toko</a></li>
                        <li><a href="#catalog">Daftar Ikan</a></li>
                        <li><a href="#about">Tentang saya</a></li>
                        <li><a href="logout.php">Logout</a></li>
                        <li><input type="checkbox" onclick="ubahMode()">
                        </li>
                    </ul>
                    <?php
                        // if ($_SESSION['priv'] == 'admin') { 
                        //         echo('<li><a href="halamanLogin.php" class="logout" id="sign">login</a></li>');
                        // } else if ($_SESSION['priv'] == 'user') { 
                        //     echo('<li><a href="logout.php" class="tbl-pink" id="sign">Sign In</a></li>');
                        // }
                    ?>
                    
                </nav>
            </div>
        </div>
    </section>

    <section id="hero">
        <div class="hero">
            <div class="jumbotron">
                <center>
                    <img src="gambar/ikan.jpg" alt="" width="270">
                </center>
                <h1>Luthfish Market</h1>
                <p align="center">Adalah sebuah website toko ikan yang dibuat dalam beberapa jam <br>untuk memenuhi tugas Praktikum Pemrograman Web.</p>
                <p id="p"></p>
                <script>
                    let el = document.getElementById('p').innerHTML = "Website ini dibangun berdasarkan tugas posttest.";
                </script>
            </div>
        </div>
    </section>

    <section id="catalog">
        <div class="catalog">
            <div class="wrapper">
                <br><br><br>
                <h2>Daftar Ikan</h2>
            </div>
            <div class="wrapper">
                <div class="catalog-item">
                    <img src="gambar/ikan6.jpg" alt="" width="150">
                    <div class="title">
                        <h5>Ikan sisik Putih</h5>
                    </div>
                    <div class="price">
                        Rp. 30.000/Kg
                    </div>
                </div>
                <div class="catalog-item">
                    <img src="gambar/ikan4.jpg" alt="" width="150">
                    <div class="title">
                        <h5>Ikan sisik merah</h5>
                    </div>
                    <div class="price">
                        Rp. 50.000/Kg
                    </div>
                </div>
                <div class="catalog-item">
                    <img src="gambar/ikan2.jpg" alt="" width="150">
                    <div class="title">
                        <h5>Ikan Layang</h5>
                    </div>
                    <div class="price">
                        Rp. 20.000/Kg
                    </div>
                </div>
                <div class="catalog-item">
                    <img src="gambar/ikan5.jpg" alt="" width="150">
                    <div class="title">
                        <h5>Ikan Nila</h5>
                    </div>
                    <div class="price">
                        Rp. 25.000/Kg
                    </div>
                </div>
            </div>
        </div>
        <div class="belanja">
            <center><br><br>
                <a href="addPembeli.php" class="tombol-keranjang animasi biru" title="Form pembelian">Keranjang</a>
            </center>
        </div>
    </section>
    <br><br><br><br><br><br><br><br><br><br><br>

    <section id="about">
        <div class="about">
            <div class="jumbotron">
                <h1>Tentang Saya</h1>
                <center>
                    <div class="grid-container">
                        <div id="biodata">
                            <img id="gambar" src="gambar/profil (1).jpg" alt="">
                            <script>
                                let img = document.getElementById('gambar');

                                img.addEventListener("mousedown", function() {
                                    img.classList.add('hilang');
                                });
                            </script>
                            <div class="data">
                                <p>Nama</p>
                                <p>NIM</p>
                                <p>Program Studi</p>
                                <p>Angkatan</p>
                            </div>
                            <div class="data">
                                <p>: Ahmad Luthfi Hanif</p>
                                <p>: 2109106082</p>
                                <p>: Informatika</p>
                                <p>: 2021</p>
                            </div>
                        </div>
                    </div>
            </div>
            </center>
        </div>
        </div>
    </section>

    <section class="footer">
        <div class="footer">
            <b><br>
                <p>Copyright &copy; 2022 Luthfish Market</p>
            </b>
        </div>
    </section>
    <main>
    </main>
</body>

</html>