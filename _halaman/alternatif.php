<?php
require '../_helpers/helper.php';
$alternatif = query("SELECT * FROM alternatif");
?>


<?php
include '../_layouts/up.php';
?>

<!-- Page Heading / content -->
<div class="container-fluit mt-3">
  <div class="container-fluit mt-3">
    <a class="btn btn-success" href="add_alternatif.php" role="button"><i class="fa fa-plus"
        aria-hidden="true"></i>&nbsp
      Tambah</a>
    <table class="table table-hover mt-3">
      <thead>
        <tr>
          <th>No</th>
          <th>Nama Alternatif</th>
          <th>Keterangan</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        <?php
$i = 1;
foreach ($alternatif as $row): ?>
        <tr>
          <td><?=$i;?></td>
          <td><?=$row["NAMA_ALTERNATIF"];?></td>
          <td><?=$row["KETERANGAN_ALTERNATIF"];?></td>
          <td>
            <div>
              <a class="btn btn-info" href="edit_alternatif.php?id=<?=$row["ID_ALTERNATIF"];?>"><i class="fa fa-pencil"
                  aria-hidden="true"></i></a>
              <a class="btn btn-danger" href="delete_alt.php?id=<?=$row["ID_ALTERNATIF"];?>"><i class="fa fa-ban"
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