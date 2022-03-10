<?php 
    include "../../config/koneksi.php";
    $id = $_GET['id'];
    $sql = "DELETE from tabel_user where id_user= $id";
    $db->query($sql);
    header('location: ../../beranda.php?page=user');
?>