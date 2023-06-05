<?php
//DB connection
require '../_helpers/helper.php';

//DB connection
$id = $_GET["id"];

//query data mahasiswa berdasarkan ID!
$krt = query("SELECT * FROM kriteria WHERE ID_KRITERIA = $id")[0];

// pengecekan apakah tombol submit sudah ditekan
if (isset($_POST["submit"])) {
    //cek apakah data berhasil di Tambah atau tidak
    if (ubah_krt($_POST) > 0) {
        echo "<script>
        alert('Data Berhasil di Ubah!');
        document.location.href='kriteria.php';
        </script>";
    } else {
        echo "<script>
        alert('Data Gagal di Ubah!');
        document.location.href='kriteria.php';
        </script>";
    }
}
include '../_layouts/up.php';
?>

<!-- Page Heading / content -->
<h2>Edit Data Kriteria</h2>
<hr>
<form method="post" action="">
<input type="hidden" name="ID_KRITERIA" value="<?=$krt["ID_KRITERIA"];?>">
    <div class="mb-3">
        <label for="nama_krt" class="form-label">Nama Kriteria</label>
        <input type="text" name="NAMA_KRITERIA" class="form-control" value="<?php echo $krt['NAMA_KRITERIA'] ?>">
    </div>
    <div class="mb-3">
        <label for="bobot_krt" class="form-label">Bobot Kriteria</label>
        <input type="text" name="BOBOT_KRITERIA" class="form-control" value="<?php echo $krt['BOBOT_KRITERIA'] ?>">
    </div>
    <div class="mb-3">
        <label for="status_krt" class="form-label">Status</label>
        <input type="text" name="STATUS_KRITERIA" class="form-control" value="<?php echo $krt['STATUS_KRITERIA'] ?>">
    </div>
    <div class="mb-3">
        <label for="keterangan_krt" class="form-label">Keterangan Kriteria</label>
        <input type="text" name="KETERANGAN_KRITERIA" class="form-control" value="<?php echo $krt['KETERANGAN_KRITERIA'] ?>">
    </div>
    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>

<?php
include '../_layouts/down.php';
?>