<?php
//DB connection
require '../_helpers/helper.php';

//DB connection
$id = $_GET["id"];

//query data mahasiswa berdasarkan ID!
$alt = query("SELECT * FROM alternatif WHERE ID_ALTERNATIF = $id")[0];

// pengecekan apakah tombol submit sudah ditekan
if (isset($_POST["submit"])) {
    //cek apakah data berhasil di Tambah atau tidak
    if (ubah_alt($_POST) > 0) {
        echo "<script>
        alert('Data Berhasil di Ubah!');
        document.location.href='alternatif.php';
        </script>";
    } else {
        echo "<script>
        alert('Data Gagal di Ubah!');
        document.location.href='alternatif.php';
        </script>";
    }
}
include '../_layouts/up.php';
?>

<!-- Page Heading / content -->
<h2>Edit Data Alternatif</h2>
<hr>
<form method="post" action="">
  <input type="hidden" name="ID_ALTERNATIF" value="<?=$alt["ID_ALTERNATIF"];?>">
  <div class="mb-3">
    <label for="nama_alt" class="form-label">Nama Alternatif</label>
    <input type="text" name="NAMA_ALTERNATIF" class="form-control" value="<?php echo $alt['NAMA_ALTERNATIF'] ?>">
  </div>
  <div class="mb-3">
    <label for="keterangan_alt" class="form-label">Keterangan Alternatif</label>
    <input type="text" name="KETERANGAN_ALTERNATIF" class="form-control"
      value="<?php echo $alt['KETERANGAN_ALTERNATIF'] ?>">
  </div>
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>


<?php
include '../_layouts/down.php';
?>