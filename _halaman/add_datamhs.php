<?php
//DB connection
require '../_helpers/helper.php';

// pengecekan apakah tombol submit sudah ditekan
if (isset($_POST["submit"])) {
    //cek apakah data berhasil di Tambah atau tidak
    if (tambah_mhs($_POST) > 0) {
        echo "<script>
        alert('Data Berhasil di Tambahkan!');
        document.location.href='datamahasiswa.php';
        </script>";
    } else {
        echo "<script>
        alert('Data Gagal di Tambahkan!');
        </script>";
    }
}
include '../_layouts/up.php';
?>

<!-- Page Heading / content -->
<h2>Tambah Data Mahasiswa</h2>
<hr>
<form method="post" action="">
    <div class="mb-3">
        <label for="nama_mhs" class="form-label">Nama Mahasiswa</label>
        <input type="text" name="NAMA_MHS" class="form-control" required>
    </div>
    <div class="mb-3">
        <label for="nim_mhs" class="form-label">No. Induk Mahasiswa</label>
        <input type="text" name="NIM_MHS" class="form-control" required>
    </div>
    <div class="mb-3">
        <label for="angkatan_mhs" class="form-label">Angkatan Mahasiswa</label>
        <input type="text" name="ANGKATAN_MHS" class="form-control" required>
    </div>
    <div class="mb-3">
        <label for="prodi_mhs" class="form-label">Program Studi Mahasiswa</label>
        <input type="text" name="PRODI_MHS" class="form-control" required>
    </div>
    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>

<?php
include '../_layouts/down.php';
?>