
<section class="content">
      <div class="row">
<div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Anggota</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <a href="?page=anggota&aksi=tambah" class="btn btn-info" style="margin-bottom: 10px" title="">Tambah</a>
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>ID Petugas</th>
                  <th>Nama</th>
                  <th>Nim</th>
                  
                  <th>Kelas</th>
                <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
<?php

  $no_urut = 0;
  $sql = $conn->query("select * from mahasiswa");
  while($data = $sql->fetch_assoc()){
    $no_urut++;
?>

<tr>
    <td><?php echo $no_urut; ?></td>
    <td><?php echo $data['id_mhsw'] ?></td>
    <td><?php echo $data['nama_mhsw'] ?></td>
    <td><?php echo $data['nim_mhsw'] ?></td>
<td><?php echo $data['kelas_mhsw'] ?></td>
    <td>
      <a href="?page=anggota&aksi=ubah&id=<?php echo $data['id_mhsw']?> " class="btn btn-success" title=""><i class="fa fa-edit"></i> ubah</a>
      <a onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')" href="?page=anggota&aksi=hapus&id=<?php echo $data['id_mhsw']?>" class="btn btn-danger" title=""><i class="fa fa-trash"></i> hapus</a>
    </td>

</tr>

 <?php }?>
            </tbody>
        </table>
    </div>
</div>
</div>
</section>