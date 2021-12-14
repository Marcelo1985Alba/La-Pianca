<!doctype html>
<html lang="es" class="h-100">

  <head>
    <meta name="robots" content="noindex" />
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <meta name="author" content="Pablo R Rebora sobre Bootstrap V">
    <meta name="generator" content="Sublime 3">
    <title>La Pianca Pastelería - Vicente Lopez - Carta Virtual </title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Catamaran:wght@300&display=swap" rel="stylesheet">

    <!-- Bootstrap core CSS -->
<link href="bootstrap.css" rel="stylesheet" >

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Estilos de esta app -->
    <link href="carta_virtual.css" rel="stylesheet">


  </head>
  <body class="d-flex h-100 text-center text-white" style="background-color: #000;">
    
<div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
  <header class="mb-auto">
      
    <nav class="navbar fixed-top navbar-dark" style="background-color: #c50006;" >
  <div class="container-fluid" >
    <a class="navbar-brand" href="#"><img src="img/lapianca_web_w.png" style="width:150px"></a>
    <div class="dropdown">
  <button class="btn btn-danger dropdown-toggle" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
    Nuestros Productos
  </button>
  <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton2">
    <li><a class="dropdown-item scrollto" href="#cafe">Café</a></li>
    <li><a class="dropdown-item scrollto" href="#te">Té</a></li>
    <li><a class="dropdown-item scrollto" href="#desayunos">Desayunos y Meriendas</a></li>
    <li><a class="dropdown-item scrollto" href="#empanadas">Pastelería</a></li>
    <li><a class="dropdown-item scrollto" href="#veggies">Sandwiches</a></li>
    <li><a class="dropdown-item scrollto" href="#ternera">Bebidas</a></li>
    <li><a class="dropdown-item scrollto" href="#pollo">Panes</a></li>
    <li><a class="dropdown-item scrollto" href="#cerdo">Box</a></li>
  </ul>
</div>
  </div>
</nav>

  </header>
<?php
// conexion a la db
$link = new PDO('mysql:host=localhost;dbname=lapiancacomar_carta', 'lapiancacomar_carta', 'carta_lp'); 

?>
  <main class="px-0">
<center>
  <!-- seccion CAFE -->

<section id="cafe">
  <div class="listado" style="margin-top: 90px;">
    <h1 style="font-size:40px; color: #d80607; font-family: 'Catamaran', sans-serif;">~CAFÉ~</h1>
    <h2 style="color: #111; font-family: 'Catamaran', sans-serif;"><b>TAKE AWAY</b></h2>
    <h2 style="color: #111; font-family: 'Catamaran', sans-serif;">4 OZ : $200 - 6 OZ: $220 - 8 OZ: $240 - 12 OZ: $260 - Té: $200</h3>
    <p>
    <?php foreach ($link->query('SELECT * FROM productos WHERE categoria = "cafe" ORDER BY id ') as $row){ 
       ?>
    <div class="row">
    <div class="col-md-auto articulo">
      <?php echo $row['articulo'] ?>
    </div>
    <div class="col-md-auto precio">$<?php echo $row['precio'] ?> 
    </div>
    <div class="col-md-auto descripcion">
      <?php echo $row['descripcion'] ?>
    </div>
  </div>
  <?php
  }
?>
</p>
<img src="img/camioncito_icono.png" style="width: 50px; margin: 30px">
</div>
</section>

  <!-- / CAFE -->

  <!-- TE -->
  <section id="te">
  <div class="listado">
    <h1 style="font-size:40px; color: #d80607; font-family: 'Catamaran', sans-serif;">~TÉ~</h1>
    <h2 style="color: #d80607; font-family: 'Catamaran', sans-serif;">TÉ EN HEBRAS</h2>
    <p>
    <?php foreach ($link->query('SELECT * FROM productos WHERE categoria = "te" ORDER BY id ') as $row){ 
       ?>
    <div class="row">
    <div class="col-md-auto articulo">
      <?php echo $row['articulo'] ?>
    </div>
    <div class="col-md-auto precio">$<?php echo $row['precio'] ?> 
    </div>
    <div class="col-md-auto descripcion">
      <?php echo $row['descripcion'] ?>
    </div>
  </div>
  <?php
  }
?>
</p>
<img src="img/camioncito_icono.png" style="width: 50px; margin-bottom: 30px">
</div>
</section>
<!-- / TE -->

 <!-- DESAYUNOS Y MERIENDAS -->
  <section id="desayunos">
  <div class="listado">
    <h1 style="font-size:40px; color: #d80607; font-family: 'Catamaran', sans-serif;">~DESAYUNOS Y MERIENDAS~</h1>
    <h2 style="color: #d80607; font-family: 'Catamaran', sans-serif;">TODOS LOS DESAYUNOS Y MERIENDAS INCLUYEN UN CAFÉ O TÉ A ELECCIÓN</h2>
    <p>
    <?php foreach ($link->query('SELECT * FROM productos WHERE categoria = "desayunos" ORDER BY id ') as $row){ 
       ?>
    <div class="row">
    <div class="col-md-auto articulo">
      <?php echo $row['articulo'] ?>
    </div>
    <div class="col-md-auto precio">$<?php echo $row['precio'] ?> 
    </div>
    <div class="col-md-auto descripcion">
      <?php echo $row['descripcion'] ?>
    </div>
  </div>
  <?php
  }
?>
</p>
<img src="img/camioncito_icono.png" style="width: 50px; margin-bottom: 30px">
</div>
</section>
<!-- / DESAYUNOS Y MERIENDAS -->

</center>
 </main>

  <footer style="margin-top: 30px; margin-bottom:10px">
    <p>La Pianca - Tapiales 1185 - Vicente López</p>
    <a href="https://pablorebora.com.ar/Webmaster" style="text-decoration: none; color: lightblue;"><span style="font-size: 12px;"> △ </span></a>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script> 
</div>    
  </body>
</html>
<!-- Pablo R. Rébora △ 200_OK > pablorebora.com.ar info@pablorebora.com.ar  i_viii_mmxxi -->