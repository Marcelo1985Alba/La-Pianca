<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Eliminar Registros</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
<link type="text/css" href="http://fontawesome.io/assets/font-awesome/css/font-awesome.css" rel="stylesheet">
<style>
table {
    border-collapse: collapse;
    width: 100%;
}
th, td {
    text-align: left;
    padding: 4px;
}
tr:nth-child(even){background-color: #f2f2f2}
th {
    background-color: #333;
    color: white;
}
.main-wrapper{
	width:100%;
	
	background:#fff;
	border:1px solid #292929;
	padding:10px;
}
hr {
    margin-top: 5px;
    margin-bottom: 5px;
    border: 0;
    border-top: 1px solid #eee;
}
</style>
</head>
../
<body>

	<nav class="navbar fixed-top navbar-dark bg-dark" >
  <div class="container-fluid" >
    <a class="navbar-brand" href="#"><img src="../../img/lapianca_web_w.png" style="width:150px"></a>
    <div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">Opciones de Edicion</button>
  <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton2">
    <li><a class="dropdown-item" href="../cargar-registros/">Cargar Articulo</a></li>
    <li><a class="dropdown-item" href="../editar-registros/">Editar Articulo</a></li>
    <li><a class="dropdown-item disabled" href="eliminar-registros/">Borrar Articulo</a></li>
  </ul>
</div>
  </div>
</nav>
<div>
	<center>

<h1 style="color: darkgrey;  margin-top: 100px;">Borrar Articulos</h1>
</center>
<?php
	include("function.php");
?>
<table border="1" width="100%">
	<tr>
		<th class="text-center">Articulos</th>
		<th class="text-center">Precio</th>
		<th class="text-center">Descripcion</th>
		<th class="text-center">Eliminar</th>
	</tr>
<?php 
	$sql = "select * from productos";
	$result = db_query($sql);
	while($row = mysqli_fetch_object($result)){
	?>
	<tr>
		<td><?php echo $row->articulo;?></td>
		<td><?php echo $row->precio;?></td>
		<td style="font-size: 12px"><?php echo $row->descripcion;?></td>
		<td>
   <a class="btn btn-primary" href="borrar.php?id=<?php echo $row->id;?>"><i class="fa fa-trash-o fa-lg" aria-hidden="true"></i></a>
        </td>
	</tr>
	<?php } ?>
</table>
</div>
  <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>
</html>