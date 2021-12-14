<!doctype html>
<html>
<head>
	  <!-- REMOVER EN PRODUCCION -->
  <meta name="robots" content="noindex" />
  <meta name="googlebot" content="noindex" />
  <!-- REMOVER EN PRODUCCION -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Editar Registros Mysql Mediante Funcion</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
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
    background-color: #4CAF50;
    color: white;
}
.main-wrapper{
	
	background:#fff;
	border:1px solid #292929;
	padding:25px;
}
hr {
    margin-top: 5px;
    margin-bottom: 5px;
    border: 0;
    border-top: 1px solid #eee;
}
</style>
</head>

<body >
<div class="main-wrapper">
	<center>
<h1 style="color: darkgrey;">Modificar Lista Precios</h1>
</center>

<?php 
include("function.php");
$id = $_GET['id'];
select_id('productos','id',$id);
?>
<form action="" method="post">
	<div class="mb-3">
	<label for="articulo" class="form-label">Articulo</label><br>
	<input type="text" value="<?php echo $row->articulo;?>" name="articulo" class="form-control">
	</div>
	<div class="mb-3">
	<label for="precio" class="form-label">Precio</label>
	<input type="text" value="<?php echo $row->precio;?>" name="precio" class="form-control">
	</div>
	<div class="mb-3">
	<label for="descripcion" class="form-label">Descripcion</label><br>
	<textarea type="textarea" name="descripcion" class="form-control" style="font-size: 12px"><?php echo $row->descripcion;?></textarea>
	</div>	
	<input type="submit" name="submit" class="btn btn-primary">
</form>

<?php
	
	if(isset($_POST['submit'])){
		$field = array("articulo"=>$_POST['articulo'],"precio"=>$_POST['precio'], "descripcion"=>$_POST['descripcion'] );
		$tbl = "productos";
		edit($tbl,$field,'id',$id);
		header("location:index.php");
	}
?>
</div>
<br>
<br>
<center>
<a href="index.php" class="btn btn-primary"><<- Volver </a> 
</center>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
</body>
</html>