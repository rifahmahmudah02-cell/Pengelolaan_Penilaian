<?php
include 'koneksi.php';

$siswa_id = $_GET['id'];

if(isset($_POST['mata_pelajaran'])){
    $mapel = $_POST['mata_pelajaran'];
    $nilai = $_POST['nilai'];

    $sql = "INSERT INTO nilai (siswa_id, mata_pelajaran, nilai) VALUES ('$siswa_id', '$mapel', '$nilai')";
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
    <title>Tambah Nilai</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; background: #f2f2f2; }
        h2 { text-align: center; color: #333; }
        form { text-align: center; }
        input[type="text"], input[type="number"], button { padding: 8px 12px; margin: 5px; font-size: 14px; }
        button { cursor: pointer; background-color: #4CAF50; color: white; border: none; }
        a { display: block; text-align: center; margin-top: 20px; color: #2196F3; text-decoration: none; }
    </style>
</head>
<body>

<h2>Tambah Nilai Siswa</h2>

<form method="POST">
    Mata Pelajaran: <input type="text" name="mata_pelajaran" required><br>
    Nilai: <input type="number" name="nilai" min="0" max="100" required><br>
    <button type="submit">Simpan</button>
</form>

<a href="index.php">Kembali</a>

</body>
</html>
