
<section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Tambah Data Peminjam</h3>
            </div>

<?php

$id = $_GET['id'];

$result = mysqli_query($conn, "SELECT * FROM peminjaman WHERE id_pinjam=$id");
 
while($user_data = mysqli_fetch_array($result))
{
  $id_pinjam=$user_data['id_pinjam'];
	$id_buku=$user_data['id_buku'];
	$id_mhsw=$user_data['id_mhsw'];
	$tgl_pinjam=$user_data['tgl_pinjam'];
  $tgl_kembali=$user_data['tgl_kembali'];
}
?>



            <!-- /.box-header -->
            <!-- form start -->
            <form action="" method="POST">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputPassword1">ID Peminjaman </label>
                  <input type="text" class="form-control" value=<?php echo $id_pinjam;?> name="id_pinjam">
                </div>
              
                 <div class="form-group">
                  <label for="exampleInputPassword1">ID Buku </label>
                  <input type="text" class="form-control" value=<?php echo $id_buku;?> name="id_buku">
                </div>

             <div class="form-group">
                  <label for="exampleInputPassword1">Nim</label>
                  <input type="text" class="form-control" value=<?php echo $id_mhsw;?> name="id_mhsw">
                </div>

                <div class="form-group">
                  <label for="exampleInputPassword1">Tanggal Peminjaman </label>
                  <input type="text" class="form-control" value=<?php echo $tgl_pinjam;?> name="tgl_pinjam">
                </div>

                <div class="form-group">
                  <label for="exampleInputPassword1">Tanggal Pengembalian </label>
                  <input type="text" class="form-control" value=<?php echo $tgl_kembali;?> name="tgl_kembali">
                </div>

                

              <div class="box-footer">
                <button type="submit" name="simpan" class="btn btn-primary">simpan</button>
              </div>
            </form>
          </div>

          <?php
              

              if(isset($_POST['simpan'])){

                $id = $_POST['id_pinjam,'];

                $id_buku=$_POST['id_buku'];
                $id_mhsw=$_POST['id_mhsw'];
                $tgl_pinjam=$_POST['tgl_pinjam'];
                  $tgl_kembali=$_POST['tgl_kembali'];
              
                  $result = mysqli_query($conn, 
                "UPDATE peminjaman SET id_pinjam  ='$id_pinjam',id_buku='$id_buku',id_mhsw='$id_mhsw',tgl_pinjam='$tgl_pinjam',tgl_kembali='$tgl_kembali' 
                WHERE id_pinjam=$id");

                  ?>
                  <script type="text/javascript">
                    alert("Data Berhasil Di simpan");
                    window.location.href="?page=peminjaman";
                </script>
                  
                  <?php
                      
                }
?>
                