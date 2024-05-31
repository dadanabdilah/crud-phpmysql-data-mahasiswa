<?php
include "../../conf/conn.php";
if($_POST){
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $jurusan = $_POST['jurusan'];
    $query = ("INSERT INTO mahasiswa(id_mahasiswa,nim,nama,kelas,jurusan) VALUES (null,'".$nim."','".$nama."','".$kelas."','".$jurusan."')");
    if(!mysqli_query($conn, $query)){
        die(mysqli_connect_errno());
    }else{
        echo '<script>alert("Data Berhasil Ditambahkan !!!");
        window.location.href="../../index.php?page=data-mahasiswa"</script>';
    }
}
?>