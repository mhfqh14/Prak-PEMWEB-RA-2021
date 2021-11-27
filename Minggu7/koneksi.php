<?php
    $kon = new mysqli("localhost","root","","praktikum");
    if(!$kon){
        echo "Gagal Koneksi";
        exit();
    }
?>