<?php 
    include "../../config/koneksi.php";
    $id = $_GET['id'];
    $sql = "DELETE from tabel_buku where id_buku = $id";
    $db->query($sql);
    header('location: ../../beranda.php?page=buku');
?>