
        <div class="col-lg-12">
         <div class="card">
           <div class="card-body">
           <div class="card-title">Tambah User</div>
           <hr>

            <form method="post" action="<?= base_url('user/simpan') ?>">
           <div class="form-group">
            <label for="input-1">Username</label>
            <input type="text" class="form-control"  name="username" placeholder="Masukkan Username" required>
           </div>
           <div class="form-group">
             <label for="input-3">Nama</label>
             <input type="text" class="form-control"  name="nama" placeholder="Masukkan Nama" required>
            </div>
            <div class="form-group">
             <label for="input-2">Password</label>
             <input type="password" class="form-control"  name="password" placeholder="Masukkan Password" required>
            </div>
           <div class="form-group">
            <label for="input-4">Level</label>
            <select name="level"  class="form-control">
              <option value="User" name="" >User</option>
              <option value="Admin" name="" >Admin</option>
            </select>
           </div><br>
           <div class="form-group">
            <button type="submit" class="btn btn-light px-5" name=""><i class="icon-lock"></i> Register</button>
          </div>
          </form>
         </div>
         </div>
      </div>