<?php
require '../_helpers/helper.php';
//DB connection
$id = $_GET["id"];

//query data mahasiswa berdasarkan ID!
$mhs = query("SELECT * FROM mahasiswa WHERE ID_MHS = $id")[0];

// pengecekan apakah tombol submit sudah ditekan
if (isset($_POST["submit"])) {
    //cek apakah data berhasil di Ubah atau tidak
    if (ubah_mhs($_POST) > 0) {
        echo "<script>
        alert('Data Berhasil di Ubah!');
        document.location.href='datamahasiswa.php';
        </script>";
    } else {
        echo "<script>
        alert('Data Gagal di Ubah!');
        document.location.href='datamahasiswa.php';
        </script>";
    }
}
include '../_layouts/up.php';
?>

<!-- Page Heading / content -->
<h2>Edit Data Mahasiswa</h2>
<hr>
<form method="post" action="">
    <input type="hidden" name="ID_MHS" value="<?=$mhs["ID_MHS"];?>">
    <div class=" mb-3">
        <label for="nama_mhs" class="form-label">Nama Mahasiswa</label>
        <input type="text" name="NAMA_MHS" class="form-control" value="<?php echo $mhs['NAMA_MHS'] ?>">
    </div>
    <div class="mb-3">
        <label for="nim_mhs" class="form-label">No. Induk Mahasiswa</label>
        <input type="text" name="NIM_MHS" class="form-control" value="<?php echo $mhs['NIM_MHS'] ?>">
    </div>
    <div class="mb-3">
        <label for="angkatan_mhs" class="form-label">Angkatan Mahasiswa</label>
        <input type="text" name="ANGKATAN_MHS" class="form-control" value="<?php echo $mhs['ANGKATAN_MHS'] ?>">
    </div>
    <div class="mb-3">
        <label for="prodi_mhs" class="form-label">Program Studi Mahasiswa</label>
        <input type="text" name="PRODI_MHS" class="form-control" value="<?php echo $mhs['PRODI_MHS'] ?>">
    </div>
    <button type="submit" class="btn btn-primary" name="submit">Update Data</button>
</form>

<?php
include '../_layouts/down.php';
?>