<?php 
    include "../../config/koneksi.php";

   
    $isbn           = $_POST['isbn'];
    $judul_buku     = $_POST['judul_buku'];
    $penulis        = $_POST['penulis'];
    $penerbit       = $_POST['penerbit'];
    $tahun_terbit   = $_POST['tahun_terbit'];

    $sql = "INSERT INTO tabel_buku 
    (

        isbn,
        judul_buku,
        penulis,
        penerbit,
        tahun_terbit
    ) 
    VALUES 
    (
        '".$isbn."',
        '".$judul_buku."',
        '".$penulis."',
        '".$penerbit."',
        '".$tahun_terbit."'
    )";
    
    $db->query($sql);


    header('Location: ../../beranda.php?page=buku');

?>

