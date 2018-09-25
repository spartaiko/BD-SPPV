<!DOCTYPE html>
<html lang="en">
<head> <!-- HEAD -->
  <!-- INICIO - META NO CACHE -->
    <meta http-equiv="Cache-control" content="no-store">
    <meta http-equiv="cache-control" content="max-age=0" />
    <meta http-equiv="cache-control" content="no-cache" />
    <meta http-equiv="expires" content="0" />
    <meta http-equiv="pragma" content="no-cache" />
  <!-- FIN - META NO CACHE -->
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<title>BD - SPPV</title>
	<link rel="stylesheet" type="text/css" href="librerias/bootstrap/css/bootstrap.css"> <!-- bootstrap libreria .CSS -->
	<link rel="stylesheet" type="text/css" href="node_modules/DataTables/DataTables-1.10.18/css/jquery.dataTables.min.css"> <!-- jQuery libreria .CSS -->
	<link rel="stylesheet" type="text/css" href="node_modules/DataTables/Responsive-2.2.2/css/responsive.bootstrap.min.css"> <!-- jQuery libreria .CSS -->
	<link rel="stylesheet" type="text/css" href="librerias/alertifyjs/css/alertify.css">
	<link rel="stylesheet" type="text/css" href="librerias/alertifyjs/css/themes/default.css">

	<script type="text/javascript" src="node_modules/DataTables/jQuery-3.3.1/jquery-3.3.1.js"></script> <!-- dataTables .JS JQUERY -->
	<script src="librerias/bootstrap/js/bootstrap.js"></script>
  <script type="text/javascript" src="node_modules/DataTables/DataTables-1.10.18/js/jquery.dataTables.min.js"></script> <!-- dataTables .JS JQUERY -->
  <script type="text/javascript" src="node_modules/DataTables/Responsive-2.2.2/js/responsive.bootstrap.min.js"></script> <!-- dataTables .JS JQUERY -->
  <script src="js/funciones.js"></script> 
	<script src="librerias/alertifyjs/alertify.js"></script>

  <link rel="stylesheet" type="text/css" href="src/style.css">

  <!-- FONTAWESOME -- ICONS -->
  <script defer src="node_modules/fontawesome-free-5.3.1-web/js/all.js"></script>
  
</head>
<body>

	<div class="container">
        <nav class="navbar navbar-inverse" style="background-color: #FFFFFF;">
            <div class="navbar-header">
                <img src="src/logo-spf.png" class="img-thumbnail" style="width: 48px; margin-right: 10px;">
            </div>
            <h5 style="margin-bottom: 0px;">Servicio Psiquiatrico para Varones (PRISMA)</h5>
            <h2 style="margin-top: 0px;">Registro de Ingreso</h2> 
        </nav>

        <div id="tabla-detalles"></div> <!-- TABLA DETALESS -->
        <hr />

        <button class="btn btn-success" data-toggle="modal" data-target="#modalNuevo" style="margin-bottom: 15px;">
            Nuevo Ingreso 
            <span class="glyphicon glyphicon-plus"></span>
        </button><br>

		<div id="tabla"></div> <!-- TABLA INTERNOS -->
	</div>

<!-- INICIO -- Modal para registros nuevos -->

  <div class="modal fade bd-example-modal-lg" id="modalNuevo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-lg" role="document" style="max-width: 80% !important;">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel">Registro de Ingreso</h4>
        </div>
        <div class="modal-body"> <!-- INICIO CAMPOS DE REGISTRO NUEVOS -->

            <!-- /// INICIO CAJA DATOS PERSONALES /// ---------------------------------------------------------------->

              <div class="form-group">
                <div class="row">

                 <div class="col col-lg-9">

                    <label>Apellido</label> <!--APELLIDO-->
                    <input type="text" name="" class="form-control input-sm" id="apellido" placeholder="Apellido del interno"
                    style="font-size:25px;">

                     <label>Nombre</label> <!--NOMBRE-->
                    <input type="text" name="" class="form-control input-sm" id="nombre" placeholder="Nombre del interno"
                    style="font-size:25px;">

                  </div>

                  <div class="col col-lg-3">

                    <label>ALOJ/EGR</label> <!--ALOJ/EGR-->
                    <select name="" class="form-control input-sm pull-right" id="egraloj">
                      <option></option>
                      <option>ALOJADO</option>
                      <option>EGRESADO</option>
                    </select>

                    <label>Fecha/Hora (de ingreso)</label><!--FECHA/HORA-->
                    <input type="datetime-local" name="" class="form-control input-sm" id="fechaingreso">

                  </div>

                </div>
              </div>

              <div class="form-group">
                <div class="row justify-content-md-center">

                  <div class="col col-lg-1">
                    <label>Edad</label><!--EDAD-->
                    <input type="text" maxlength="2" name="" class="form-control input-sm" id="edad" placeholder="99" onkeypress="return valida(event)">     
                      <!-- FUNCION PARA USAR UNICAMENTE NUMEROS EN CAMPO TIPO TEXTO -->
                        <script>
                          function valida(e){
                            tecla = (document.all) ? e.keyCode : e.which;

                            //Tecla de retroceso para borrar, siempre la permite
                            if (tecla==8){
                                return true;
                            }
                                
                            // Patron de entrada, en este caso solo acepta numeros
                            patron =/[0-9]/;
                            tecla_final = String.fromCharCode(tecla);
                            return patron.test(tecla_final);
                            }
                        </script>
                      <!-- FIN FUNCION -->
                  </div>
                    
                  <div class="col col-lg-2">
                    <label>Sexo</label> <!--SEXO-->
                    <select name="" class="form-control input-sm" id="sexo">
                      <option></option>
                      <option>MASCULINO</option>
                      <option>FEMENINO</option>
                    </select>
                  </div>

                  <div class="col col-lg-3">
                    <label>Fecha.Nac.</label><!--FECHA DE NACIMIENTO-->
                    <input type="date" name="" class="form-control input-sm" id="fechanacimiento">
                  </div>
                  
                  <div class="col col-lg-2">
                    <label>Condicion Sexual</label> <!--CONDICION SEXUAL-->
                    <select name="" class="form-control input-sm" id="condsexual">
                      <option></option>
                      <option>HETEROSEXUAL</option>
                      <option>HOMOSEXUAL</option>
                      <option>BISEXUAL</option>
                    </select>
                  </div>

                  <div class="col col-lg-2">
                    <label>Estado Civil</label> <!--ESTADO CIVIL-->
                    <select name="" class="form-control input-sm" id="civil">
                      <option></option>
                      <option>SOLTERO/A</option>
                      <option>CASADO/A</option>
                      <option>DIVORCIADO/A</option>
                      <option>VIUDO/A</option>
                    </select>
                  </div>

                  <div class="col col-lg-2">
                    <label>Pais de Origen</label> <!--NACIONALIDAD-->
                    <select name="" class="form-control input-sm" id="nacionalidad">
                      <option></option>
                      <option>ARGENTINA</option>
                      <option>BRASIL</option>
                      <option>PERU</option>
                      <option>JAPON</option>
                      <option>COLOMBIA</option>
                      <option>VENEZUELA</option>
                    </select>
                  </div>

                </div>
              </div>

            <!-- /// FIN CAJA DATOS PERSONALES /// ---------------------------------------------------------------->
            <hr />
            <!-- /// INICIO CAJA JUDICIAL /// --------------------------------------------------------------------->
                      <div class="form-group">
                        <div class="row justify-content-md-center">

                          <div class="col col-lg-2"> <!--ING/EGRE-->
                            <label>Ing./Egr.</label> 
                            <select name="" class="form-control input-sm" id="tipoingreso">
                              <option></option>
                              <option>INGRESO</option>
                              <option>REINGRESO</option>
                              <option>TRANSITO</option>
                            </select>
                          </div>

                          <div class="col col-lg-2"> <!--LPU-->
                            <label>LPU</label> 
                            <input type="text" maxlength="6" name="" class="form-control input-sm" id="lpu" 
                            placeholder="999999" onkeypress="return valida(event)"
                            style="font-size:25px;">
                              <!-- FUNCION PARA USAR UNICAMENTE NUMEROS EN CAMPO TIPO TEXTO -->
                                <script>
                                  function valida(e){
                                    tecla = (document.all) ? e.keyCode : e.which;

                                    //Tecla de retroceso para borrar, siempre la permite
                                    if (tecla==8){
                                        return true;
                                    }
                                        
                                    // Patron de entrada, en este caso solo acepta numeros
                                    patron =/[0-9]/;
                                    tecla_final = String.fromCharCode(tecla);
                                    return patron.test(tecla_final);
                                    }
                                </script>
                              <!-- FIN FUNCION -->
                          </div>

                          <div class="col col-lg-2"> <!--SIT.PROCESAL-->
                            <label>Proc./Con.</label> 
                            <select name="" class="form-control input-sm" id="sitlegal">
                              <option></option>
                              <option>PROCESADO</option>
                              <option>CONDENADO</option>
                            </select>
                          </div>

                          <div class="col col-lg-2"> <!--ORIGEN-->
                            <label>Origen</label> 
                            <select name="" class="form-control input-sm" id="origen">
                              <option></option>
                              <option>U.28</option>
                              <option>CPFIV</option>
                              <option>CPFCABA</option>
                              <option>OTRO</option>
                            </select>
                          </div>

                          <div class="col col-lg-2"> <!--MOTIVO EVALUACION-->
                            <label>Motivo Ing.</label> 
                            <select name="" class="form-control input-sm" id="motivo">
                              <option></option>
                              <option>EVALUACION</option>
                              <option>ORDEN JUDICIAL</option>
                              <option>SUPERIORIDAD</option>
                            </select>
                          </div>

                          <div class="col col-lg-2"> <!--ARTICULOS-->
                            <label>Articulo</label> 
                            <select name="" class="form-control input-sm" id="articulo">
                              <option></option>
                              <option>ART.34</option>
                              <option>ART.18</option>
                            </select>
                          </div>

                        </div>
                      </div>
            <!-- /// FIN CAJA JUDICIAL /// --------------------------------------------------------------------->
            <hr />
            <!-- /// INICIO CAJA JUDICIAL 2 /// --------------------------------------------------------------------->
                    <div class="form-group">
                      <div class="row justify-content-center">

                        <div class="col col-lg-5 col-md-offset-1">
                          <label>Juzgado/Tribunal</label> <!--JUZGADO-->
                          <input type="text" name="" class="form-control input-sm" id="juzgado" placeholder="Juzgado/Tribunal a cargo">
                        </div>

                        <div class="col col-lg-5">
                          <label>Delito</label> <!--DELITO-->
                          <input type="text" name="" class="form-control" id="delito" placeholder="Delito">
                        </div>

                      </div>
                    </div>
            <!-- /// FIN CAJA JUDICIAL 2 /// --------------------------------------------------------------------->

        </div> <!-- INICIO CAMPOS DE REGISTRO NUEVOS -->
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-dismiss="modal" id="guardarnuevo">
          Agregar Nuevo Ingreso
          </button>
        
        </div>
      </div>
    </div>
  </div>

<!-- FIN -- Modal para registros nuevos -->

<!-- INICIO -- Modal para edicion de datos -->

  <div class="modal fade bd-example-modal-lg" id="modalEdicion" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel">Actualizar datos</h4>
        </div>
        <div class="modal-body"> <!-- INICIO CAMPOS DE REGISTRO NUEVOS -->
          <input type="text" hidden="" id="idingreso" name="">

          <!-- /// INICIO CAJA DATOS PERSONALES /// ---------------------------------------------------------------->

            <div class="form-group">
                <div class="row">

                 <div class="col col-lg-9">

                    <label>Apellido</label> <!--APELLIDO-->
                    <input type="text" name="" class="form-control input-sm" id="apellidou" placeholder="Apellido del interno"
                    style="font-size:25px;" disabled>

                     <label>Nombre</label> <!--NOMBRE-->
                    <input type="text" name="" class="form-control input-sm" id="nombreu" placeholder="Nombre del interno"
                    style="font-size:25px;" disabled>

                  </div>

                  <div class="col col-lg-3">

                    <label>ALOJ/EGR</label> <!--ALOJ/EGR-->
                    <select name="" class="form-control input-sm pull-right" id="egraloju" disabled>
                      <option></option>
                      <option>ALOJADO</option>
                      <option>EGRESADO</option>
                    </select>

                    <label>Fecha/Hora (de ingreso)</label><!--FECHA/HORA-->
                    <input type="text" name="" class="form-control input-sm" id="fechaingresou" disabled>

                  </div>

              </div>
            </div>

            <div class="form-group">
              <div class="row justify-content-md-center">

                <div class="col col-lg-1">
                  <label>Edad</label><!--EDAD-->
                  <input type="text" maxlength="2" name="" class="form-control input-sm" id="edadu" placeholder="99" 
                  onkeypress="return valida(event)" disabled>     
                    <!-- FUNCION PARA USAR UNICAMENTE NUMEROS EN CAMPO TIPO TEXTO -->
                      <script>
                        function valida(e){
                          tecla = (document.all) ? e.keyCode : e.which;

                          //Tecla de retroceso para borrar, siempre la permite
                          if (tecla==8){
                              return true;
                          }
                              
                          // Patron de entrada, en este caso solo acepta numeros
                          patron =/[0-9]/;
                          tecla_final = String.fromCharCode(tecla);
                          return patron.test(tecla_final);
                          }
                      </script>
                    <!-- FIN FUNCION -->
                </div>
                  
                <div class="col col-lg-2">
                  <label>Sexo</label> <!--SEXO-->
                  <select name="" class="form-control input-sm" id="sexou" disabled>
                    <option></option>
                    <option>MASCULINO</option>
                    <option>FEMENINO</option>
                  </select>
                </div>

                <div class="col col-lg-3">
                  <label>Fecha.Nac.</label><!--FECHA DE NACIMIENTO-->
                  <input type="date" name="" class="form-control input-sm" id="fechanacimientou" disabled>
                </div>
                
                <div class="col col-lg-2">
                  <label>Condicion Sexual</label> <!--CONDICION SEXUAL-->
                  <select name="" class="form-control input-sm" id="condsexualu" disabled>
                    <option></option>
                    <option>HETEROSEXUAL</option>
                    <option>HOMOSEXUAL</option>
                    <option>BISEXUAL</option>
                  </select>
                </div>

                <div class="col col-lg-2">
                  <label>Estado Civil</label> <!--ESTADO CIVIL-->
                  <select name="" class="form-control input-sm" id="civilu" disabled>
                    <option></option>
                    <option>SOLTERO/A</option>
                    <option>CASADO/A</option>
                    <option>DIVORCIADO/A</option>
                    <option>VIUDO/A</option>
                  </select>
                </div>

                <div class="col col-lg-2">
                  <label>Pais de Origen</label> <!--NACIONALIDAD-->
                  <select name="" class="form-control input-sm" id="nacionalidadu" disabled>
                    <option></option>
                    <option>ARGENTINA</option>
                    <option>BRASIL</option>
                    <option>PERU</option>
                    <option>JAPON</option>
                    <option>COLOMBIA</option>
                    <option>VENEZUELA</option>
                  </select>
                </div>

              </div>
            </div>  

          <!-- /// FIN CAJA DATOS PERSONALES /// ---------------------------------------------------------------->
          <hr />
          <!-- /// INICIO CAJA JUDICIAL /// --------------------------------------------------------------------->
                    <div class="form-group">
                      <div class="row justify-content-md-center">

                        <div class="col col-lg-2"> <!--ING/EGRE-->
                          <label>Ing./Egr.</label> 
                          <select name="" class="form-control input-sm" id="tipoingresou" disabled>
                            <option></option>
                            <option>INGRESO</option>
                            <option>REINGRESO</option>
                            <option>TRANSITO</option>
                          </select>
                        </div>

                        <div class="col col-lg-2"> <!--LPU-->
                          <label>LPU</label> 
                          <input type="text" maxlength="6" name="" class="form-control input-sm" id="lpuu" placeholder="999999" 
                          onkeypress="return valida(event)" style="font-size:25px;" disabled>
                            <!-- FUNCION PARA USAR UNICAMENTE NUMEROS EN CAMPO TIPO TEXTO -->
                              <script>
                                function valida(e){
                                  tecla = (document.all) ? e.keyCode : e.which;

                                  //Tecla de retroceso para borrar, siempre la permite
                                  if (tecla==8){
                                      return true;
                                  }
                                      
                                  // Patron de entrada, en este caso solo acepta numeros
                                  patron =/[0-9]/;
                                  tecla_final = String.fromCharCode(tecla);
                                  return patron.test(tecla_final);
                                  }
                              </script>
                            <!-- FIN FUNCION -->
                        </div>

                        <div class="col col-lg-2"> <!--SIT.PROCESAL-->
                          <label>Proc./Con.</label> 
                          <select name="" class="form-control input-sm" id="sitlegalu" disabled>
                            <option></option>
                            <option>PROCESADO</option>
                            <option>CONDENADO</option>
                          </select>
                        </div>

                        <div class="col col-lg-2"> <!--ORIGEN-->
                          <label>Origen</label> 
                          <select name="" class="form-control input-sm" id="origenu" disabled>
                            <option></option>
                            <option>U.28</option>
                            <option>CPFIV</option>
                            <option>CPFCABA</option>
                            <option>OTRO</option>
                          </select>
                        </div>

                        <div class="col col-lg-2"> <!--MOTIVO EVALUACION-->
                          <label>Motivo Ing.</label> 
                          <select name="" class="form-control input-sm" id="motivou" disabled>
                            <option></option>
                            <option>EVALUACION</option>
                            <option>ORDEN JUDICIAL</option>
                            <option>SUPERIORIDAD</option>
                          </select>
                        </div>

                        <div class="col col-lg-2"> <!--ARTICULOS-->
                          <label>Articulo</label> 
                          <select name="" class="form-control input-sm" id="articulou" disabled>
                            <option></option>
                            <option>ART.34</option>
                            <option>ART.18</option>
                          </select>
                        </div>

                      </div>
                    </div>
          <!-- /// FIN CAJA JUDICIAL /// --------------------------------------------------------------------->
          <hr />
          <!-- /// INICIO CAJA JUDICIAL 2 /// --------------------------------------------------------------------->
                  <div class="form-group">
                    <div class="row justify-content-center">

                      <div class="col col-lg-5 col-md-offset-1">
                        <label>Juzgado/Tribunal</label> <!--JUZGADO-->
                        <input type="text" name="" class="form-control input-sm" id="juzgadou" 
                        placeholder="Juzgado/Tribunal a cargo" disabled>
                      </div>

                      <div class="col col-lg-5">
                        <label>Delito</label> <!--DELITO-->
                        <input type="text" name="" class="form-control" id="delitou" placeholder="Delito" disabled>
                      </div>

                    </div>
                  </div>
          <!-- /// FIN CAJA JUDICIAL 2 /// --------------------------------------------------------------------->

        </div> <!-- INICIO CAMPOS DE REGISTRO NUEVOS -->
        <div class="modal-footer">

          <button type="button" class="btn btn-primary" id="editar_registro" onclick="editarform()">Editar</button>
          <button type="button" class="btn btn-warning" id="actualizadatos" data-dismiss="modal">Actualizar</button>
          
        </div>
      </div>
    </div>
  </div>

<!-- FIN -- Modal para edicion de datos -->

<!-- INICIO -- Modal para alteracion -->
  <div class="modal fade" id="modalAlteracion" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog modal-dialog-centered" role="document" style="max-width: 80% !important;">
          <div class="modal-content">
              <div class="modal-header" style="background-color: #E1E5E3;"> <!-- MODAL HEADER -->

                <div class="row">

                  <div class="col-md-8"><input type="text" name="" class="form-control input-sm" id="title" 
                  style="background: none;
                          border: none;
                          font-size: large;
                          font-weight: bold;
                          box-shadow: none;" disabled></div>
                  
                  <div class="col-md-4"><button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button></div>

                </div>

              </div>
                  
              <div class="modal-body">

                <div class="form-group"> <!-- TABLA Y CAMPOS -->
                  <div class="row">

                    <div class="col-md-6">

                      <label>Fecha/Hora</label><!--FECHA/HORA-->
                      <input type="datetime-local" name="" class="form-control input-sm" id="fechaalt">
                    
                    </div>

                    <div class="col-md-6">

                      <label>Motivo</label> <!--MOTIVO-->
                      <select name="" class="form-control input-sm pull-right" id="motivoalt">
                        <option></option>
                        <option>DESCOMPENSACION</option>
                        <option>PELEA</option>
                        <option>INTENTO SUICIDIO</option>
                        <option>AUTOLESION</option>
                        <option>OTRO</option>
                      </select><br>
                    
                    </div>

                    <div class="col-md-12">

                      <label>Descripcion</label> <!--LESION-->
                      <input type="text" name="" class="form-control input-sm" id="lesionalt" placeholder="Describir lesion"
                      style="font-size:25px;">

                    </div><br>

                    <div class="col-md-12">

                      <label></label> <!--BOTON-->
                      <button type="button" class="btn btn-primary" id="guardarnuevoAlt"
                      style="float: right; margin-top: 10px;">
                      Agregar
                      </button>

                    </div>

                  </div>
                  
                </div>
                <hr>
                <div id="tabla-alteracion"></div>

              </div>

          </div>
      </div>
  </div>
<!-- FIN -- Modal para alteracion -->

<!-- MODALS DETALLES -->

  <!-- INICIO -- Modal ALOJADOS -->
      <div class="modal fade" id="modalDetalles" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog modal-dialog-centered" role="document" style="max-width: 80% !important;">
              <div class="modal-content">
                  <div class="modal-header"> <!-- MODAL HEADER -->
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title" id="myModalLabel">Alojados</h4>
                  </div>
                      
                  <div class="modal-body">
                  <div id="tabla-alojados"></div> <!-- TABLA ALOJADOS -->
                  </div>

              </div>
          </div>
      </div>
      <script type="text/javascript">
      $(document).ready(function(){
        $('#tabla-alojados').load('componentes/tabla-alojados.php');
      });
    </script>
  <!-- FIN -- Modal ALOJADOS -->

  <!-- INICIO -- Modal ARTICULO34 -->
    <div class="modal fade" id="modalArticulo34" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog modal-dialog-centered" role="document" style="max-width: 80% !important;">
              <div class="modal-content">
                  <div class="modal-header"> <!-- MODAL HEADER -->
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title" id="myModalLabel">Art.34</h4>
                  </div>
                      
                  <div class="modal-body">
                  <div id="tabla-articulo34"></div> <!-- TABLA ART.34 -->
                  </div>

              </div>
          </div>
      </div>
    <script type="text/javascript">
      $(document).ready(function(){
        $('#tabla-articulo34').load('componentes/tabla-articulo34.php');
      });
    </script>
  <!-- FIN -- Modal ARTICULO34 -->

  <!-- INICIO -- Modal ARTICULO18 -->
    <div class="modal fade" id="modalArticulo18" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-dialog-centered" role="document" style="max-width: 80% !important;">
            <div class="modal-content">
                <div class="modal-header"> <!-- MODAL HEADER -->
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Art.18</h4>
                </div>
                    
                <div class="modal-body">
                <div id="tabla-articulo18"></div> <!-- TABLA ART.34 -->
                </div>

            </div>
        </div>
    </div>
    <script type="text/javascript">
      $(document).ready(function(){
        $('#tabla-articulo18').load('componentes/tabla-articulo18.php');
      });
    </script>
  <!-- FIN -- Modal ARTICULO18-->

  <!-- INICIO -- Modal PROCESADOS -->
    <div class="modal fade" id="modalPro" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-dialog-centered" role="document" style="max-width: 80% !important;">
            <div class="modal-content">
                <div class="modal-header"> <!-- MODAL HEADER -->
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Procesados</h4>
                </div>
                    
                <div class="modal-body">
                <div id="tabla-procesado"></div> <!-- TABLA ART.34 -->
                </div>

            </div>
        </div>
    </div>
    <script type="text/javascript">
      $(document).ready(function(){
        $('#tabla-procesado').load('componentes/tabla-procesado.php');
      });
    </script>
  <!-- FIN -- Modal PROCESADOS--> 

  <!-- INICIO -- Modal CONDENADOS -->
    <div class="modal fade" id="modalCon" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-dialog-centered" role="document" style="max-width: 80% !important;">
            <div class="modal-content">
                <div class="modal-header"> <!-- MODAL HEADER -->
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Condenados</h4>
                </div>
                    
                <div class="modal-body">
                <div id="tabla-condenado"></div> <!-- TABLA ART.34 -->
                </div>

            </div>
        </div>
    </div>
    <script type="text/javascript">
      $(document).ready(function(){
        $('#tabla-condenado').load('componentes/tabla-condenado.php');
      });
    </script>
  <!-- FIN -- Modal CONDENADOS--> 

<!-- MODALS DETALLES -->

</body>
<!-- Footer -->
  <footer class="page-footer font-small blue">

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© 2018 creado por
      <a href="#">Ayte. 3ra Juan G. MAGARINOS (C.34424)</a>
    </div>
    <!-- Copyright -->

  </footer>
<!-- Footer -->
</html>

<!-- SCRIPT REFRESCAR/GUARDAR/ACTUALIZAR -->
  <script type="text/javascript">
    $(document).ready(function(){
      $('#tabla').load('componentes/tabla.php');
      $('#tabla-detalles').load('componentes/tabla-detalles.php');
    });
  </script>

  <script type="text/javascript">
      $(document).ready(function(){
          $('#guardarnuevo').click(function(){
            nombre=$('#nombre').val();
            apellido=$('#apellido').val();
            lpu=$('#lpu').val();
            sexo=$('#sexo').val();
            origen=$('#origen').val();
            fechaingreso=$('#fechaingreso').val();
            egraloj=$('#egraloj').val();
            edad=$('#edad').val();
            nacionalidad=$('#nacionalidad').val();
            motivo=$('#motivo').val();
            tipoingreso=$('#tipoingreso').val();
            fechanacimiento=$('#fechanacimiento').val();
            condsexual=$('#condsexual').val();
            civil=$('#civil').val();
            sitlegal=$('#sitlegal').val();
            juzgado=$('#juzgado').val();
            delito=$('#delito').val();
            articulo=$('#articulo').val();

              agregardatos(nombre,apellido,lpu,sexo,origen,fechaingreso,egraloj,edad,nacionalidad,motivo,
              tipoingreso,fechanacimiento,condsexual,civil,sitlegal,juzgado,delito,articulo);
          });

          $('#actualizadatos').click(function(){
            actualizaDatos();
          });

      });

    function editarform(){

      document.getElementById("apellidou").disabled = false;
      document.getElementById("nombreu").disabled = false;
      document.getElementById("fechaingresou").disabled = false;
      document.getElementById("egraloju").disabled = false;
      document.getElementById("edadu").disabled = false;
      document.getElementById("sexou").disabled = false;
      document.getElementById("fechanacimientou").disabled = false;
      document.getElementById("condsexualu").disabled = false;
      document.getElementById("civilu").disabled = false;
      document.getElementById("nacionalidadu").disabled = false;
      document.getElementById("tipoingresou").disabled = false;
      document.getElementById("lpuu").disabled = false;
      document.getElementById("sitlegalu").disabled = false;
      document.getElementById("origenu").disabled = false;
      document.getElementById("motivou").disabled = false;
      document.getElementById("juzgadou").disabled = false;
      document.getElementById("delitou").disabled = false;
      document.getElementById("articulou").disabled = false;
      document.getElementById("editar_registro").disabled = true;


      }
  </script>
<!-- SCRIPT REFRESCAR/GUARDAR/ACTUALIZAR -->
