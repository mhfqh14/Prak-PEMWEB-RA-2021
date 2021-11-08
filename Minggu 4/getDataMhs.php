<?php
    include 'koneksi.php';

    $id = $_POST["id"];

    $queryResult = $kon->query("SELECT * FROM mahasiswa WHERE id=".$id);
    $result = array();
    $fetchData = $queryResult->fetch_assoc();
    
    $result=$fetchData;
    
    echo json_encode($result);
?>
