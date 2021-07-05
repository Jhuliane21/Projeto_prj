<!DOCTYPE html>
<?php
include_once 'conexao.php';
session_start();

?>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Obaju : e-commerce template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
    <!-- Google fonts - Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700">
    <!-- owl carousel-->
    <link rel="stylesheet" href="vendor/owl.carousel/assets/owl.carousel.css">
    <link rel="stylesheet" href="vendor/owl.carousel/assets/owl.theme.default.css">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="favicon.png">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body>
  <?php
                $codigo = $_GET["codigo"]; 

                $query = "SELECT nome, preco,descricao, codigo, foto FROM produto WHERE codigo = '$codigo'";
                
                $lista = mysqli_query($conn2, $query);
                
               
                ?>
       <header class="header mb-5">
        
        
        </div>
        <nav class="navbar navbar-expand-lg">
          <div class="container"><a href="index.html" class="navbar-brand home"><img src="img/images (4).jpg" alt="Obaju logo" class="d-none d-md-inline-block"><span class="sr-only">Obaju - go to homepage</span></a>
            <div class="navbar-buttons">
              <button type="button" data-toggle="collapse" data-target="#navigation" class="btn btn-outline-secondary navbar-toggler"><span class="sr-only">Toggle navigation</span><i class="fa fa-align-justify"></i></button>
              <button type="button" data-toggle="collapse" data-target="#search" class="btn btn-outline-secondary navbar-toggler"><span class="sr-only">Toggle search</span><i class="fa fa-search"></i></button><a href="basket.html" class="btn btn-outline-secondary navbar-toggler"><i class="fa fa-shopping-cart"></i></a>
            </div>
            <div id="navigation" class="collapse navbar-collapse">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item"><a href="index.html" class="nav-link active">Home</a></li>
                <li class="nav-item dropdown menu-large"><a href="#" data-toggle="dropdown" data-hover="dropdown" data-delay="200" class="dropdown-toggle nav-link">Pele<b class="caret"></b></a>
                  <ul class="dropdown-menu megamenu">
                    <li>
                      <div class="row">
                        <div class="col-md-6 col-lg-3">
                          <ul class="list-unstyled mb-3">
                            <li class="nav-item"><a  onclick="javascript: location.href='category.php?categoria=Base'"  class="nav-link">Base</a></li>
                            <li class="nav-item"><a  onclick="javascript: location.href='category.php?categoria=Corretivo'" class="nav-link">Corretivo</a></li>
                            <li class="nav-item"><a  onclick="javascript: location.href='category.php?categoria=Po'"class="nav-link">Pó </a></li>
                            <li class="nav-item"><a  onclick="javascript: location.href='category.php?categoria=Blush'" class="nav-link">Blush</a></li>
                            <li class="nav-item"><a   onclick="javascript: location.href='category.php?categoria=Contorno'" class="nav-link">Contorno</a></li>
                          </ul>
                        </div>
                      </div>
                    </li>
                  </ul>
                </li>
                <li class="nav-item dropdown menu-large"><a href="#" data-toggle="dropdown" data-hover="dropdown" data-delay="200" class="dropdown-toggle nav-link">Boca<b class="caret"></b></a>
                  <ul class="dropdown-menu megamenu">
                    <li>
                      <div class="row">
                        <div class="col-md-6 col-lg-3">
                          <ul class="list-unstyled mb-3">
                            <li class="nav-item"><a  onclick="javascript: location.href='category.php?categoria=Batom'"class="nav-link">Batom</a></li>
                            <li class="nav-item"><a onclick="javascript: location.href='category.php?categoria=Gloss'" class="nav-link">Gloss</a></li>
                            <li class="nav-item"><a  onclick="javascript: location.href='category.php?categoria=Hidratantes'"class="nav-link">Hidratantes</a></li>
                          </ul>
                        </div>
                      </div>
                    </li>
                  </ul>
                </li>
                <li class="nav-item dropdown menu-large"><a href="#" data-toggle="dropdown" data-hover="dropdown" data-delay="200" class="dropdown-toggle nav-link">Olhos<b class="caret"></b></a>
                  <ul class="dropdown-menu megamenu">
                    <li>
                      <div class="row">
                        <div class="col-md-6 col-lg-3">
                          <ul class="list-unstyled mb-3">
                            <li class="nav-item"><a onclick="javascript: location.href='category.php?categoria=Sombra'" class="nav-link">Sombra</a></li>
                            <li class="nav-item"><a   onclick="javascript: location.href='category.php?categoria=Fixador'" class="nav-link">Fixador</a></li>
                            <li class="nav-item"><a  onclick="javascript: location.href='category.php?categoria=Delineador'"class="nav-link">Delineador</a></li>
                            <li class="nav-item"><a   onclick="javascript: location.href='category.php?categoria=Lapis'" class="nav-link">Lapis</a></li>
                            <li class="nav-item"><a   onclick="javascript: location.href='category.php?categoria=Rimel'" class="nav-link">Rimel</a></li>
                          </ul>
                        </div>
                      </div>
                    </li>
                  </ul>
                </li>
              </ul>
              <div class="navbar-buttons d-flex justify-content-end">
                <!-- /.nav-collapse-->
                <div id="basket-overview" class="navbar-collapse collapse d-none d-lg-block"><a class="btn btn-primary navbar-btn" onclick="javascript: location.href='contact.php'"><span>Contato</span></a></div>
                <div id="basket-overview" class="navbar-collapse collapse d-none d-lg-block"><a class="btn btn-primary navbar-btn" onclick="javascript: location.href='Cadastro.php'"><span>Cadastrar produtos</span></a></div>
                <div id="search-not-mobile" class="navbar-collapse collapse"></div><a data-toggle="collapse" href="#search" class="btn navbar-btn btn-primary d-none d-lg-inline-block"><span class="sr-only">Toggle search</span><i class="fa fa-search"></i></a>
                <div id="basket-overview" class="navbar-collapse collapse d-none d-lg-block"><a  class="btn btn-primary navbar-btn" onclick="javascript: location.href='basket.php'"><i class="fa fa-shopping-cart"></i><span>Carrinho</span></a></div>
              </div>
            </div>
          </div>
        </nav>
        <div id="search" class="collapse">
          <div class="container">
            <form role="search" class="ml-auto">
              <div class="input-group">
                <input type="text" placeholder="Search" class="form-control">
                <div class="input-group-append">
                  <button type="button" class="btn btn-primary"><i class="fa fa-search"></i></button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </header>
    <div id="all">
      <div id="content">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <!-- breadcrumb-->
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="nav-item"><a href="index.html" class="nav-link active">Home</a></li>
                  <li class="breadcrumb-item"><a href="#">Pele</a></li>
                  <li class="breadcrumb-item"><a href="#">Base</a></li>
                  <li aria-current="page" class="breadcrumb-item active">Base Ruby Rose</li>
                </ol>
              </nav>
            </div>
            <div class="col-lg-3 order-2 order-lg-1">
              <!--
              *** MENUS AND FILTERS ***
              _________________________________________________________
              -->
              <div class="card sidebar-menu mb-4">
                <div class="card-header">
                  <h3 class="h4 card-title">Categories</h3>
                </div>
                <div class="card-body">
                  <ul class="nav nav-pills flex-column category-menu">
                    <li><a href="category.html" class="nav-link">Pele <span class="badge badge-secondary">42</span></a>
                      <ul class="list-unstyled">
                        <li class="nav-item"><a href="category.html" class="nav-link">Base</a></li>
                          <li class="nav-item"><a href="category.html" class="nav-link">Corretivo</a></li>
                          <li class="nav-item"><a href="category.html" class="nav-link">Pó </a></li>
                          <li class="nav-item"><a href="category.html" class="nav-link">Blush</a></li>
                          <li class="nav-item"><a href="category.html" class="nav-link">Contorno</a></li>
                      </ul>
                    </li>
                    <li><a href="category.html" >Boca  <span>123</span></a>
                      <ul class="list-unstyled">
                        <li class="nav-item"><a href="category.html" class="nav-link">Batom</a></li>
                        <li class="nav-item"><a href="category.html" class="nav-link">Gloss</a></li>
                        <li class="nav-item"><a href="category.html" class="nav-link">Hidratantes</a></li>
                      </ul>
                    </li>
                    <li><a href="category.html" class="nav-link">Olhos  <span class="badge badge-secondary">11</span></a>
                      <ul class="list-unstyled">
                        <li class="nav-item"><a href="index.html" class="nav-link">Sombra</a></li>
                        <li class="nav-item"><a href="category.html" class="nav-link">Fixador</a></li>
                        <li class="nav-item"><a href="category-right.html" class="nav-link">Delineador</a></li>
                        <li class="nav-item"><a href="category-full.html" class="nav-link">Lapis</a></li>
                        <li class="nav-item"><a href="detail.html" class="nav-link">Rimel</a></li>
                      </ul>
                    </li>
                  </ul>
                </div>
              </div>

              <!-- *** MENUS AND FILTERS END ***-->
              <div class="banner"><a href="#"><img src="img/banner.jpg" alt="sales 2014" class="img-fluid"></a></div>
            </div>
            <?php foreach($lista as $item){?>
            <div class="col-lg-9 order-1 order-lg-2">
              <div id="productMain" class="row">
                <div class="col-md-6">
                  <div data-slider-id="1" class="owl-carousel shop-detail-carousel">
                  <div class='item'> <img src='img\<?php echo $item["foto"]?>' alt='' class='img-fluid'></div>
                    
                  </div>
                
                </div>
                <div class="col-md-6">
                  <div class="box">
                    <h1 class="text-center"><?php echo $item["nome"] ?></h1>
                   
                    <p class="price"><?php echo "R$".$item["preco"].",00" ?></p>
                    <p class="text-center buttons"><a href="basket.html" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Adicionar ao carrinho</a><a href="basket.html" class="btn btn-outline-primary"><i class="fa fa-heart"></i> Add to wishlist</a></p>
                  </div>
                
                </div>
              </div>
              <div id="details" class="box">
                <p></p>
                <h4>Detalhes</h4>
                <p><?php echo $item["descricao"] ?></p>
                <div class="social">
                  <h4>Compartilhe com seus amigos.</h4>
                  <p><a href="#" class="external facebook"><i class="fa fa-facebook"></i></a><a href="#" class="external gplus"><i class="fa fa-google-plus"></i></a><a href="#" class="external twitter"><i class="fa fa-twitter"></i></a><a href="#" class="email"><i class="fa fa-envelope"></i></a></p>
                </div>
              </div>
           <?php }?>
             
    <!--
    *** FOOTER ***
    _________________________________________________________
    -->
    <div id="footer">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-6">
            <h4 class="mb-3">Pages</h4>
            <ul class="list-unstyled">
              <li><a href="text.html">About us</a></li>
              <li><a href="text.html">Terms and conditions</a></li>
              <li><a href="faq.html">FAQ</a></li>
              <li><a href="contact.html">Contact us</a></li>
            </ul>
            <hr>
            <h4 class="mb-3">User section</h4>
            <ul class="list-unstyled">
              <li><a href="#" data-toggle="modal" data-target="#login-modal">Login</a></li>
              <li><a href="register.html">Regiter</a></li>
            </ul>
          </div>
          <!-- /.col-lg-3-->
          <div class="col-lg-3 col-md-6">
            <h4 class="mb-3">Top categories</h4>
            <h5>Pele</h5>
            <ul class="list-unstyled">
              <li class="nav-item"><a href="category.html" class="nav-link">Base</a></li>
              <li class="nav-item"><a href="category.html" class="nav-link">Corretivo</a></li>
              <li class="nav-item"><a href="category.html" class="nav-link">Pó </a></li>
              <li class="nav-item"><a href="category.html" class="nav-link">Blush</a></li>
              <li class="nav-item"><a href="category.html" class="nav-link">Contorno</a></li>
            </ul>
            <h5>Boca</h5>
            <ul class="list-unstyled">
              <li class="nav-item"><a href="category.html" class="nav-link">Batom</a></li>
              <li class="nav-item"><a href="category.html" class="nav-link">Gloss</a></li>
              <li class="nav-item"><a href="category.html" class="nav-link">Hidratantes</a></li>
            </ul>
          </div>
          <!-- /.col-lg-3-->
          
          <!-- /.col-lg-3-->
        </div>
        <!-- /.row-->
      </div>
      <!-- /.container-->
    </div>
    <!-- /#footer-->
    <!-- *** FOOTER END ***-->
    
    
    <!--
    *** COPYRIGHT ***
    _________________________________________________________
    -->
    <div id="copyright">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 mb-2 mb-lg-0">
            <p class="text-center text-lg-left">©2019 Your name goes here.</p>
          </div>
          <div class="col-lg-6">
            <p class="text-center text-lg-right">Template design by <a href="https://bootstrapious.com/">Bootstrapious</a>
              <!-- If you want to remove this backlink, pls purchase an Attribution-free License @ https://bootstrapious.com/p/obaju-e-commerce-template. Big thanks!-->
            </p>
          </div>
        </div>
      </div>
    </div>
    <!-- *** COPYRIGHT END ***-->
    <!-- JavaScript files-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="vendor/owl.carousel2.thumbs/owl.carousel2.thumbs.js"></script>
    <script src="js/front.js"></script>
  </body>
</html>