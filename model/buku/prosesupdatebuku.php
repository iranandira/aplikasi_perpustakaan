<?php
   include "../../config/koneksi.php";

   $id_buku      = $_POST['id_buku'];
   $isbn         = $_POST['isbn'];
   $judul_buku   = $_POST['judul_buku'];
   $penulis      = $_POST['penulis'];
   $penerbit     = $_POST['penerbit'];
   $tahun_terbit = $_POST['tahun_terbit'];
  
   $sql = "update tabel_buku set
   
   id_buku       = '".$id_buku."',
   isbn          = '".$isbn."',
   judul_buku    = '".$judul_buku."',
   penulis       = '".$penulis."',
   penerbit      = '".$penerbit."',
   tahun_terbit  = '".$tahun_terbit."'
  
       where id_buku = '".$id_buku."'
       ";

     $db->query($sql);

     header('location: ../../beranda.php?page=buku');
?>