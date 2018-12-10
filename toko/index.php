<?php include("../koneksi.php");
  session_start();
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>HelloFarm</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="../img/favicon.png" rel="icon">
  <link href="../img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Poppins:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="../lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="../lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="../lib/animate/animate.min.css" rel="stylesheet">

  <!-- Main Stylesheet File Header -->
  <link href="../css/style.css" rel="stylesheet">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700|Raleway:300,400,400i,500,500i,700,800,900" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="../lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

  <!-- Modal -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>
  <link href='https://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://s3-us-west-2.amazonaws.com/s.cdpn.io/148866/reset.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
  <link rel="stylesheet" href="../login/css/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

</head>

<body>

  <!--==========================
  Header
  ============================-->
  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
          <a href="../"><img src="../img/logo.png" alt="" title="" /></img></a>
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li><a href="../#hero">Beranda</a></li>
          <li><a href="../#about">Tentang</a></li>
          <li><a href="../#portfolio">Fitur</a></li>
          <li class="menu-active"><a href="">Toko</a></li>
          <li><a href="../artikel">Artikel</a></li>
          <li><a href="#contact">Hubungi</a></li>
          <?php if (isset($_SESSION['status'])) { ?>
            <li class="menu-has-children"><a href="#">Selamat Datang <?php echo $_SESSION['username']; ?></a>
              <ul>

                <li><a href="../akun/profil">Data Akun</a></li>
                <li><a href="../prosesLogout.php">Keluar</a></li>
              </ul>
            </li>

          <?php }else {?>
            <li class="menu-has-children"><a href="#">Akun</a>
              <ul>
                  <li><a href="" data-toggle="modal" data-target="#nuLogin">Login</a></li>
                  <li><a href="" data-toggle="modal" data-target="#nuRegister">Register</a></li>
              </ul>
            </li>
        <?php } ?>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

  <?php
        include ("login.php");
        include ("registrasi.php");
    ?>

  <!--==========================
    Hero Section
  ============================-->
  <section id="hero">
    <div class="hero-container">
      <h1>Selamat Datang di Toko Kami</h1>
    </div>
  </section><!-- #hero -->

  <main id="main" style="margin-top: 30px;">

    <!-- Page Content -->
    <div class="container">

      <div class="row">

        <div class="col-lg-3">

          <h3 class="my-4">Kategori</h3>
          <div class="list-group">
            <a href="#" class="list-group-item">Sapi</a>
            <a href="#" class="list-group-item">Unggas</a>
          </div>

        </div>
        <!-- /.col-lg-3 -->

        <div class="col-lg-9">

          <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
              <div class="carousel-item active">
                <img class="d-block img-fluid" src="http://placehold.it/900x350" alt="First slide">
              </div>
              <div class="carousel-item">
                <img class="d-block img-fluid" src="http://placehold.it/900x350" alt="Second slide">
              </div>
              <div class="carousel-item">
                <img class="d-block img-fluid" src="http://placehold.it/900x350" alt="Third slide">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>


        <div class="row">

        <?php
					$qry = "select *from toko";
					$eksekusi = mysqli_query($koneksi, $qry);
					while ($tampil = mysqli_fetch_array($eksekusi)) {


            echo "<div class='col-lg-4 col-md-6 mb-4'>";
              echo "<div class='card h-100'>";
                echo "<a href='#'><img class='card-img-top' src='../admin/pages/tables/gambarproduk/$tampil[nama_file]' width='700' height='250' alt=''></a>";
                echo "<div class='card-body'>";
                    echo "<h5 class='card-title'>
                            <a href='#'>".$tampil['nama_produk']."</a>
                          </h5>";
                    echo "<div><h5 class='card-title'>Rp ".$tampil['harga']."</h5></div>";
                  echo "<p class='card-text'>".$tampil['deskripsi']."</p>";
                echo "</div>";
               echo "<div><h5 class='card-title'>&nbsp; &nbsp; Stock: tersedia</h5></div>";
              echo "</div>";
            echo "</div>";


          }
				 ?>

          <!-- /.row -->
      </div>

        <!-- /.col-lg-9 -->

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

   <!--==========================
      Contact Section
    ============================-->
    <section id="contact">
      <div class="container wow fadeInUp">
        <div class="section-header">
          <h3 class="section-title">Hubungi</h3>
          <p class="section-description"></p>
        </div>
      </div>

      <div class="container wow fadeInUp mt-5">
        <div class="row justify-content-center">

          <div class="col-lg-3 col-md-4">

            <div class="info">
              <div>
                <i class="fa fa-map-marker"></i>
                <p>Peserta Expo, Gedung TI, Politeknik Negeri Jember<br>‎Jl. Mastrip PO BOX 164 68101 Jember</p>
              </div>

              <div>
                <i class="fa fa-envelope"></i>
                <p>ferdian.naddaa@gmail.com</p>
              </div>

              <div>
                <i class="fa fa-phone"></i>
                <p>082 230 270 872</p>
              </div>
            </div>

            <div class="social-links">
              <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
              <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
              <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
              <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
              <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
            </div>

          </div>

          <div class="col-lg-5 col-md-8">
            <div class="form">
              <div id="sendmessage">Pesan kamu telah terkirim. Terima Kasih!</div>
              <div id="errormessage"></div>
              <form action="" method="post" role="form" class="contactForm">
                <div class="form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                  <div class="validation"></div>
                </div>
                <div class="text-center"><button type="submit">Kirim Pesan</button></div>
              </form>
            </div>
          </div>

        </div>

      </div>
    </section><!-- #contact -->

  </main>

  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">

      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>Hello Farm</strong>. All Rights Reserved
      </div>
      <div class="credits">
        Designed by <a href="https://bootstrapmade.com/">Ropan</a>
      </div>
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="../lib/jquery/jquery.min.js"></script>
  <script src="../lib/jquery/jquery-migrate.min.js"></script>
  <script src="../lib/bootstr../bootstrap.bundle.min.js"></script>
  <script src="../lib/easing/easing.min.js"></script>
  <script src="../lib/wow/wow.min.js"></script>
  <script src="../lib/waypoints/waypoints.min.js"></script>
  <script src="../lib/counterup/counterup.min.js"></script>
  <script src="../lib/superfish/hoverIntent.js"></script>
  <script src="../lib/superfish/superfish.min.js"></script>

  <!-- Contact Form JavaScript File -->
  <script src="../contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="../js/main.js"></script>

  <!-- Modal Login -->
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <script src="../login/js/index.js"></script>

</body>
</html>
