<?php
    include "../../conf/conn.php";
    $id = $_GET['id'];
    $query = ("DELETE FROM mahasiswa WHERE id_mahasiswa ='$id'");
    if(!mysqli_query($conn, $query)){
        die(mysqli_connect_errno());
    }else{
        echo '<script>alert("Data Berhasil Dihapus !!!");
        window.location.href="../../index.php?page=data-mahasiswa"</script>';
    }
?>