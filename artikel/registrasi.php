  <!-- The Modal -->
  <div class="modal fade" id="nuRegister">
    <div class="modal-dialog modal-dialog-centered ">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Daftar</h4>
        </div>

        <!-- Modal body -->
        <div class="modal-body">
				<form class="cd-form" method="post" action="../akun/prosesRegistrasi.php">
					<p class="fieldset">
						<label class="image-replace cd-username"  for="signup-username">Username</label>
						<input class="full-width has-padding has-border" name="username" id="signup-username" type="text" placeholder="Username">

					</p>

					<p class="fieldset">
						<label class="image-replace cd-username"  for="signup-nama">Nama Lengkap</label>
						<input class="full-width has-padding has-border" name="nama" id="signup-nama" type="text" placeholder="Nama Lengkap">

					</p>

					<p class="fieldset">
						<label class="image-replace cd-email" for="signup-email">E-mail</label>
						<input class="full-width has-padding has-border" name="email" id="signup-email" type="email" placeholder="Email">

					</p>

					<p class="fieldset">
						<label class="image-replace cd-password" for="signup-password">Password</label>
						<input class="full-width has-padding has-border" name="password" id="signup-password" type="text" placeholder="Password">
						<a href="#0" class="hide-password">Hide</a>

					</p>

					<p class="fieldset">
						<label class="image-replace fa " for="signup-nohp">No Hp</label>
						<input class="full-width has-padding has-border " name="nohp" id="signup-nohp" type="text" placeholder="08xxxxxxxxx">

					</p>

					<p class="fieldset">
						<input class="full-width has-padding" type="submit" name="register" value="Daftar">
					</p>
				</form>
        </div>


        <!-- Modal footer -->
        <div class="modal-footer">
          <a href="#0">Sudah punya akun ? Login sekarang</a>
        </div>

      </div>
    </div>
  </div>
