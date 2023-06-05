<?php
require '../_helpers/helper.php';
$users = query("SELECT * FROM tb_users");
?>

<?php
include '../_layouts/up.php';
?>

<!-- Page Heading / content -->
<div class="container-fluit mt-3">
  <a href=""></a>
  <br>
  <table class="table table-hover mt-3">
    <thead>
      <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Username</th>
        <th>Password</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      <?php
$i = 1;
foreach ($users as $row): ?>
      <tr>
        <td><?=$i;?></td>
        <td><?=$row["NAMA_USER"];?></td>
        <td><?=$row["USERNAME_USER"];?></td>
        <td><?=$row["PASSWORD_USER"];?></td>
        <td>
          <div>
            <a href="edit_users.php?id=<?=$row["ID_USERS"];?>" class="btn btn-info"><i class="fa fa-pencil"
                aria-hidden="true"></i></a>
            <a href="delete_users.php?id=<?=$row["ID_USERS"];?>" class="btn btn-danger"><i class="fa fa-ban"
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