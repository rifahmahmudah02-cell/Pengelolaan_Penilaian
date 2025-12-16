<?php
include 'koneksi.php';

$siswa_id = $_GET['id'];

$sql_siswa = "SELECT * FROM siswa WHERE id='$siswa_id'";
$siswa = $conn->query($sql_siswa)->fetch_assoc();

$sql_nilai = "SELECT * FROM nilai WHERE siswa_id='$siswa_id'";
$result_nilai = $conn->query($sql_nilai);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Nilai Siswa</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; background: #f2f2f2; }
        h2 { text-align: center; color: #333; }
        table { width: 60%; margin: auto; border-collapse: collapse; background: #fff; }
        th, td { border: 1px solid #aaa; padding: 10px; text-align: center; }
        th { background-color: #4CAF50; color: white; }
        a { display: block; text-align: center; margin-top: 20px; color: #2196F3; text-decoration: none; }
    </style>
</head>
<body>

<h2>Nilai Siswa: <?php echo $siswa['nama']; ?></h2>

<table>
    <tr>
        <th>No</th>
        <th>Mata Pelajaran</th>
        <th>Nilai</th>
    </tr>
    <?php
    $no = 1;
    while($row = $result_nilai->fetch_assoc()){
        echo "<tr>";
        echo "<td>".$no++."</td>";
        echo "<td>".$row['mata_pelajaran']."</td>";
        echo "<td>".$row['nilai']."</td>";
        echo "</tr>";
    }
    ?>
</table>

<a href="index.php">Kembali</a>

</body>
</html>
