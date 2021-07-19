<section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Ubah Data Buku</h3>
            </div>


            <?php

$id = $_GET['id'];

$result = mysqli_query($conn, "SELECT * FROM mahasiswa WHERE id_mhsw=$id");
 
while($user_data = mysqli_fetch_array($result))
{
	$id_mhsw = $user_data['id_mhsw'];
	$nama_mhsw = $user_data['nama_mhsw'];
	$nim_mhsw = $user_data['nim_mhsw'];
	$kelas_mhsw = $user_data['kelas_mhsw'];
}
?>
            <!-- /.box-header -->
            <!-- form start -->
            <form action="" method="POST">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">ID Anggota</label>
                  <input type="text" class="form-control" value=<?php echo $id_mhsw;?> name="id_mhsw">
                </div>

                <div class="form-group">
                  <label for="exampleInputPassword1">Nama </label>
                  <input type="text" class="form-control" value=<?php echo $nama_mhsw;?> name="nama_mhsw">
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Nim </label>
                  <input type="text" class="form-control" value=<?php echo $nim_mhsw;?> name="nim_mhsw">
                </div>

                <div class="form-group">
                  <label for="exampleInputPassword1">Kelas </label>
                  <input type="text" class="form-control" value=<?php echo $kelas_mhsw;?> name="kelas_mhsw">
                </div>

              <div class="box-footer">
                <button type="submit" name="ubah" class="btn btn-primary">simpan</button>
              </div>
            </form>
          </div>

          <?php

include "koneksi.php";
              
              if(isset($_POST['ubah'])){

                $id_mhsw = $_POST['id_mhsw'];
                $nama_mhsw = $_POST['nama_mhsw'];
                $nim_mhsw  = $_POST['nim_mhsw'];
                $kelas_mhsw = $_POST['kelas_mhsw'];

               

                $sql = $conn->query("UPDATE mahasiswa SET id_mhsw='$id_mhsw',nama_mhsw='$nama_mhsw',nim_mhsw=$nim_mhsw,kelas_mhsw='$kelas_mhsw' 
                WHERE id_mhsw='$id'");

                if($sql) {
                  ?>
                  <script type="text/javascript">
                    alert("Data Berhasil Di simpan");
                    window.location.href="?page=anggota";
                </script>
                  
                  <?php
                      
                }
              }
            
?>

                