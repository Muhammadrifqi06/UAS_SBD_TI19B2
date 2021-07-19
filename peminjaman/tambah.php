
<section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Tambah Data Peminjam</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form action="" method="POST">
            <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">ID Peminjam</label>
                  <input type="text" class="form-control" name="id_pinjam">
                </div>

                <div class="form-group">
                  <label for="exampleInputPassword1">ID Buku </label>
                  <input type="text" class="form-control" name="id_buku">
                </div>

                <div class="form-group">
                  <label for="exampleInputPassword1">Nim</label>
                  <input type="text" class="form-control" name="id_mhsw">
                </div>

                <div class="form-group">
                  <label for="exampleInputPassword1">Tanggal Pinjam </label>
                  <input type="text" class="form-control" name="tgl_pinjam">
                </div>

                <div class="form-group">
                  <label for="exampleInputPassword1">Tanggal Kembali </label>
                  <input type="text" class="form-control" name="tgl_kembali">
                </div>

              <div class="box-footer">
                <button type="submit" name="simpan" class="btn btn-primary">simpan</button>
              </div>
            </form>
          </div>

          <?php
              
              if(isset($_POST['simpan'])){

                $id_pinjam = $_POST['id_pinjam'];
                $id_buku = $_POST['id_buku'];
                $id_mhsw  = $_POST['id_mhsw '];
                $tgl_pinjam = $_POST['tgl_pinjam'];
                $tgl_kembali = $_POST['tgl_kembali'];

                $sql = $conn->query("INSERT INTO peminjaman(id_pinjam,id_buku,id_mhsw,tgl_pinjam,tgl_kembali) 
                VALUES('$id_pinjam','$id_buku','$id_mhsw','$tgl_pinjam','$tgl_kembali')");

                  ?>
                  <script type="text/javascript">
                    alert("Data Berhasil Di simpan");
                    window.location.href="?page=peminjaman";
                </script>
                  
                  <?php
                      

              }
?>
                