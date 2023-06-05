<?php
require '../_helpers/helper.php';
$mahasiswa = query("SELECT * FROM mahasiswa");
?>

<?php
include '../_layouts/up.php';
?>

<!-- Page Heading / content -->
<div class="container-fluit mt-3">
    <a class="btn btn-success" href="add_datamhs.php" role="button"><i class="fa fa-plus" aria-hidden="true"></i>&nbsp
        Tambah</a>
    <table class="table table-hover mt-3">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>No. Induk Mahasiswa</th>
                <th>Angkatan</th>
                <th>Program Studi</th>
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
                <td><?=$row["PRODI_MHS"];?></td>
                <td>
                    <div>
                        <a href="edit_mhs.php?id=<?=$row["ID_MHS"];?>" class="btn btn-info"><i class="fa fa-pencil"
                                aria-hidden="true"></i></a>
                        <a href="delete_mhs.php?id=<?=$row["ID_MHS"];?>" class="btn btn-danger"><i class="fa fa-ban"
                                aria-hidden="true"></i></a>
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