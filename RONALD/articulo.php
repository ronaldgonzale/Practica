<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<meta name="viewport" content="width=divice-width,initial-scale=1">
	<title>sesion</title>
	<link rel="stylesheet" " href="bootstrap/css/bootstrap.min.css">

</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-4">
    
	
		<div class="panel panel-primary">
						<div class="panel-heading">
						<h3 class="text-center"><strong>INICIO DE SESION</strong></h3>
					</div>
						<div class="panel-body">
							<form action="agregar.php" method="POST" accept-charset="utf-8" >
								<h4 >INGRESAR ARTICULO</h4>
								<div class="form-group">

<label class="col-md-2 control-label">Articulo:</label>
</div>
<div class="form-group"> 
<input type="text" name="txtarticulo" class="form-control input-md">
</div>
<br>
<div class="form-group">
<label class="col-md-2 control-label">Precio:</label>
</div>
<div class="form-group">
<input type="text" name="txtprecio"  class="form-control input-md">
</div>
<div class="form-group">
	<label class="col-md-2 control-label">Cantidad:</label>
	<input type="text" name="txtcantidad"  class="form-control input-md">
</div>
<div class="form-group">

<button type="submit" name="btnenviar"  class="btn btn-danger">ENVIAR</button>

</div>
								

							</form>
<script src="bootstrap/js/jquery-1.12.4.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>	

</body>
</html>