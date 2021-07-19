<section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Tambah Data Buku</h3>
            </div>


            <?php

$id = $_GET['id'];

$result = mysqli_query($conn, "SELECT * FROM buku WHERE id_buku=$id");
 
while($user_data = mysqli_fetch_array($result))
{
	$id_buku = $user_data['id_buku'];
	$judul = $user_data['judul'];
	$pengarang = $user_data['pengarang'];
	$penerbit = $user_data['penerbit'];
}
?>
            <!-- /.box-header -->
            <!-- form start -->
            <form action="" method="POST">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">ID Buku</label>
                  <input type="text" class="form-control" value=<?php echo $id_buku;?> name="id_buku">
                </div>

                <div class="form-group">
                  <label for="exampleInputPassword1">Judul </label>
                  <input type="text" class="form-control" value=<?php echo $judul;?> name="judul">
                </div>

                <div class="form-group">
                  <label for="exampleInputPassword1">Pengarang </label>
                  <input type="text" class="form-control" value=<?php echo $pengarang;?> name="pengarang">
                </div>

                <div class="form-group">
                  <label for="exampleInputPassword1">Penerbit </label>
                  <input type="text" class="form-control" value=<?php echo $penerbit;?> name="penerbit">
                </div>

              <div class="box-footer">
                <button type="submit" name="simpan" class="btn btn-primary">simpan</button>
              </div>
            </form>
          </div>

          <?php

include "koneksi.php";

if(isset($_POST['simpan']))
{	
	$id = $_POST['id_buku'];

	$id_buku=$_POST['id_buku'];
	$judul=$_POST['judul'];
	$pengarang=$_POST['pengarang'];
    $penerbit=$_POST['penerbit'];
	
	$result = mysqli_query($conn, 
	"UPDATE buku SET id_buku='$id_buku',judul='$judul',pengarang='$pengarang',penerbit='$penerbit' 
	WHERE id_buku=$id");
	
	header("Location: page/buku/buku.php");

?>
                  <script type="text/javascript">
                    alert("Data Berhasil Di simpan");
                    window.location.href="?page=buku";
                </script>
  <?php
}      

?>

                