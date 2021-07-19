<?php
  $sql = $conn->query("select * from mahasiswa");
  $mahasiswa = $sql->num_rows;

  $sql2 = $conn->query("select * from buku");
  $buku = $sql->num_rows;

  $sql3 = $conn->query("select * from peminjaman");
  $peminjaman = $sql->num_rows;
?>
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3><?php echo $mahasiswa; ?></h3>

              <p>Data Petugas</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-stalker"></i>
            </div>
            <a href="?page=anggota" class="small-box-footer">Lihat Selengkapnya <i class=""></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3><?php echo $buku; ?><sup style="font-size: 20px"></sup></h3>

              <p>Data buku</p>
            </div>
            <div class="icon">
              <i class="ion ion-folder"></i>
            </div>
            <a href="?page=buku" class="small-box-footer">Lihat Selengkapnya<i class=""></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3><?php echo $peminjaman; ?></h3>

              <p>Data Pinjam Buku</p>
            </div>
            <div class="icon">
              <i class="ion ion-folder"></i>
            </div>
            <a href="?page=peminjaman" class="small-box-footer">Lihat Selengkapnya<i class=""></i></a>
          </div>
        </div>