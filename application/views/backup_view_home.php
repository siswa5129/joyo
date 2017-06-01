<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>JOYOPURO</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="css/freelancer.min.css" rel="stylesheet">

    <!-- Custom Fonts -->

    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

    <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 100%;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
    </style>
</head>

<body id="page-top" class="index">

<div id="skipnav"><a href="#maincontent">Skip to main content</a></div>


    <!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top navbar-custom">

        <div class="container">

            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>

                <a class="navbar-brand" href="#page-top">JOYOPURO</a>

              </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li class="page-scroll">
                        <a href="#galeri">GALERI</a>
                    </li>
                    <li class="page-scroll">
                        <a href="<?php echo base_url()."index.php/Home/readBerita"; ?>">ARTIKEL</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#portfolio">PRODUK</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#about">TENTANG</a>
                    </li>
                    <li class="page-scroll">
                      <?php if($this->session->userdata('nama') == null) {?>

                        <a href="<?php echo base_url()."index.php/Login/"; ?>">LOGIN</a>
                      <?php }else{ ?>
                        <a href="<?php echo base_url()."index.php/Login/"; ?>">Hello <?php echo $this->session->userdata('nama'); ?></a>
                     <?php } ?>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>



    <!-- Header -->
    <header>
        <div class="container" id="maincontent" tabindex="-1">
            <div class="row">
                <div class="col-lg-12">
                    <img class="img-responsive" src="img/portfolio/ayam.png" alt="" height="200" width="200">
                    <div class="intro-text">
                        <h1 class="name">JOYOPURO</h1>
                        <hr class="star-light">
                        <span class="skills">PETERNAKAN DAN PERTANIAN</span>
                    </div>
                </div>
            </div>
        </div>
    </header>


    <!-- About Section -->
    <section class="success" id="about" >
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>ALAMAT </h2>
                    <hr class="star-light">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-lg-offset-2">
                    <p>ALamat :<br>
                      Jalan Joyoboyo No. 75 <br>
                      Kalipuro, Banyuwangi<br>
                      <br><br>
                      Kontak :<br>
                      (0333) 411329<br>
                      085746728418<br>
                      <br><br>
                      Buka :<br>
                      Setiap Hari<br>
                      07.00 - 16.00 WIB<br>
                    </p>
                </div>
                <div class="col-lg-4">
                  <head>
                    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCYNPd626J8woHt2z4fGoJq1rRUtuQuJ0o"></script>

                    <script>

                        function initialize() {
                            var properti_peta = {
                                center: new google.maps.LatLng(-8.176607, 114.357915),
                                zoom: 18,
                                mapTypeId: google.maps.MapTypeId.ROADMAP

                            };

                            var peta = new google.maps.Map(document.getElementById("tempat_peta"), properti_peta);
                            var marker = new google.maps.Marker({
                             	position: new google.maps.LatLng(-8.176607, 114.357915), // longitude latitude
                            	map: map,
                            	title: 'JOYOPURO'
                            });
                        }
                        // 5. menampilkan peta
                        google.maps.event.addDomListener(window, 'load', initialize);

                    </script>
                </head>
                <body>
                    <!--3. membuat div untuk menampilkan peta-->
                    <div id="tempat_peta" style="width:500px;height:300px;"></div>
                </body>


                </div>
            </div>
        </div>
    </section>

    <!-- produk Grid Section -->
    <section id="portfolio" class="portfolio content-section alt-bg-light wow " data-wow-offset="10">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>PRODUK</h2>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="row">
                <?php foreach($databarang as $barang){ ?>
                <div class="col-sm-4 portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="<?php echo $barang['gambar']; ?>" class="img-responsive" alt="Cabin">
                    </a>
                </div>
                <?php } ?>
            </div>
        </div>
    </section>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <!-- Optional theme -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
    </head>

    <body>
      <div class="container" id="galeri">
        <div class="row">
          <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
          	<!-- Carousel Indikator -->
            <ol class="carousel-indicators">
            	<li data-target="carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="carousel-example-generic" data-slide-to="1"></li>
                  <li data-target="carousel-example-generic" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for Slide -->
            <div class="carousel-inner">
            	<div class="item active">
                	<img src="img/portfolio/4.png" alt="Slide 1" >
                    <div class="carousel-caption">
                    	<h3>AYAM PETELUR</h3>
                        <p></p>
                    </div>
                </div>
                <div class="item">
                	<img src="img/portfolio/5.png" alt="Slide 1" >
                    <div class="carousel-caption">
                    	<h3>TELUR AYAM</h3>
                        <p></p>
                    </div>
                </div>
                <div class="item">
                	<img src="img/portfolio/6.png" alt="Slide 1" >
                    <div class="carousel-caption">
                    	<h3>CABAI PEDAS</h3>
                        <p></p>
                    </div>
                </div>
            </div>

            <!-- Control -->
            <a href="#carousel-example-generic" class="carousel-control left" data-slide="prev" role="button">
            	<span class="glyphicon glyphicon-chevron-left"></span>
            </a>
            <a href="#carousel-example-generic" class="carousel-control right" data-slide="next" role="button">
            	<span class="glyphicon glyphicon-chevron-right"></span>
            </a>
          </div>
        </div>
      </div>
    </body>
    <html>
    </html>
    <!-- Footer -->
    <footer class="text-center">
        <div class="footer-above">
            <div class="container">
                <div class="row">
                    <div class="footer-col col-md-4">
                        <h3></h3>
                    </div>
                    <div class="footer-col col-md-4">
                        <h3>PETERNAKAN DAN PERTANIAN JOYOPURO</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-below">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        Copyright &copy; JOYOPURO 2017
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-top page-scroll hidden-sm hidden-xs hidden-lg hidden-md">
        <a class="btn btn-primary" href="#page-top">
            <i class="fa fa-chevron-up"></i>
        </a>
    </div>

    <!-- Portfolio Modals -->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-content">
          <div class="container">
              <div class="row">
                  <div class="col-lg-8 col-lg-offset-2">
                      <div class="modal-body">
                        <div class="close-modal" data-dismiss="modal">
                            <div class="lr">
                                <div class="rl">
                                </div>
                            </div>
                        </div>
                            <h2>TELUR AYAM</h2>
                            <img src="img/portfolio/telur2.png" class="img-responsive img-centered" alt="" width='300'>
                            <p>
                              <?php
                              $query = "SELECT * FROM barang WHERE kode_barang=1"; // Query untuk menampilkan semua data siswa
                              $sql = mysqli_query($connect, $query);
                              $data = mysqli_fetch_array($sql);
                              echo "<td> Rp.".$data['harga']." /</td>";?>
                              <?php echo "<td>".$data['satuan']."</td>";?>
                              <body>
                              <h1 align="center"><a href=""></a></h1>
                              JUMLAH (KG): <input type="text" name="input1" id="input1" onkeyup="calc()"value=""> X
                              <input type="text" name="input2" id="input2" onkeyup="calc()" value="<?php echo $data['harga'] ?>"> =
                              Rp.
                              <input type="text" name="output" id="output" value="">
                              <script>
                              function calc(){
                               var textValue1 = document.getElementById('input1').value;
                               var textValue2 = document.getElementById('input2').value;
                               var result = textValue1 * textValue2;
                               document.getElementById('output').value = textValue1 * textValue2;
                             }
                              </script>
                              </body>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-content">
          <div class="container">
              <div class="row">
                  <div class="col-lg-8 col-lg-offset-2">
                      <div class="modal-body">
                        <div class="close-modal" data-dismiss="modal">
                            <div class="lr">
                                <div class="rl">
                                </div>
                            </div>
                        </div>
                            <h2>DAGING AYAM</h2>
                            <img src="img/portfolio/daginayam2.png" class="img-responsive img-centered" alt="" width='300'>
                            <p>
                                <?php
                                $query = "SELECT * FROM barang WHERE kode_barang=2"; // Query untuk menampilkan semua data siswa
                                $sql = mysqli_query($connect, $query);
                                $data = mysqli_fetch_array($sql);
                                echo "<td> Rp.".$data['harga']." /</td>";?>
                                <?php echo "<td>".$data['satuan']."</td>";?>
                                <body>
                                <h1 align="center"><a href=""></a></h1>
                                <h3>SIMULASI</h3>
                                JUMLAH (KG): <input type="text" name="input11" id="input11" onkeyup="calc1()"value=""> X
                                <input type="text" name="input21" id="input21" onkeyup="calc1()" value="<?php echo $data['harga'] ?>">
                                Rp.
                                <input type="text" name="output1" id="output1" value="">
                                <script>
                                function calc1(){
                                 var textValue11 = document.getElementById('input11').value;
                                 var textValue21 = document.getElementById('input21').value;
                                 var result = textValue11 * textValue21;
                                 document.getElementById('output1').value = textValue11 * textValue21;
                               }
                                </script>
                                </body>
                            </p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-content">
          <div class="container">
              <div class="row">
                  <div class="col-lg-8 col-lg-offset-2">
                      <div class="modal-body">
                        <div class="close-modal" data-dismiss="modal">
                            <div class="lr">
                                <div class="rl">
                                </div>
                            </div>
                        </div>
                            <h2>CABAI</h2>
                            <img src="img/portfolio/cabai2.png" class="img-responsive img-centered" alt="" width='300'>
                            <p>
                              <?php
                              $query = "SELECT * FROM barang WHERE kode_barang=3"; // Query untuk menampilkan semua data siswa
                              $sql = mysqli_query($connect, $query);
                              $data = mysqli_fetch_array($sql);
                              echo "<td> Rp.".$data['harga']." /</td>";?>
                              <?php echo "<td>".$data['satuan']."</td>";?>
                              <body>
                              <h1 align="center"><a href=""></a></h1>
                              <h3>SIMULASI</h3>
                              JUMLAH (KG) : <input type="text" name="input12" id="input12" onkeyup="calc2()"value="" > X
                              <input type="text" name="input22" id="input22" onkeyup="calc2()" value="<?php echo $data['harga'] ?>">
                              Rp.
                              <input type="text" name="output2" id="output2" value="">
                              <script>
                              function calc2(){
                               var textValue12 = document.getElementById('input12').value;
                               var textValue22 = document.getElementById('input22').value;
                               var result = textValue12 * textValue22;
                               document.getElementById('output2').value = textValue12 * textValue22;
                             }
                              </script>
                              </body>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-content">
          <div class="container">
              <div class="row">
                  <div class="col-lg-8 col-lg-offset-2">
                      <div class="modal-body">
                        <div class="close-modal" data-dismiss="modal">
                            <div class="lr">
                                <div class="rl">
                                </div>
                            </div>
                        </div>
                            <h2>JAGUNG</h2>
                            <img src="img/portfolio/jagung2.png" class="img-responsive img-centered" alt="" width='300'>
                            <p>
                              <body>
                              <?php
                              $query = "SELECT * FROM barang WHERE kode_barang=4"; // Query untuk menampilkan semua data siswa
                              $sql = mysqli_query($connect, $query);
                              $data = mysqli_fetch_array($sql);
                              echo "<td> Rp.".$data['harga']." /</td>";?>
                              <?php echo "<td>".$data['satuan']."</td>";?>
                              <body>
                              <h1 align="center"><a href=""></a></h1>
                              <h3>SIMULASI</h3>
                              JUMLAH (KG): <input type="text" name="input13" id="input13" onkeyup="calc3()"value=""> X
                              <input type="text" name="input23" id="input23" onkeyup="calc3()" value="<?php echo $data['harga'] ?>">
                              Rp.
                              <input type="text" name="output3" id="output3" value="">
                              <script>
                              function calc3(){
                               var textValue13 = document.getElementById('input13').value;
                               var textValue23 = document.getElementById('input23').value;
                               var result = textValue13 * textValue23;
                               document.getElementById('output3').value = textValue13 * textValue23;
                             }
                              </script>
                              </body>
                            </p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-content">
          <div class="container">
              <div class="row">
                  <div class="col-lg-8 col-lg-offset-2">
                      <div class="modal-body">
                        <div class="close-modal" data-dismiss="modal">
                            <div class="lr">
                                <div class="rl">
                                </div>
                            </div>
                        </div>
                            <h2>KELAPA</h2>
                            <img src="img/portfolio/kelapa2.png" class="img-responsive img-centered" alt="" width='300'>
                            <p>
                              <body>
                              <?php
                              $query = "SELECT * FROM barang WHERE kode_barang=5"; // Query untuk menampilkan semua data siswa
                              $sql = mysqli_query($connect, $query);
                              $data = mysqli_fetch_array($sql);
                              echo "<td> Rp.".$data['harga']." /</td>";?>
                              <?php echo "<td>".$data['satuan']."</td>";?>
                              <body>
                              <h1 align="center"><a href=""></a></h1>
                              <h3>SIMULASI</h3>
                              JUMLAH (KG): <input type="text" id="txt14"  onkeyup="sum();" /> X
                              <input type="text" id="txt24"  value="<?php echo $data['harga'] ?>" onkeyup="sum();" />= Rp.
                              <input type="text" id="txt34" />
                              <script>
                              function sum() {
                                    var txtFirstNumberValue = document.getElementById('txt14').value;
                                    var txtSecondNumberValue = document.getElementById('txt24').value;
                                    var result = parseInt(txtFirstNumberValue) * parseInt(txtSecondNumberValue);
                                    if (!isNaN(result)) {
                                       document.getElementById('txt34').value = result;
                                    }
                              }
                              </script>
                              </body>
                            </p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Theme JavaScript -->
    <script src="js/freelancer.min.js"></script>



</body>

</html>
