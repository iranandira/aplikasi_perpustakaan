<?php
   include "../../config/koneksi.php";
   $id_pegawai   = $_POST['id_pegawai'];
   $username     = $_POST['username'];
   $password     = $_POST['password'];
   $level        = $_POST['level'];
   $dibuat_pada  = $_POST['dibuat_pada'];

   $sql = "INSERT INTO tabel_user
   (
       id_pegawai,
       username,
       password,
       level,
       dibuat_pada
   )                 
   VALUES
   (
       '".$id_pegawai."',
       '".$username."',
       '".$password."',
       '".$level."',
       '".$dibuat_pada."'
    )";
       $db->query($sql);

       header('location: ../../beranda.php?page=user');
?>