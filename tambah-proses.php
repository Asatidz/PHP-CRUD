<?php
include "config.php";

$nama = $_POST['nama'];
$kelas = $_POST['kelas'];
$jurusan = $_POST['jurusan'];


$query = "insert into siswa set ";
$query .= "nama = '$nama', ";
$query .= "kelas = '$kelas', ";
$query .= "jurusan = '$jurusan' ";

$hasil = mysqli_query($koneksi,$query);
if(mysqli_affected_rows($koneksi)>0){
    echo "BErhasil Meanmbah Data";
    echo "<meta http-equiv='refresh' content='1, url=index.php'>";
}else{
    echo "Gagal MEnghapus Data";
    echo "<meta http-equiv='refresh' content='1, url=index.php'>";
}
?>