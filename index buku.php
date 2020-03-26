<?php
include '../koneksi.php';

$sql = "SELECT * FROM buku ORDER BY judul";

$res = mysqli_query($connect, $sql);

$pinjam = array();

while ($data = mysqli_fetch_assoc($res)) {
    $pinjam[] = $data;
}

include '../aset/header1.php';
?>
<div class="container">
    <div class="row mt-4">
        <div class="col-md">
        </div>    
    </div>
</div>
<div class="card">
  <div class="card-header">
    <h2 class="card-title"><i class="fas fa-edit"></i>Buku</h2>
  </div>
  <div class="card-body">
  <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Judul</th>
      <th scope="col">Pengarang</th>
      <th scope="col">Stok</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
  <?php
    $no = 1;
    foreach ($pinjam as $p ) { ?>

    <tr>
        <th scope="row"><?= $no ?></th>
        <td><?= $p['judul'] ?></th>                              
        <td><?= $p['pengarang'] ?></td>
        <td><?= $p['stok'] ?></td>
        <td>
        <a href="#" class="badge badge-success">Detail</a>
        <a href="#" class="badge badge-danger">Edit</a>
        <a href="#" class="badge badge-warning">Hapus</a>                           
        </td>
    </tr>
                                        
<?php 
    $no++;
}
?>

  </tbody>
  </table>
  </div>
</div>
<?php
include '../aset/footer1.php';
?>