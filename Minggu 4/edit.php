<?php
    include 'koneksi.php';

    $result["message"] = "";

    $id=$_POST["id"];
    $nim=$_POST["nim"];
    $nama=$_POST["nama"];
    $prodi=$_POST["prodi"];
    $angkatan=$_POST["angkatan"];

    if($nim==""){
        $result["message"]="NIM harus dimasukkan !";
    }else if($nama==""){
        $result["message"]="Nama harus dimasukkan !";
    }else{
        $queryResult=$kon->query("UPDATE mahasiswa SET nim=".$nim.",nama='".$nama."',prodi='".$prodi."',angkatan=".$angkatan." WHERE id=".$id); 
        if($queryResult){
            $result["message"]="Berhasil Edit Data";
        }else{
            $result["message"]="Gagal Edit Data"; 
        }
    }
    echo json_encode($result);
?>