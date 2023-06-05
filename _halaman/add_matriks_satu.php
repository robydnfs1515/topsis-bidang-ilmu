<?php
//DB connection
$id = $_GET['id'];
require '../_helpers/helper.php';

// pengecekan apakah tombol submit sudah ditekan
if (isset($_POST["submit"])) {
    //cek apakah data berhasil di Tambah atau tidak
    if (tambah_matriks($_POST) > 0) {
        echo "<script>
        alert('Data Berhasil di Tambahkan!');
        document.location.href='perhitungan.php';
        </script>";
    } else {
        echo "<script>
        alert('Data Gagal di Tambahkan!');
        document.location.href='perhitungan.php';
        </script>";
    }
}
include '../_layouts/up.php';
?>
<!-- Page Heading / content -->
<form method="post" action="">
    <!-- ------ Sistem Pakar ------- -->
    <div class="mb-3">
        <input type="hidden" name="ID_MHS" value='<?=$id;?>' class="form-control">
    </div>
    <h2>Data Matriks || Sistem Pakar</h2>
    <hr>
    <div class="mb-3">
        <label for="matriks11" class="form-label">Matriks 11</label>
        <input type="number" name="MSATU_SATU" class="form-control" required>
    </div>
    <div class="mb-3">
        <label for="maktriks12" class="form-label">Matriks 12</label>
        <input type="number" name="MSATU_DUA" class="form-control" required>
    </div>
    <div class="mb-3">
        <label for="matriks13" class="form-label">Matriks 13</label>
        <input type="number" name="MSATU_TIGA" class="form-control" required>
    </div>
    <div class="mb-3">
        <label for="matriks14" class="form-label">Matriks 14</label>
        <input type="number" name="MSATU_EMPAT" class="form-control" required>
    </div>
    <!-- ------ Sistem Pakar ------- -->
    <br>
    <!-- ------ Data Mining ------- -->
    <h2>Data Matriks || Data Mining</h2>
    <hr>
    <div class="mb-3">
        <label for="matriks21" class="form-label">Matriks 21</label>
        <input type="number" name="MDUA_SATU" class="form-control" required>
    </div>
    <div class="mb-3">
        <label for="matriks22" class="form-label">Matriks 22</label>
        <input type="number" name="MDUA_DUA" class="form-control" required>
    </div>
    <div class="mb-3">
        <label for="matriks23" class="form-label">Matriks 23</label>
        <input type=number" name="MDUA_TIGA" class="form-control" required>
    </div>
    <div class="mb-3">
        <label for="matriks24" class="form-label">Matriks 24</label>
        <input type="number" name="MDUA_EMPAT" class="form-control" required>
    </div>
    <!-- ------ Data Mining ------- -->
    <br>
    <!-- ------ SPK ------- -->
    <h2>Data Matriks || SPK</h2>
    <hr>
    <div class="mb-3">
        <label for="matriks31" class="form-label">Matriks 31</label>
        <input type="number" name="MTIGA_SATU" class="form-control" required>
    </div>
    <div class="mb-3">
        <label for="matriks32" class="form-label">Matriks 32</label>
        <input type="number" name="MTIGA_DUA" class="form-control" required>
    </div>
    <div class="mb-3">
        <label for="matriks33" class="form-label">Matriks 33</label>
        <input type="number" name="MTIGA_TIGA" class="form-control" required>
    </div>
    <div class="mb-3">
        <label for="matriks34" class="form-label">Matriks 34</label>
        <input type="number" name="MTIGA_EMPAT" class="form-control" required>
    </div>
    <!-- ------ SPK ------- -->
    <br>
    <!-- ------ Citra ------- -->
    <h2>Data Matriks || Citra</h2>
    <hr>
    <div class="mb-3">
        <label for="matriks41" class="form-label">Matriks 41</label>
        <input type="number" name="MEMPAT_SATU" class="form-control" required>
    </div>
    <div class="mb-3">
        <label for="matriks42" class="form-label">Matriks 42</label>
        <input type="number" name="MEMPAT_DUA" class="form-control" required>
    </div>
    <div class="mb-3">
        <label for="matriks43" class="form-label">Matriks 43</label>
        <input type="number" name="MEMPAT_TIGA" class="form-control" required>
    </div>
    <div class="mb-3">
        <label for="matriks44" class="form-label">Matriks 44</label>
        <input type="number" name="MEMPAT_EMPAT" class="form-control" required>
    </div>
    <!-- ------ Citra ------- -->
    <br>
    <!-- ------ Jaringan Komputer ------- -->
    <h2>Data Matriks || Jaringan Komputer</h2>
    <hr>
    <div class="mb-3">
        <label for="matriks51" class="form-label">Matriks 51</label>
        <input type="number" name="MLIMA_SATU" class="form-control" required>
    </div>
    <div class="mb-3">
        <label for="matriks52" class="form-label">Matriks 52</label>
        <input type="number" name="MLIMA_DUA" class="form-control" required>
    </div>
    <div class="mb-3">
        <label for="matriks53" class="form-label">Matriks 53</label>
        <input type="number" name="MLIMA_TIGA" class="form-control" required>
    </div>
    <div class="mb-3">
        <label for="matriks54" class="form-label">Matriks 54</label>
        <input type="number" name="MLIMA_EMPAT" class="form-control" required>
    </div>
    <!-- ------ Jaringan Komputer ------- -->

    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>

<?php
include '../_layouts/down.php';
?>