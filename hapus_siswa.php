<?php
include 'koneksi.php';

if(isset($_POST['id'])){
    $id = $_POST['id'];
    $sql = "DELETE FROM siswa WHERE id='$id'";
    if($conn->query($sql) === TRUE){
        header("Location: index.php");
    } else {
        echo "Error: ".$conn->error;
    }
}
?>
