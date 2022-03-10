<?php 
    include "../../config/koneksi.php";
    $id = $_GET['id'];
    $sql = "DELETE from tabel_transaksi where id_transaksi= $id";
    $db->query($sql);
    header('location: ../../beranda.php?page=transaksi');
?>