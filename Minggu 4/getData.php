<?php
    include 'koneksi.php';
    $queryResult=$kon->query("SELECT * FROM mahasiswa");
    $result=array();
    while($fethData=$queryResult->fetch_assoc()){
        $result[]=$fethData;
    }
    echo json_encode($result);
?>