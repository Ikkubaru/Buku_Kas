<?php foreach ($user as $aa) {?>
<div class="col-lg-12">
         <div class="card">
           <div class="card-body">
           <div class="card-title">Edit User</div>
           <hr>

            <form method="post" action="<?= base_url('user/update') ?>">
           <div class="form-group">
            <label for="input-1">Username</label>
            <input type="text" class="form-control"  name="username" placeholder="Masukkan Username" readonly value="<?= $aa['username'] ?>">
           </div>
           <div class="form-group">
             <label for="input-3">Nama</label>
             <input type="text" class="form-control"  name="nama" placeholder="Masukkan Nama" required value="<?= $aa['nama'] ?>">
            </div>
           <div class="form-group">
            <label for="input-4">Level</label>
            <select name="level"  class="form-control">
              <option value="User" <?php if($aa['level']=='User'){echo "selected";} ?> >User</option>
              <option value="Admin" <?php if($aa['level']=='Admin'){echo "selected";} ?> >Admin</option>
            </select>
           </div><br>
           <div class="form-group">
            <input type="hidden" name="id_user" value="<?= $aa['id_user'] ?>">
            <button type="submit" class="btn btn-light px-5" name=""><i class="icon-lock"></i> Register</button>
          </div>
          </form>
         </div>
         </div>
      </div>
      <?php }?>