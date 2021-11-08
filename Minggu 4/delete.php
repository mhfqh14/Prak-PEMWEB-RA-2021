<?php
    include 'koneksi.php';
    $id=$_POST["id"];
    $kon->query("DELETE FROM mahasiswa WHERE id=".$id);
?>