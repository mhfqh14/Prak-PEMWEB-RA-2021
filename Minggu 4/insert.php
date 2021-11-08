<?php
    include 'koneksi.php';
    $result["message"] = "";

    $nim=$_POST["nim"];
    $nama=$_POST["nama"];
    $prodi=$_POST["prodi"];
    $angkatan=$_POST["angkatan"];

    if($nim==""){
        $result["message"]="NIM harus dimasukkan !";
    }else if($nama==""){
        $result["message"]="Nama harus dimasukkan !";
    }else{
        $queryResult=$kon->query("INSERT INTO mahasiswa VALUES (null,".$nim.",'".$nama."','".$prodi."',".$angkatan.")"); 
        if($queryResult){
            $result["message"]="Berhasil Tambah Data";
        }else{
            $result["message"]="Gagal Tambah Data"; 
        }
    }
    echo json_encode($result);
?>