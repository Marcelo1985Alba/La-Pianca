<!doctype html>
<html lang="en">
  <head>
      <!-- REMOVER EN PRODUCCION -->
  <meta name="robots" content="noindex" />
  <meta name="googlebot" content="noindex" />
  <!-- REMOVER EN PRODUCCION -->
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="../../bootstrap.css" rel="stylesheet" >

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

    <title>Carga de datos</title>
  </head>
   <body class="d-flex h-100 text-center text-white" >
    <nav class="navbar fixed-top navbar-dark bg-dark" >
  <div class="container-fluid" >
    <a class="navbar-brand" href="#"><img src="../../img/lapianca_web_w.png" style="width:150px"></a>
    <div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">Opciones de Edición</button>
  <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton2">
    <li><a class="dropdown-item disabled" href="#">Cargar Articulo</a></li>
    <li><a class="dropdown-item" href="../editar-registros/">Editar Articulo</a></li>
    <li><a class="dropdown-item" href="../eliminar-registros/">Borrar Articulo</a></li>
  </ul>
</div>
  </div>
</nav>
    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
  <header class="mb-auto">
  
  </header>
  <main class="px-3">
    <h1 style="color: darkgrey;  margin-top: 100px;">Carga de Productos</h1>

    <center>

<!-- conexion a la db -->

<?php
  $mysqli = new mysqli('localhost', 'lapiancacomar_carta', 'carta_lp', 'lapiancacomar_carta');
?>
<!-- /conexion a la db -->

    <form action="insert_reg.php" method="POST">

    <div class="input-group mb-3" style="text-transform:capitalize">
    <span class="input-group-text" id="basic-addon1">Categoría</span>
    <input class="form-control" list="datalistOptions" name="categoria" placeholder="Escriba para buscar...">
      <datalist id="datalistOptions" >
      <?php
          $query = $mysqli -> query ("SELECT categoria FROM productos GROUP BY categoria ORDER BY id");
          while ($valores = mysqli_fetch_array($query)) {
            echo '<option value="'.$valores['categoria'].'" >'.$valores['categoria'].'</option>';
          }
        ?>
    </datalist>
    </div>

   <div class="input-group mb-3">
  <span class="input-group-text" >Producto</span>
  <input type="text" class="form-control" aria-describedby="basic-addon1" name="articulo">
  </div>
  <div class="input-group mb-3">
  <span class="input-group-text">Descripción</span>
  <textarea class="form-control" aria-label="With textarea" name="descripcion"></textarea>
  </div>
  <div class="input-group mb-3">
  <span class="input-group-text" >Precio $</span>
  <input type="text" class="form-control" aria-label="Precio" name="precio">
 </div>
<div class="input-group mb-3">
  <input type="submit"  class="btn btn-primary" name="submit" id="enviar" value="Guardar" />
</div>
</form>
</center>
 </main>

  <footer class="mt-auto">
    <p>Carta virtual<br>
    <i></i></p>
    <a href="https://pablorebora.com.ar" style="text-decoration: none; color: #AED6F1"><span style="font-size: 16px;">△</span></a>
  </footer>
</div>    
  </body>
</html>
<!-- Pablo R. Rébora △ 200_OK > pablorebora.com.ar info@pablorebora.com.ar  i_viii_mmxxi -->
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

  </body>
</html>