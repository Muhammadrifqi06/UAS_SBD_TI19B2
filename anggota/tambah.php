
<section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Tambah Data Anggota</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form action="" method="POST">
            <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">ID Anggota</label>
                  <input type="text" class="form-control" name="id_mhsw">
                </div>

                <div class="form-group">
                  <label for="exampleInputPassword1">Nama </label>
                  <input type="text" class="form-control" name="nama_mhsw">
                </div>

                <div class="form-group">
                  <label for="exampleInputPassword1">Nim </label>
                  <input type="text" class="form-control" name="nim_mhsw">
                </div>

                <div class="form-group">
                  <label for="exampleInputPassword1">Kelas </label>
                  <input type="text" class="form-control" name="kelas_mhsw">
                </div>

              <div class="box-footer">
                <button type="submit" name="simpan" class="btn btn-primary">simpan</button>
              </div>
            </form>
          </div>

          <?php
              
              if(isset($_POST['simpan'])){

                $id_mhsw = $_POST['id_mhsw'];
                $nama_mhsw = $_POST['nama_mhsw'];
                $nim_mhsw  = $_POST['nim_mhsw'];
                $kelas_mhsw = $_POST['kelas_mhsw'];

                $sql = $conn->query("INSERT INTO mahasiswa(id_mhsw,nama_mhsw,nim_mhsw,kelas_mhsw) 
                VALUES('$id_mhsw','$nama_mhsw','$nim_mhsw','$kelas_mhsw')");


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
                