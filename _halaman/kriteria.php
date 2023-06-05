<?php
require '../_helpers/helper.php';
$kriteria = query("SELECT * FROM kriteria");
?>

<?php
include '../_layouts/up.php';
?>

<!-- Page Heading / content -->
<div class="container-fluit mt-3">
    <a class="btn btn-success" href="add_kriteria.php" role="button"><i class="fa fa-plus" aria-hidden="true"></i>&nbsp
        Tambah</a>
    <table class="table table-hover mt-3">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Kriteria</th>
                <th>Bobot</th>
                <th>Status</th>
                <th>Keterangan</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php
$i = 1;
foreach ($kriteria as $row): ?>
            <tr>
                <td><?=$i;?></td>
                <td><?=$row["NAMA_KRITERIA"];?></td>
                <td><?=$row["BOBOT_KRITERIA"];?></td>
                <td><?=$row["STATUS_KRITERIA"];?></td>
                <td><?=$row["KETERANGAN_KRITERIA"];?></td>
                <td>
                    <div>
                        <a class="btn btn-info" href="edit_kriteria.php?id=<?=$row["ID_KRITERIA"];?>"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                        <a class="btn btn-danger" href="delete_krt.php?id=<?=$row["ID_KRITERIA"];?>"><i
                                class="fa fa-ban" aria-hidden="true"></i></a>
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