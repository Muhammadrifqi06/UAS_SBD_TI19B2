<?php
    include 'config.php';
    $id = $_GET['id'];

    $result = mysqli_query($conn, "DELETE FROM mahasiswa WHERE id_mhsw = '{$id}'");

    header('location: index.php');

?>
                  <script type="text/javascript">
                    alert("Data Berhasil Di hapus");
                    window.location.href="?page=anggota";
                </script>
  <?php

?>