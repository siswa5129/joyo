<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>JOYOPURO</title>

    <link href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet" >
    <!-- Font Awesome Icons -->
    <link href="<?php echo base_url('css/blog-home.css'); ?>" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
<?php foreach($databarang as $barang){ ?>
    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo base_url();?>">JOYOPURO</a>
                <a><form class="navbar-form navbar-right" role="search">
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="Cari">
                  </div>
                  <button type="submit" class="btn btn-default">Cari</button>
                </form></a>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-8">

                <h1 class="page-header">
                </h1>

                <!-- First Blog Post -->
                <h2>
                    <a href="<?php echo base_url()."index.php/Home/readPost/".$barang['IDberita']; ?>"><td><?php echo $barang['Judul']; ?></td></a>
                </h2>
                <p><span class="glyphicon glyphicon-time"></span><td><?php echo $barang['Tanggal']; ?></td></p>
                <hr>
                <img class="img-responsive" src="<?php echo $barang['gambar']; ?>";>
                <hr>
                <p><td>
                  <?php
                  $headline = substr($barang['IsiBerita'],0,200);
                    echo $headline;

                  ?></td>...</p>
                <a class="btn btn-primary" href="<?php echo base_url()."index.php/Home/readPost/".$barang['IDberita']; ?>">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>
                <hr>
            </div>
            <?php } ?>


        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; JOYOPURO</p>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
