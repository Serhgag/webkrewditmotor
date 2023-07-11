<div class="container-fluid">
   <h3><i class="fa fa-edit"></i>Edit User</h3>
   <?php foreach($user as $user) : ?>
   <form method="post" action="<?php echo base_url(). 'admin/data_user/update' ?>">
      <div class="form-group">
         <label>nama user</label>
         <input type="hidden" name="id" class="form-control" value="<?php echo $user->id ?>">
         <input type="text" name="nama" class="form-control" value="<?php echo $user->nama ?>">
      </div>
      <div class="form-group">
         <label>username</label>
         <input type="text" name="username" class="form-control" value="<?php echo $user->username ?>">
      </div>
      <div class="form-group">
         <label>password</label>
         <input type="text" name="password" class="form-control" value="<?php echo $user->password ?>">
      </div>
      <div class="form-group">
         <label>role id</label>
         <select name="role_id" class="form-control">
            <option value="">Pilih Role</option>
            <option value="1"<?php if($user->role_id == 1){ echo 'selected'; ?> <?php } ?> >Admin</option>
            <option value="2"<?php if($user->role_id == 2){ echo 'selected'; ?><?php } ?> >User</option>
         </select>
      </div>
      <button type="submit" class="btn btn-primary btn-sm mt-3">simpan</button>
   </form>
   <?php endforeach; ?>
</div>
