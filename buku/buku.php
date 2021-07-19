
<section class="content">
      <div class="row">
<div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Buku</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <a href="?page=buku&aksi=tambah" class="btn btn-info" style="margin-bottom: 10px" title="">Tambah</a>
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>ID Buku</th>
                  <th>Judul</th>
                  <th>Pengarang</th>
                  <th>Penerbit</th>
                <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
<?php

  $no_urut = 0;
  $sql = $conn->query("select * from buku");
  while($data = $sql->fetch_assoc()){
    $no_urut++;
?>

<tr>
    <td><?php echo $no_urut; ?></td>
    <td><?php echo $data['id_buku'] ?></td>
    <td><?php echo $data['judul'] ?></td>
    <td><?php echo $data['pengarang'] ?></td>
    <td><?php echo $data['penerbit'] ?></td>

    <td>
      <a href="?page=buku&aksi=ubah&id=<?php echo $data['id_buku']?> " class="btn btn-success" title=""><i class="fa fa-edit"></i> ubah</a>
      <a onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')" href="?page=buku&aksi=hapus&id=<?php echo $data['id_buku']?>" class="btn btn-danger" title=""><i class="fa fa-trash"></i> hapus</a>
    </td>

</tr>

 <?php }?>
            </tbody>
        </table>
    </div>
</div>
</div>
</section>