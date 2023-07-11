<div class="container-fluid">
   <h4>Data User</h4>
   <button class="btn btn-sm btn-primary mb-3" data-toggle="modal" data-target="#tambah_user">
   <i class="fas fa-plus fa-sm"> </i>tambahkan user</button>
   <table class="table table-bordered table-hover table-striped">
      <thead>
         <tr>
            <th>Nomor</th>
            <th>Nama User</th>
            <th>Username</th>
            <th>Role ID</th>
            <th>aksi</th>
         </tr>
      </thead>
      <tbody>
         <?php
            $nomor=1;
             foreach ($user as $usr): ?>
         <tr>
            <td><?php echo $nomor++ ?></td>
            <td><?php echo $usr->nama ?></td>
            <td><?php echo $usr->username ?></td>
            <td>
              <?php if($usr->role_id == 1){ ?>
    					 Admin
    				 <?php }else if($usr->role_id == 2){?>
    					 User
    				 <?php }else{ ?>
    					 Tidak ada Role
    				 <?php }?>
            </td>
            <td><?php echo anchor('admin/data_user/edit/' . $usr->id, '<div class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></div>') ?></td>
            <td><?php echo anchor('admin/data_user/hapus/' . $usr->id, '<div class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></div>') ?></td>
         </tr>
         <?php endforeach; ?>
      </tbody>
   </table>
</div>
<!-- Modal -->
<div class="modal fade" id="tambah_user" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Input user</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
         </div>
         <div class="modal-body">
            <form action="<?php echo base_url() . 'admin/data_user/tambah_aksi'; ?>" method="post" enctype="multipart/form-data">
               <div class="form-group">
                  <label>Nama user</label>
                  <input type="text" name="nama" class="form-control">
               </div>
               <div class="form-group">
                  <label>username</label>
                  <input type="text" name="username" class="form-control">
               </div>
               <div class="form-group">
                  <label>password</label>
                  <input type="password" name="password" class="form-control">
               </div>
               <div class="form-group">
                  <label>role</label>
                  <select name="role_id" class="form-control">
                     <option value="">Pilih Role</option>
                     <option value="1">Admin</option>
                     <option value="2">User</option>
                  </select>
               </div>
         </div>
         <div class="modal-footer">
         <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
         <button type="submit" class="btn btn-primary">Save</button>
         </div>
         </form>
      </div>
   </div>
</div>
