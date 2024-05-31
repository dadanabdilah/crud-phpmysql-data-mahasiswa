<?php
    if(isset($_GET['page'])){
        $page = $_GET['page'];
        switch ($page) {
        // Beranda
        case 'data-mahasiswa':
            include 'pages/mahasiswa/data-mahasiswa.php';
            break;

            case 'tambah-mahasiswa':
                include 'pages/mahasiswa/tambah-mahasiswa.php';
                break;

                case 'ubah-mahasiswa';
                    include 'pages/mahasiswa/ubah-mahasiswa.php';
                    break;

        }
    }else{
        include "pages/beranda.php";
    }
?>