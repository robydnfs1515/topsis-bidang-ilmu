<?php
//DB connection
require '../_helpers/helper.php';

// pengecekan apakah tombol submit sudah ditekan
if (isset($_POST["submit"])) {
    //cek apakah data berhasil di Tambah atau tidak
    if (tambah_alt($_POST) > 0) {
        echo "<script>
        alert('Data Berhasil di Tambahkan!');
        document.location.href='alternatif.php';
        </script>";
    } else {
        echo "<script>
        alert('Data Gagal di Tambahkan!');
        document.location.href='alternatif.php';
        </script>";
    }
}
include '../_layouts/up.php';
?>

<!-- Page Heading / content -->
<h2>Tambah Data Alternatif</h2>
<hr>
<form method="post" action="">
    <div class="mb-3">
        <label for="nama_krt" class="form-label">Nama Alternatif</label>
        <input type="text" name="NAMA_ALTERNATIF" class="form-control">
    </div>
    <div class="mb-3">
        <label for="bobot_krt" class="form-label">Keterangan Alternatif</label>
        <input type="text" name="KETERANGAN_ALTERNATIF" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>

<?php
include '../_layouts/down.php';
?>