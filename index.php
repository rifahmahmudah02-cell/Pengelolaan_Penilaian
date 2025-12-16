<?php
include 'koneksi.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Pengelolaan Penilaian</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; background: #f2f2f2; }
        h2 { text-align: center; color: #333; }
        form { text-align: center; margin-bottom: 20px; }
        input[type="text"], button { padding: 8px 12px; margin: 5px; font-size: 14px; }
        input[type="text"] { width: 200px; }
        table { width: 80%; margin: auto; border-collapse: collapse; background: #fff; }
        th, td { border: 1px solid #aaa; padding: 10px; text-align: center; }
        th { background-color: #4CAF50; color: white; }
        button.action-btn { border: none; padding: 5px 10px; color: white; cursor: pointer; border-radius: 4px; font-size: 13px; margin: 2px; }
        button.tambah { background-color: #4CAF50; } /* hijau */
        button.lihat { background-color: #2196F3; }  /* biru */
        button.hapus { background-color: #f44336; }  /* merah */
    </style>
</head>
<body>

<h2>Daftar Siswa</h2>

<form method="POST" action="tambah_siswa.php">
    <input type="text" name="nama" placeholder="Nama Siswa" required>
    <button type="submit" class="action-btn tambah">Tambah Siswa</button>
</form>

<table>
    <tr>
        <th>No</th>
        <th>Nama Siswa</th>
        <th>Aksi</th>
    </tr>
    <?php
    $sql = "SELECT * FROM siswa";
    $result = $conn->query($sql);
    $no = 1;
    while($row = $result->fetch_assoc()){
        echo "<tr>";
        echo "<td>".$no++."</td>";
        echo "<td>".$row['nama']."</td>";
        echo "<td>
                <a href='tambah_nilai.php?id=".$row['id']."'><button class='action-btn tambah'>Tambah Nilai</button></a>
                <a href='lihat_nilai.php?id=".$row['id']."'><button class='action-btn lihat'>Lihat Nilai</button></a>
                <form method='POST' action='hapus_siswa.php' style='display:inline-block'>
                    <input type='hidden' name='id' value='".$row['id']."'>
                    <button type='submit' class='action-btn hapus' onclick=\"return confirm('Yakin ingin menghapus siswa ini?')\">Hapus</button>
                </form>
              </td>";
        echo "</tr>";
    }
    ?>
</table>

</body>
</html>
