  <!-- The Modal -->
  <div class="modal fade" id="nuLogin">
    <div class="modal-dialog modal-dialog-centered ">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Login</h4>
        </div>

        <!-- Modal body -->
        <div class="modal-body">
          	<form class="cd-form" method="post" action="../prosesLogin.php">
					<p class="fieldset">
						<label class="image-replace cd-email" for="signin-email">Email</label>
						<input class="full-width has-padding has-border" name="email" id="signin-email" type="email" placeholder="E-mail">
						<span class="cd-error-message">Error message here!</span>
					</p>

					<p class="fieldset">
						<label class="image-replace cd-password" for="signin-password">Password</label>
						<input class="full-width has-padding has-border" id="signin-password" name="password" type="text"  placeholder="Password">
						<a href="#0" class="hide-password">Hide</a>
            <?php
              if (isset($_GET['pesan'])) {
                if ($_GET['pesan'] == "gagal") {
                  echo "<div class='alert alert-danger'>
                  <strong>Password</strong> atau <strong>Username</strong> anda <strong>Salah</strong></a>
                </div>";
                }elseif ($_GET['pesan'] == "logout") {
                  echo "<div class='alert alert-info'>
                  Anda berhasil <strong>Logout</strong>
                </div>";
                }elseif ($_GET['pesan'] == "belum_login") {
                  echo "<div class='alert alert-warning'>
                  <strong>Perhatian!</strong> Anda harus <strong>login dulu</strong>
                </div>";
                }
              }
             ?>
					</p>

					<p class="fieldset">
						<input type="checkbox" id="remember-me" checked>
						<label for="remember-me">Ingat akun</label>
					</p>

					<p class="fieldset">
						<input class="full-width" type="submit" value="Login" name="masuk">
					</p>


					<p class="fieldset">
						<a href="#" data-toggle="modal" data-target="#nuLupa">Lupa password?</a>
					</p>
			</form>
        </div>

        <!-- Modal footer -->
        <div class="modal-footer">
          <a href="#0">Belum punya akun ? Daftar sekarang</a>
        </div>

      </div>
    </div>
  </div>
