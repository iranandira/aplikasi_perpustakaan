<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Data User
        <a href="beranda.php?page=user&aksi=add"class="btn 
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
                        <th>id user</th>
                        <th>nama pegawai</th>
                        <th>username</th>
                        <th>password</th>
                        <th>level</th>
                        <th>dibuat pada</th>
                        <th>aksi</th>   
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>id user</th>
                        <th>nama pegawai</th>
                        <th>username</th>
                        <th>password</th>
                        <th>level</th>
                        <th>dibuat pada</th>
                        <th>aksi</th>
                    </tr>
                </tfoot>
           <tbody>
                     <?php 
                      
                             $sql  = "select us.* ,pgw.nama_pegawai from tabel_user us left join tabel_pegawai pgw on us.id_pegawai = pgw.id_pegawai";
                             $show = $db->query($sql);
     
                             foreach($show as $us):
                     ?>
                     <tr>
                        <td><?php echo $us['id_user']?></td>
                        <td><?php echo $us['nama_pegawai']?></td>
                        <td><?php echo $us['username']?></td>
                        <td><?php echo $us['password']?></td>
                        <td><?php echo $us['level']?></td>
                        <td><?php echo $us['dibuat_pada']?></td>
                        <td>
                     <a href="beranda.php?page=user&aksi=edit&id=<?php echo $us['id_user']?>"
                    class="btn btn-primary btn-circle">
                    <i class="fas fa-edit"></i>
                    </a>
                      
                    <a href="model/user/prosesdeleteuser.php?id=<?php echo $us['id_user']?>"
                    class="btn btn-danger btn-circle">
                    <i class="fas fa-trash"></i>
                    </a>
                    </tr>
                    <?php endforeach; ?>
           </tbody>
            </table>
        </div>
    </div>
</div>

