<?php
   include "../../config/koneksi.php";

   $id_user         = $_POST['id_user'];
   $id_pegawai      = $_POST['id_pegawai'];
   $username        = $_POST['username'];
   $password        = $_POST['password'];
   $level           = $_POST['level'];
   $dibuat_pada     = $_POST['dibuat_pada'];

   $sql = "update tabel_user set
   
   id_user       = '".$id_user."',
   id_pegawai    = '".$id_pegawai."',
   username      = '".$username."',
   password      = '".$password."',
   level         = '".$level."',
   dibuat_pada   = '".$dibuat_pada."'
       
       where id_user = '".$id_user."'
       ";

     $db->query($sql);

     header('location: ../../beranda.php?page=user');
?>