<?php 
require 'config.php';

if (isset($_POST['upload'])) {
    $nama = $_POST['nama'];
    $gambar = $_FILES['gambar']['name'];
    $x = explode('.', $gambar);
    $extensi = strtolower(end($x));
    $gambar_baru = "$nama.$extensi";
    $tmp = $_FILES['gambar']['tmp_name'];
    
    if (move_uploaded_file($tmp, 'img/'.$gambar_baru)) {
        $result = mysqli_query($conn, "INSERT INTO file_upload VALUES ('','$gambar_baru')");
        if ($result) {
            echo"
                <script>
                    alert('File berhasil diupload');
                    href.location = 'read_file.php';
                </script>
            ";
        }else{
            echo"
                <script>
                    alert('File gagal diupload');
                </script>
            ";
        }
    }

}


?>
<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload</title>
</head>
<body>
    <h1>File Upload</h1>
    <form action="" method="post" enctype="multipart/form-data">
        <label for="">Nama : </label>
        <input type="text" name="nama"><br><br>
        <label for="">Upload Gambar : </label>
        <input type="file" name="gambar"><br>
        <button type="submit" name="upload">Upload</button>
    </form>  
</body>
</html> -->