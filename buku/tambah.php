
<section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Tambah Data Buku</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form action="" method="POST">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">ID Buku</label>
                  <input type="text" class="form-control" name="id_buku">
                </div>

                <div class="form-group">
                  <label for="exampleInputPassword1">Judul </label>
                  <input type="text" class="form-control" name="judul">
                </div>

                <div class="form-group">
                  <label for="exampleInputPassword1">Pengarang </label>
                  <input type="text" class="form-control" name="pengarang">
                </div>

                <div class="form-group">
                  <label for="exampleInputPassword1">Penerbit </label>
                  <input type="text" class="form-control" name="penerbit">
                </div>

              <div class="box-footer">
                <button type="submit" name="simpan" class="btn btn-primary">simpan</button>
              </div>
            </form>
          </div>

          <?php
              
              if(isset($_POST['simpan'])){

                $id_buku = $_POST['id_buku'];
                $judul = $_POST['judul'];
                $pengarang = $_POST['pengarang'];
                $penerbit = $_POST['penerbit'];

                $sql = $conn->query("INSERT INTO buku(id_buku,judul,pengarang,penerbit) 
                VALUES('$id_buku','$judul','$pengarang','$penerbit')");

                  ?>
                  <script type="text/javascript">
                    alert("Data Berhasil Di simpan");
                    window.location.href="?page=buku";
                </script>
                  
                  <?php
                      
                }
              
?>
                