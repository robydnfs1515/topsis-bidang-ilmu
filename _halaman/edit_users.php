<?php
//DB connection
require '../_helpers/helper.php';

//DB connection
$id = $_GET["id"];

//query data mahasiswa berdasarkan ID!
$usr = query("SELECT * FROM users WHERE ID_USERS = $id")[0];

// pengecekan apakah tombol submit sudah ditekan
if (isset($_POST["submit"])) {
    //cek apakah data berhasil di Ubah atau tidak
    if (ubah_user($_POST) > 0) {
        echo "<script>
        alert('Data Berhasil di Ubah!');
        document.location.href='pengguna.php';
        </script>";
    } else {
        echo "<script>
        alert('Data Gagal di Ubah!');
        document.location.href='pengguna.php';
        </script>";
    }
}
include '../_layouts/up.php';
?>

<!-- Page Heading / content -->
<h2>Edit Data Pengguna</h2>
<hr>
<form method="post" action="">
  <input type="hidden" name="ID_USERS" value="<?=$usr["ID_USERS"];?>">
  <div class=" mb-3">
    <label for="nama_usr" class="form-label">Nama Pengguna</label>
    <input type="text" name="NAMA_USERS" class="form-control" value="<?php echo $usr['NAMA_USERS'] ?>">
  </div>
  <div class="mb-3">
    <label for="username_usr" class="form-label">Username Pengguna</label>
    <input type="text" name="USERNAME_USERS" class="form-control" value="<?php echo $usr['USERNAME_USERS'] ?>">
  </div>
  <div class="mb-3">
    <label for="password_usr" class="form-label">Password Pengguna</label>
    <input type="text" name="PASSWORD_USERS" class="form-control" value="<?php echo $usr['PASSWORD_USERS'] ?>">
  </div>
  <button type="submit" class="btn btn-primary" name="submit">Update Data</button>
</form>

<?php
include '../_layouts/down.php';
?>