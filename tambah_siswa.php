<?php
include 'koneksi.php';

if(isset($_POST['nama'])){
    $nama = $_POST['nama'];
    $sql = "INSERT INTO siswa (nama) VALUES ('$nama')";
    if($conn->query($sql) === TRUE){
        header("Location: index.php");
    } else {
        echo "Error: ".$conn->error;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tambah Siswa</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; background: #f2f2f2; }
        h2 { text-align: center; color: #333; }
        form { text-align: center; }
        input[type="text"], button { padding: 8px 12px; margin: 5px; font-size: 14px; }
        button { cursor: pointer; background-color: #4CAF50; color: white; border: none; }
        a { display: block; text-align: center; margin-top: 20px; color: #2196F3; text-decoration: none; }
    </style>
</head>
<body>

<h2>Tambah Siswa</h2>
<form method="POST">
    <input type="text" name="nama" placeholder="Nama Siswa" required>
    <button type="submit">Simpan</button>
</form>

<a href="index.php">Kembali</a>

</body>
</html>
