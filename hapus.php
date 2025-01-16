<?php
include "config.php";
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $query = "delete from siswa where id='$id'";
    $hasil = mysqli_query($koneksi,$query);
if(mysqli_affected_rows($koneksi)>0){
    echo "BErhasil Menghapus Data";
    echo "<meta http-equiv='refresh' content='1, url=index.php'>";
}else{
    echo "Gagal MEnghapus Data";
    echo "<meta http-equiv='refresh' content='1, url=index.php'>";
}
}else{?>
<fieldset style="width:20%">
<legend>Hapus Siswa</legend>
<form action="" method="get">
    <input type="number" name="id" id="id" required>
    <input type="submit" value="Hapus">
</form>
</fieldset>

<?php
}
    
?>


