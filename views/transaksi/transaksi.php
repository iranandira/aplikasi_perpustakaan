<div class="container-fluid">

<!-- Page Heading -->
<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Data Transaksi
        <a href="beranda.php?page=transaksi&aksi=add"class="btn 
        btn-primary">
             <i class="fas fa-edit"></i>
             tambah 
        </a>
        </h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>id transaksi</th>
                        <th>tanggal transaksi</th>
                        <th>nama anggota</th>
                        <th>nama pegawai</th>
                        <th>judul buku</th>
                        <th>quantity</th>
                        <th>jenis transaksi</th>
                        <th>aksi</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>id transaksi</th>
                        <th>tanggal transaksi</th>
                        <th>nama anggota</th>
                        <th>nama pegawai</th>
                        <th>nama buku</th>
                        <th>quantity</th>
                        <th>jenis transaksi</th>
                        <th>aksi</th>
                    </tr>
                </tfoot>
           <tbody>
                     <?php 
                            $sql  = "select trs.id_transaksi, trs.tanggal_transaksi,agt.nama_anggota, pgw.nama_pegawai, bku.judul_buku , trs.quantity, trs.jenis_transaksi
                            from tabel_transaksi trs 
                            left join tabel_anggota agt on agt.id_anggota = trs.id_anggota
                            left join tabel_pegawai pgw on pgw.id_pegawai = trs.id_pegawai
                            left join tabel_buku bku on bku.id_buku = trs.id_buku";
                            
                            $show = $db->query($sql);

                            foreach($show as $trs):
                     ?>
                     <tr>
                        <td><?php echo $trs['id_transaksi']?></td>
                        <td><?php echo $trs['tanggal_transaksi']?></td>
                        <td><?php echo $trs['nama_anggota']?></td>
                        <td><?php echo $trs['nama_pegawai']?></td>
                        <td><?php echo $trs['judul_buku']?></td>
                        <td><?php echo $trs['quantity']?></td>
                        <td><?php echo $trs['jenis_transaksi']?></td>
                        <td>
                        <a href="beranda.php?page=transaksi&aksi=edit&id=<?php echo $trs['id_transaksi']?>"
                    class="btn btn-primary btn-circle">
                    <i class="fas fa-edit"></i>
                    </a>
                      
                    <a href="model/transaksi/prosesdeletetransaksi.php?id=<?php echo $trs['id_transaksi']?>"
                    class="btn btn-danger btn-circle">
                    <i class="fas fa-trash"></i>
                    </a>
                    </tr>
                    <?php  endforeach; ?>
           </tbody>
            </table>
        </div>
    </div>
</div>

</div>