<title>Data Siswa</title>

<h2>Data Siswa</h2>
<p>
    <a class="tambah" href="tambah.php">Tambah</a>
</p>
<table>
    <thead>
        <th>NO</th>
        <th>Nama</th>
        <th>Kelas</th>
        <th>Jurusan</th>
        <th>Aksi</th>
    </thead>
    <tbody>

<?php
include "config.php";

$query = "select * from siswa";

$hasil = mysqli_query($koneksi,$query);
$no=1;
while($data = mysqli_fetch_assoc($hasil)){?>
        <tr>
            <td> <?=$no?> </td>
            <td> <?=$data['nama']?> </td>
            <td> <?=$data['kelas']?> </td>
            <td> <?=$data['jurusan']?> </td>
            <td>
                <a class="tombol edit" href="edit.php?id=<?=$data['id']?>">Edit</a>
                <a class="tombol hapus" href="hapus.php?id=<?=$data['id']?>">Hapus</a>
            </td>
        </tr>
<?php
$no++;
}
?>

    </tbody>
</table>



<style>
    table{
        border-collapse:collapse;
    }

    th,td{
        border:1px solid black;
        padding:5px;
    }

    th{
        background:#ccc;
    }
    a{
        text-decoration:none;
    }
    .tambah{
        background:blue;
        color;white;
        padding:3px;
        font:weight:bold;
    }
    .tombol1{
        color:black;
        padding:3px;
        font-size:12px;
    }
    .edit{
        background:orange;
    }
    .hapus{

        background:red;
    }
</style>




