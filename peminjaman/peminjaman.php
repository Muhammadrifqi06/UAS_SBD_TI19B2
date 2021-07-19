
<section class="content">
      <div class="row">
<div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Transaksi Peminjaman</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <a href="?page=peminjaman&aksi=tambah" class="btn btn-info" style="margin-bottom: 10px" title="">Tambah</a>
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>ID Peminjaman</th>
                  <th>ID Buku</th>
                   <th>Nim</th>
                  <th>Tanggal Peminjaman</th>
                  <th>Tanggal Pengembalian</th>
                <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
<?php

  $no_urut = 0;
  $sql = $conn->query("select * from peminjaman");
  while($data = $sql->fetch_assoc()){
    $no_urut++;
?>

<tr>
    <td><?php echo $no_urut; ?></td>
    <td><?php echo $data['id_pinjam'] ?></td>
    <td><?php echo $data['id_buku'] ?></td>
    <td><?php echo $data['id_mhsw'] ?></td>
    <td><?php echo $data['tgl_pinjam'] ?></td>
<td><?php echo $data['tgl_kembali'] ?></td>
    <td>
      <a href="?page=peminjaman&aksi=ubah&id=<?php echo $data['id_pinjam']?> " class="btn btn-success" title=""><i class="fa fa-edit"></i>Edit</a>
    
</td>
</tr>

 <?php }?>

            </tbody>
        </table>
    </div>
</div>
</div>
</section>