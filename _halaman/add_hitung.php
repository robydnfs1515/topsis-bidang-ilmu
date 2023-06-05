<?php
include '../_layouts/up.php';
require '../_helpers/helper.php';
require_once 'topsis.php';

$id = $_GET['id'];

$matriks1 = mysqli_query($db, "SELECT * FROM mahasiswa JOIN matriks_satu ON mahasiswa.ID_MHS = matriks_satu.ID_MHS WHERE mahasiswa.ID_MHS =$id ");
foreach ($matriks1 as $m1) {
}
$matriks2 = mysqli_query($db, "SELECT * FROM mahasiswa JOIN matriks_dua ON mahasiswa.ID_MHS = matriks_dua.ID_MHS WHERE mahasiswa.ID_MHS =$id ") or die(mysqli_error($db));
foreach ($matriks2 as $m2) {
}
$matriks3 = mysqli_query($db, "SELECT * FROM mahasiswa JOIN matriks_tiga ON mahasiswa.ID_MHS = matriks_tiga.ID_MHS WHERE mahasiswa.ID_MHS =$id ") or die(mysqli_error($db));
foreach ($matriks3 as $m3) {
}
$matriks4 = mysqli_query($db, "SELECT * FROM mahasiswa JOIN matriks_empat ON mahasiswa.ID_MHS = matriks_empat.ID_MHS WHERE mahasiswa.ID_MHS =$id ") or die(mysqli_error($db));
foreach ($matriks4 as $m4) {
}
$matriks5 = mysqli_query($db, "SELECT * FROM mahasiswa JOIN matriks_lima ON mahasiswa.ID_MHS = matriks_lima.ID_MHS WHERE mahasiswa.ID_MHS =$id ") or die(mysqli_error($db));
foreach ($matriks5 as $m5) {
}

// data alternatif
$alternatif = [
    ['Sistem Pakar', $m1['MSATU_SATU'], $m1['MSATU_DUA'], $m1['MSATU_TIGA'], $m1['MSATU_EMPAT']],
    ['Data Mining', $m2['MDUA_SATU'], $m2['MDUA_DUA'], $m2['MDUA_TIGA'], $m2['MDUA_EMPAT']],
    ['SPK', $m3['MTIGA_SATU'], $m3['MTIGA_DUA'], $m3['MTIGA_TIGA'], $m3['MTIGA_EMPAT']],
    ['Citra', $m4['MEMPAT_SATU'], $m4['MEMPAT_DUA'], $m4['MEMPAT_TIGA'], $m4['MEMPAT_EMPAT']],
    ['Jaringan Komputer', $m5['MLIMA_SATU'], $m5['MLIMA_DUA'], $m5['MLIMA_TIGA'], $m5['MLIMA_EMPAT']],

];

$topsis = new Topsis($alternatif);

?>

<!-- Page Heading / content -->
<!-- ---------------------------------------------------------------- -->

<h2>1. Kriteria, Bobot, dan Atribut</h2>
<table class="table mt-3">
    <thead>
        <tr>
            <td>No</td>
            <td>Kode</td>
            <td>Kriteria</td>
            <td>Bobot</td>
            <td>Atribut</td>
        </tr>
    </thead>
    <tbody>
        <?php
$kriteria = query("SELECT * FROM kriteria");

$i = 1;
foreach ($kriteria as $row): ?>
        <tr>
            <td><?=$i;?></td>
            <td>C<?=$i;?></td>
            <td><?=$row["NAMA_KRITERIA"];?></td>
            <td><?=$row["BOBOT_KRITERIA"];?></td>
            <td><?=$row["STATUS_KRITERIA"];?></td>
        </tr>

        <?php
$i++;
endforeach;
?>
    </tbody>
</table>

<hr>
<br>

<!-- ---------------------------------------------------------------- -->

<h2>2. Data Alternatif</h2>
<table class="table">
    <thead>
        <tr>
            <td>No</td>
            <td>Alternatif</td>
            <td>C1</td>
            <td>C2</td>
            <td>C3</td>
            <td>C4</td>
        </tr>
    </thead>
    <tbody></tbody>
    <?php
$alternatif = query("SELECT * FROM alternatif");

$i = 1;?>

    <tr>
        <td><?=$i;?></td>
        <td>
            <table>
                <tr>
                    <td>Sistem Pakar</td>
                </tr>
                <tr>
                    <td>Data Mining</td>
                </tr>
                <tr>
                    <td>SPK</td>
                </tr>
                <tr>
                    <td>Citra</td>
                </tr>
                <tr>
                    <td>Jaringan Komputer</td>
                </tr>
            </table>
        </td>

        <td>
            <table>
                <tr>
                    <td><?=$m1['MSATU_SATU']?></td>
                </tr>
                <tr>
                    <td><?=$m2['MDUA_SATU']?></td>
                </tr>
                <tr>
                    <td><?=$m3['MTIGA_SATU']?></td>
                </tr>
                <tr>
                    <td><?=$m4['MEMPAT_SATU']?></td>
                </tr>
                <tr>
                    <td><?=$m5['MLIMA_SATU']?></td>
                </tr>
            </table>
        </td>
        <td>
            <table>
                <tr>
                    <td><?=$m1['MSATU_DUA']?></td>
                </tr>
                <tr>
                    <td><?=$m2['MDUA_DUA']?></td>
                </tr>
                <tr>
                    <td><?=$m3['MTIGA_DUA']?></td>
                </tr>
                <tr>
                    <td><?=$m4['MEMPAT_DUA']?></td>
                </tr>
                <tr>
                    <td><?=$m5['MLIMA_DUA']?></td>
                </tr>
            </table>
        </td>
        <td>
            <table>
                <tr>
                    <td><?=$m1['MSATU_TIGA']?></td>
                </tr>
                <tr>
                    <td><?=$m2['MDUA_TIGA']?></td>
                </tr>
                <tr>
                    <td><?=$m3['MTIGA_TIGA']?></td>
                </tr>
                <tr>
                    <td><?=$m4['MEMPAT_TIGA']?></td>
                </tr>
                <tr>
                    <td><?=$m5['MLIMA_TIGA']?></td>
                </tr>
            </table>
        </td>
        <td>
            <table>
                <tr>
                    <td><?=$m1['MSATU_EMPAT']?></td>
                </tr>
                <tr>
                    <td><?=$m2['MDUA_EMPAT']?></td>
                </tr>
                <tr>
                    <td><?=$m3['MTIGA_EMPAT']?></td>
                </tr>
                <tr>
                    <td><?=$m4['MEMPAT_EMPAT']?></td>
                </tr>
                <tr>
                    <td><?=$m5['MLIMA_EMPAT']?></td>
                </tr>
            </table>
        </td>
    </tr>

    <!-- ---------------------------------------------------------------- -->


    </tr>
    </tbody>
</table>

<hr>
<br>

<!-- ---------------------------------------------------------------- -->

<h2>3. Nilai Pembagi</h2>
<table class="table">
    <thead>
        <tr>
            <td>Kriteria</td>
            <td>C1</td>
            <td>C2</td>
            <td>C3</td>
            <td>C4</td>
        </tr>
    </thead>
    <tbody>
        <td>Pembagi</td>
        <td><?=$topsis->pembagi[0]?></td>
        <td><?=$topsis->pembagi[1]?></td>
        <td><?=$topsis->pembagi[2]?></td>
        <td><?=$topsis->pembagi[3]?></td>
    </tbody>
</table>

<hr>
<br>

<!-- ---------------------------------------------------------------- -->

<h2>4. Normalisasi Matriks</h2>
<table class="table">
    <thead>
        <tr>
            <td>No</td>
            <td>Alternatif</td>
            <td>C1</td>
            <td>C2</td>
            <td>C3</td>
            <td>C4</td>
        </tr>
    </thead>
    <tbody>
        <?php
$no = 1;
foreach ($topsis->normalisasi as $n) {
    ?>

        <tr>
            <td><?=$no?></td>
            <td><?=$n[0]?></td>
            <td><?=$n[1]?></td>
            <td><?=$n[2]?></td>
            <td><?=$n[3]?></td>
            <td><?=$n[4]?></td>
        </tr>

        <?php
$no++;
}
?>

        <tr>
            <th colspan="2">Bobot</th>
            <td><?=$topsis->bobot[0]?></td>
            <td><?=$topsis->bobot[1]?></td>
            <td><?=$topsis->bobot[2]?></td>
            <td><?=$topsis->bobot[3]?></td>
        </tr>
    </tbody>
</table>

<hr>
<br>

<!-- ---------------------------------------------------------------- -->

<h2>5. Menghitung Matriks Keputusan Ternormalisasi dan Terbobot</h2>
<table class="table">
    <thead>
        <tr>
            <td>No</td>
            <td>Alternatif</td>
            <td>C1</td>
            <td>C2</td>
            <td>C3</td>
            <td>C4</td>
        </tr>
    </thead>
    <tbody>
        <?php
$no = 1;
foreach ($topsis->normxbobot as $nb) {
    ?>

        <tr>
            <td><?=$no?></td>
            <td><?=$nb[0]?></td>
            <td><?=$nb[1]?></td>
            <td><?=$nb[2]?></td>
            <td><?=$nb[3]?></td>
            <td><?=$nb[4]?></td>
        </tr>

        <?php
$no++;
}
?>
        <tr>
            <td colspan="2">Atribut</td>
            <td><?=$topsis->atribut[0]?></td>
            <td><?=$topsis->atribut[1]?></td>
            <td><?=$topsis->atribut[2]?></td>
            <td><?=$topsis->atribut[3]?></td>
        </tr>
    </tbody>
</table>

<hr>
<br>

<!-- ---------------------------------------------------------------- -->

<h2>6. Mencari Nilai Solusi Ideal Positif dan Negatif</h2>
<table class="table">
    <tbody>
        <tr>
            <td>Max(y+)</td>
            <td><?=$topsis->ymax[0]?></td>
            <td><?=$topsis->ymax[1]?></td>
            <td><?=$topsis->ymax[2]?></td>
            <td><?=$topsis->ymax[3]?></td>
        </tr>
        <tr>
            <td>Max(y-)</td>
            <td><?=$topsis->ymin[0]?></td>
            <td><?=$topsis->ymin[1]?></td>
            <td><?=$topsis->ymin[2]?></td>
            <td><?=$topsis->ymin[3]?></td>
        </tr>
    </tbody>
</table>

<hr>
<br>

<!-- ---------------------------------------------------------------- -->

<h2>7. Mencari Nilai D+ dan D- Untuk Setiap Alternatif</h2>
<table class="table">
    <thead>
        <tr>
            <td>No</td>
            <td>Alternatif</td>
            <td>D+</td>
            <td>D-</td>
        </tr>
    </thead>
    <tbody>
        <?php
$no = 1;
foreach ($topsis->dplusmin as $dpm) {
    ?>

        <tr>
            <td><?=$no?></td>
            <td><?=$dpm[0]?></td>
            <td><?=$dpm[6]?></td>
            <td><?=$dpm[7]?></td>
        </tr>

        <?php
$no++;
}
?>
    </tbody>
</table>

<hr>
<br>

<!-- ---------------------------------------------------------------- -->

<h2>8. Mencari Hasil Nilai Preferensi</h2>
<table class="table">
    <thead>
        <tr>
            <td>No</td>
            <td>Alternatif</td>
            <td>Preferensi</td>
        </tr>
    </thead>
    <tbody>
        <?php
$no = 1;
foreach ($topsis->dplusmin as $dpm) {
    $preferensi = $dpm[7] / ($dpm[7] + $dpm[6]);
    ?>

        <tr>
            <td><?=$no?></td>
            <td><?=$dpm[0]?></td>
            <td><?=$preferensi?></td>
        </tr>

        <?php
$no++;
}
?>
    </tbody>
</table>

<hr>
<br>

<!-- ---------------------------------------------------------------- -->

<?php
include '../_layouts/down.php';
?>