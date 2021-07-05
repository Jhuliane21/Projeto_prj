<?php

include_once 'conexao.php';
session_start();
$_SESSION["tipo"] = "";

?>
<!DOCTYPE html>
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
    <!-- navbar-->
    <header class="header mb-5">
        
        
      </div>
      <nav class="navbar navbar-expand-lg">
        <div class="container"><a href="index.html" class="navbar-brand home"><img src="img/images (4).jpg" alt="Obaju logo" class="d-none d-md-inline-block"><img src="img/logo-small.png" alt="Obaju logo" class="d-inline-block d-md-none"><span class="sr-only">Obaju - go to homepage</span></a>
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
              <div id="basket-overview" class="navbar-collapse collapse d-none d-lg-block"><a class="btn btn-primary navbar-btn" onclick="javascript: location.href='basket.php'"><i class="fa fa-shopping-cart"></i><span>Carrinho</span></a></div>
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
              
            </div>
            <div class="col-lg-6">
              <div class="box">
                <h1>Cadastrar produtos</h1>
                <form  method="post" enctype="multipart/form-data">
                  <div class="form-group">
                    <label for="name">Nome</label>
                    <input id="name" type="text" name= "nome" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="preco">Preço</label>
                    <input id="preco" name="preco" type="price" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="descricao">Descrição</label>
                    <input id="descricao" name="descricao" type="text" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="imagem">Foto</label>
                    <div><input name="imagem" type="file"/></div>
                  </div>
                  <label for="exampleFormControlInput1" class="form-label">Escolha a categoria:</label>
                        <div class="form-group">
                            <select class="form-control" name= "categoria">
                            <option selected>Escolha</option>
                            <option value="1">Base</option>
                            <option value="2">Corretivo</option>
                            <option value="3">Pó</option>
                            <option value="4">Blush</option>
                            <option value="5">Contorno</option>
                            <option value="6">Batom</option>
                            <option value="7">Gloss</option>
                            <option value="8">Hidratantes</option>
                            <option value="9">Sombra</option>
                            <option value="10">Fixador</option>
                            <option value="11">Delineador</option>
                            <option value="12">Lapis</option>
                            <option value="13">Rimel</option>
                            </select>
                        </div>
                  <div class="text-center">
                    <button type="submit" class="btn btn-primary"> Cadastrar</button>
                  </div>
                </form>
              </div>
            </div>
           
          </div>
        </div>
      </div>
    </div>
    <?php      
     if(isset($_FILES['imagem'])){
       $extensao = strtolower(substr($_FILES['imagem']['name'], -4));
       $novo_nome = md5(time()) - $extensao;
       $diretorio = "img/";

       move_uploaded_file($_FILES['imagem']['tmp_name'], $diretorio.$novo_nome);
       $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
       $preco = filter_input(INPUT_POST, 'preco', FILTER_SANITIZE_STRING);
       $descricao = filter_input(INPUT_POST, 'descricao', FILTER_SANITIZE_STRING);  
       $categorias = ["Base", "Corretivo", "Po","Blush", "Contorno", "Batom", "Gloss","Hidratantes", "Sombra", "Fixador", "Delineador", "Lapis", "Rimel"];
       $categoria_indice = filter_input(INPUT_POST, 'categoria', FILTER_SANITIZE_STRING);
       if(isset($nome) && isset($preco) && isset($descricao)){
               $query = "INSERT INTO produto (nome, preco, descricao,  foto, categoria) values(:nome,:preco,:descricao, :foto, :categoria)";
               $insert = $conn->prepare($query);
               $categoria_nome = $categorias[$categoria_indice - 1];
               $insert->bindParam(':nome', $nome);
               $insert->bindParam(':preco', $preco);
               $insert->bindParam(':descricao', $descricao);
                $insert->bindParam(':foto', $novo_nome);
               $insert->bindParam(':categoria', $categoria_nome);
               $insert->execute();
       }
     }

               
            ?>
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