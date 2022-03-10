<?php
   include "../../config/koneksi.php";
   $id_anggota      = $_POST['id_anggota'];
   $nama_anggota    = $_POST['nama_anggota'];
   $jenis_kelamin   = $_POST['jenis_kelamin'];
   $alamat          = $_POST['alamat'];
   $no_hp           = $_POST['no_hp'];

   $sql = "INSERT INTO tabel_anggota
   (
       id_anggota,
       nama_anggota,
       jenis_kelamin,
       alamat,
       no_hp
   )                 
   VALUES
   (
       '".$id_anggota."',
       '".$nama_anggota."',
       '".$jenis_kelamin."',
       '".$alamat."',
       '".$no_hp."'
    )";
       $db->query($sql);

       header('location: ../../beranda.php?page=anggota');
?>