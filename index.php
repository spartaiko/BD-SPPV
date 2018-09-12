<!DOCTYPE html>
<html>
<head>
  <!-- INICIO - META NO CACHE -->
    <meta http-equiv="Cache-control" content="no-store">
    <meta http-equiv="cache-control" content="max-age=0" />
    <meta http-equiv="cache-control" content="no-cache" />
    <meta http-equiv="expires" content="0" />
    <meta http-equiv="expires" content="Tue, 01 Jan 1980 1:00:00 GMT" />
    <meta http-equiv="pragma" content="no-cache" />
  <!-- FIN - META NO CACHE -->
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<title>BD - SPPV</title>
	<link rel="stylesheet" type="text/css" href="librerias/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="librerias/alertifyjs/css/alertify.css">
	<link rel="stylesheet" type="text/css" href="librerias/alertifyjs/css/themes/default.css">

	<script src="librerias/jquery-3.2.1.min.js"></script>
  <script src="js/funciones.js"></script>
	<script src="librerias/bootstrap/js/bootstrap.js"></script>
	<script src="librerias/alertifyjs/alertify.js"></script>
  
</head>
<body>

	<div class="container">
    <div class="jumbotron">
      <h1>Registro de Ingreso</h1>      
      <p>Servicio Psiquiatrico para Varones (H.P.C.I / ALA NORTE)</p>
    </div>
		<div id="tabla"></div>
	</div>

<!-- INICIO -- Modal para registros nuevos -->

  <div class="modal fade" id="modalNuevo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-sm" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel">Agrega nueva persona</h4>
        </div>
        <div class="modal-body">
            <label>Nombre</label>
            <input type="text" name="" id="nombre" class="form-control input-sm">
            <label>Apellido</label>
            <input type="text" name="" id="apellido" class="form-control input-sm">
            <label>LPU</label>
            <input type="text" name="" id="lpu" class="form-control input-sm">
            <label>Sexo</label>
            <input type="text" name="" id="sexo" class="form-control input-sm">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-dismiss="modal" id="guardarnuevo">
          Agregar
          </button>
        
        </div>
      </div>
    </div>
  </div>

<!-- FIN -- Modal para registros nuevos -->

<!-- INICIO -- Modal para edicion de datos -->

  <div class="modal fade" id="modalEdicion" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-sm" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel">Actualizar datos</h4>
        </div>
        <div class="modal-body">
            <input type="text" hidden="" id="idingreso" name="">
            <label>Nombre</label>
            <input type="text" name="" id="nombreu" class="form-control input-sm">
            <label>Apellido</label>
            <input type="text" name="" id="apellidou" class="form-control input-sm">
            <label>LPU</label>
            <input type="text" name="" id="lpuu" class="form-control input-sm">
            <label>Sexo</label>
            <input type="text" name="" id="sexou" class="form-control input-sm">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-warning" id="actualizadatos" data-dismiss="modal">Actualizar</button>
          
        </div>
      </div>
    </div>
  </div>

<!-- FIN -- Modal para edicion de datos -->

</body>
</html>

<script type="text/javascript">
	$(document).ready(function(){
		$('#tabla').load('componentes/tabla.php');
    $('#buscador').load('componentes/buscador.php');
	});
</script>

<script type="text/javascript">
    $(document).ready(function(){
        $('#guardarnuevo').click(function(){
          nombre=$('#nombre').val();
          apellido=$('#apellido').val();
          lpu=$('#lpu').val();
          sexo=$('#sexo').val();
            agregardatos(nombre,apellido,lpu,sexo);
        });



        $('#actualizadatos').click(function(){
          actualizaDatos();
        });

    });
</script>