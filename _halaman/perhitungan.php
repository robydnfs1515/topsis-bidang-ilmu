<?php
require '../_helpers/helper.php';
$mahasiswa = query("SELECT * FROM mahasiswa");
?>

<?php
include '../_layouts/up.php';
?>

<!-- Page Heading / content -->
<div class="container-fluit mt-3">
    <table class="table table-hover">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Mahasiswa</th>
                <th>No. Induk Mahasiswa</th>
                <th>Angkatan</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php
$i = 1;
foreach ($mahasiswa as $row): ?>
            <tr>
                <td><?=$i;?></td>
                <td><?=$row["NAMA_MHS"];?></td>
                <td><?=$row["NIM_MHS"];?></td>
                <td><?=$row["ANGKATAN_MHS"];?></td>
                <td>
                    <div>
                        <a href="add_matriks_satu.php?id=<?=$row["ID_MHS"];?>" class="btn btn-info"><i
                                class="fa fa-list-ol" aria-hidden="true"></i>
                            &nbsp Tambah Matriks</a>
                        <a href="edit_mhs.php?id=<?=$row["ID_MHS"];?>" class="btn btn-warning"><i class="fa fa-list-ol"
                                aria-hidden="true"></i>
                            &nbsp Edit</a>
                        <a href="add_hitung.php?id=<?=$row["ID_MHS"];?>" class="btn btn-danger"><i
                                class="fa fa-sort-numeric-asc" aria-hidden="true"></i>&nbsp
                            Hitung</a>
                    </div>
                </td>
            </tr>
            <?php
$i++;
endforeach;?>
        </tbody>
    </table>
</div>

<?php
include '../_layouts/down.php';
?>