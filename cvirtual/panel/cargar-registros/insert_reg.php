<!doctype html>
<html lang="en">
  <!-- REMOVER EN PRODUCCION -->
  <meta name="robots" content="noindex" />
  <meta name="googlebot" content="noindex" />
  <!-- REMOVER EN PRODUCCION -->
  
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="../../bootstrap.css" rel="stylesheet" >
</head>
<?php

$categoria = $_POST["categoria"];
$articulo = $_POST["articulo"];
$descripcion = $_POST["descripcion"];
$precio = $_POST["precio"];

$servername = "localhost";
$database = "lapiancacomar_carta";
$username = "lapiancacomar_carta";
$password = "carta_lp";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
      die("Fallo de conexion: " . mysqli_connect_error());
}
 
echo "Conectado exitosamente<br><br>";
 
$sql = "INSERT INTO productos (categoria, articulo, descripcion, precio) VALUES ('$categoria', '$articulo', '$descripcion', '$precio')";
if (mysqli_query($conn, $sql)) {
      echo "Nuevo Registro creado OK!<br>";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
?> 
<div style="padding: 20px;">
<h3>Nuevo Articulo Creado </h3>
<p><b>Categoria:</b> <?php echo $categoria; ?></p>
<p><b>Artículo:</b> <?php echo $articulo; ?></p>
<p><b>Descripcion:</b> <?php echo $descripcion; ?> </p>
<p><b>Precio:</b> <?php echo $precio ?> </p>

<?php mysqli_close($conn);
?>
<br>
<br>
<a href="index.php" class="btn btn-primary"><<- Volver </a> 
</div>
</html>