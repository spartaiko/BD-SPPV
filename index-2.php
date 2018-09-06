<!DOCTYPE <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>BS - SPPV</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- FONTAWESOME -- ICONS -->
    <script defer src="fontawesome-free-5.3.1-web/js/all.js"></script>

    <!-- STYLE -- BOOSTRAP -->
    <link rel="stylesheet" type="text/css" href="DataTables/datatables.min.css"/> <!-- STYLE -->

    <!-- JAVASCRIPT -- JQUERY -->    
    <script type="text/javascript" src="DataTables/jQuery-3.3.1/jquery-3.3.1.js"></script> <!-- JQUERY -->
    <script type="text/javascript" src="DataTables/DataTables-1.10.18/js/dataTables.bootstrap.min.js"></script> <!-- BOOSTRAP -->
    <script type="text/javascript" src="DataTables/DataTables-1.10.18/js/jquery.dataTables.min.js"></script> <!-- JQUERY -->
    <script type="text/javascript" src="DataTables/datatables.min.js"></script>

    <!-- JAVASCRIPT -- JQUERY -->  
    <script type="text/javascript" src="funciones.js"></script>

    <!-- TABLA DATABASE JQUERY -- INICIO -->

            <script type="text/javascript"> // <!-- SCRIPT - PARAS EL LISTADO DATABASE JQUERY -->
              $(document).ready(function() {
                $(".table").DataTable({
                  responsive: true,
                  "order": [], // --> Se desactiva el modo ordenar
                  "language": {
                      "lengthMenu": "Mostrar _MENU_ registros por página",
                      "search": "Buscar",
                      "info":           "Mostrando <b>_START_</b> a <b>_END_</b> de <b>_TOTAL_</b> internos registrados",
                      "infoEmpty":      "Mostrando 0 a 0 de 0 entradas",
                      "paginate": {
                          "first":      "Primero",
                          "last":       "Ultimo",
                          "next":       "Siguiente",
                          "previous":   "Anterior"
                      },
                  }
                });
              });
            </script>

    <!-- TABLA DATABASE JQUERY -- FIN -->
    
</head>
<body class="bg-light">
    <div class="container">
        <div class="jumbotron">
          <h1>Registro de Ingreso</h1>      
          <p>Servicio Psiquiatrico para Varones (H.P.C.I / ALA NORTE)</p>
        </div>

        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalIngresarInterno">
          Nuevo Ingreso
        </button>
        <br> 

<!-- /// INICIO CAJA TABLA DE INTERNOS /// --------------------------------------------------------->
 <br>
        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
            <thead>
                <tr style="text-align: center;">
                    <th>Fecha/Ing.</th>
                    <th>Apellido</th>
                    <th>Nombre</th>
                    <th>LPU</th>
                    <th>Procedencia</th>
                    <th>Edad</th>
                    <th></th>
                </tr>
            </thead>

            <!-- INICIO BUSQUEDA -->
              <?php
                require 'server.php';
                
                $sppv = "SELECT * FROM ingreso order by id_ingreso DESC";
                $result = $conn->query($sppv) or die (mysqli_error($conn));

              ?>
            <!-- FIN BUSQUEDA -->

            <tbody>
            <?php // <!-- IMPRIME LOS RESULTADOS EN LA TABLA -->
              while ($row=$result->fetch_assoc()){

                $datos=$row['app_ing']."||".
                $row['nom_ing']."||".
                $row['lpu_ing']."||".
                $row['org_ing']."||".
                $row['civil_ing']."||".
                $row['edad_ing']."||".
                $row['fecha_ing']."||".
                $row['tipo_ing']."||".
                $row['sexo_ing']."||".
                $row['naciona_ing']."||".
                $row['motivo_ing']."||".
                $row['fecha_nac_ing']."||".
                $row['cond_sex_ing']."||".
                $row['sit_ing']."||".
                $row['juz_ing']."||".
                $row['delito_ing']."||".
                $row['art_ing'];


            ?>

            <tr>

              <td><?php echo (date("d-m-Y H:i", strtotime($row['fecha_ing']))) ?></td>
              <td><?php echo $row['app_ing'] ?></td>
              <td><?php echo $row['nom_ing'] ?></td>
              <td><?php echo $row['lpu_ing'] ?></td>
              <td><?php echo $row['org_ing'] ?></td>
              <td><?php echo $row['edad_ing'] ?></td>
              <td> <!-- BOTONES HERRAMIENTAS -->

                <div style="display: flex;">
                  
                  <a class="btn" name="editar" data-toggle="modal" data-target="#modalView"
                    role="button" onclick="agregaform('<?php echo $datos ?>'); editarformTrue();" 
                    style="padding: initial;"><i class='fas fa-edit' style='color:#007bff;'></i>
                  </a>

                  <a class="btn" name="eliminar" data-toggle="modal" data-target="#modalView"
                    role="button" style="padding: initial;"><i class='fas fa-trash-alt' style='color:#d9534f;'></i>
                  </a>

                </div>
                    
              </td>

            </tr>
            <?php
              }
            ?>
            </tbody>
        </table>
    </div>    
<!-- /// FIN CAJA TABLA DE INTERNOS /// --------------------------------------------------------->

<!-- /// MODAL EDITAR REGISTRO INTERNO /// --------------------------------------------------------->

  <div class="modal fade bd-example-modal-lg" id="modalView" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document" style="max-width: 80% !important;">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"> Registro de Internos</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

          <div class="form-group"> <!-- APP / NOM / FECHA ING -->
              <div class="row">

                  <div class="col">
                      <label> APELLIDO </label>
                      <input type='text' id='app_ing' name='app_ing' class="form-control" disabled><br>
                  </div>

                  <div class="col">
                      <label> NOMBRE </label>
                      <input type='text' id='nom_ing' name='nom_ing' class="form-control" disabled><br>
                  </div>

                  <div class="col">
                      <label> FECHA ING </label>
                      <input type='text' id='fecha_ing' name='fecha_ing' class="form-control" disabled><br>
                  </div>
              </div>
          </div>

          <div class="form-group"> <!-- EDAD / SEX / FECHA NAC. -->
              <div class="row">

                  <div class="col">
                      <label> EDAD </label>
                      <input type='text' id='edad_ing' name='edad_ing' class="form-control" disabled><br>
                  </div>

                  <div class="col">
                      <label> SEXO </label>
                      <input type='text' id='sexo_ing' name='sexo_ing' class="form-control" disabled><br>
                  </div>

                  <div class="col">
                      <label> FECHA DE NACIMIENTO </label>
                      <input type='text' id='fecha_nac_ing' name='fecha_nac_ing' class="form-control" disabled><br>
                  </div>
              </div>
          </div>

          <div class="form-group"> <!-- CON.SEX / EST.CIVIL / ORIGEN -->
              <div class="row">

                  <div class="col">
                      <label> CONDICION SEXUAL </label>
                      <input type='text' id='cond_sex_ing' name='cond_sex_ing' class="form-control"><br>
                  </div>

                  <div class="col">
                      <label> EST. CIVIL </label>
                      <input type='text' id='civil_ing' name='civil_ing' class="form-control"><br>
                  </div>

                  <div class="col">
                      <label> ORIGEN </label>
                      <input type='text' id='naciona_ing' name='naciona_ing' class="form-control"><br>
                  </div>

              </div>
          </div>

        <!-- /// INICIO CAJA JUDICIAL /// --------------------------------------------------------------------->
          <div class="form-group">
              <div class="row justify-content-md-center">

                <div class="col col-lg-2"> <!--ING/EGRE-->
                  <label for="tipo_ing">INGRESO/EGRESO</label> 
                  <select name="tipo_ing" class="form-control" id="idTipoIng">
                    <option></option>
                    <option>INGRESO</option>
                    <option>REINGRESO</option>
                    <option>TRANSITO</option>
                  </select>
                </div>

                <div class="col col-lg-4"> <!--LPU-->
                  <label for="lpu_ing">LPU</label> 
                  <input type="text" maxlength="6" name="lpu_ing" class="form-control" id="idIngLpu" 
                  placeholder="LPU del interno" onkeypress="return valida(event)">
                </div>

                <div class="col col-lg-2"> <!--SIT.PROCESAL-->
                  <label for="sit_ing">PROC/CON</label> 
                  <select name="sit_ing" class="form-control" id="idSitIng">
                    <option></option>
                    <option>PROCESADO</option>
                    <option>CONDENADO</option>
                  </select>
                </div>

                <div class="col col-lg-2"> <!--ORIGEN-->
                  <label for="org_ing">Origen</label> 
                  <select name="org_ing" class="form-control" id="idOrigen">
                    <option></option>
                    <option>U28</option>
                    <option>CPFIV</option>
                    <option>CPFCABA</option>
                    <option>OTRO</option>
                  </select>
                </div>

                <div class="col col-lg-2"> <!--MOTIVO EVALUACION-->
                  <label for="motivo_ing">Motivo Ing.</label> 
                  <select name="motivo_ing" class="form-control" id="idMotivo">
                    <option></option>
                    <option>EVALUACION</option>
                    <option>ORDEN JUDICIAL</option>
                    <option>SUPERIORIDAD</option>
                  </select>
                </div>

              </div>
          </div>
        <!-- /// FIN CAJA JUDICIAL /// --------------------------------------------------------------------->

        <!-- /// INICIO CAJA JUDICIAL 2 /// --------------------------------------------------------------------->
                  <div class="form-group">
                    <div class="row justify-content-md-center">

                      <div class="col">
                        <label>Juzgado/Tribunal</label> <!--JUZGADO-->
                        <input type="text" name="juz_ing" class="form-control" id="idIngJuz" placeholder="Juzgado/Tribunal a cargo" disabled>
                      </div>

                      <div class="col">
                        <label>Delito</label> <!--DELITO-->
                        <input type="text" name="delito_ing" class="form-control" id="idIngDelito" placeholder="Delito">
                      </div>

                      <div class="col col-lg-2"> <!--ARTICULOS-->
                        <label>Articulo</label> 
                        <select name="art_ing" class="form-control" id="idArticulo">
                          <option></option>
                          <option>ART.34</option>
                          <option>ART.18</option>
                        </select>
                      </div>

                    </div>
                  </div>
        <!-- /// FIN CAJA JUDICIAL 2 /// --------------------------------------------------------------------->

        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-primary" id="editar_registro" onclick="editarform()">Editar</button>
          <button type="button" class="btn btn-primary" id="guardar_registro" onclick="#">GUARDAR</button>
        </div>

      </div>
    </div>
  </div>
<!-- /// FIN MODAL /// --------------------------------------------------------->

<!-- /// MODAL NUEVO REGISTRO INTERNO /// --------------------------------------------------------->

  <div class="modal fade bd-example-modal-lg" id="modalIngresarInterno" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document" style="max-width: 80% !important;">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Editar -- Registro de Interno Ingresado</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

        <form action="procesa2.php" method="POST">

  <!-- /// INICIO CAJA DATOS PERSONALES /// ---------------------------------------------------------------->
            <div class="form-group">
              <div class="row">

                <div class="col">
                  <label for="app_ing">Apellido</label> <!--APELLIDO-->
                  <input type="text" name="app_ing" class="form-control" id="idIngApp" placeholder="Apellido del interno">
                </div>

                <div class="col">
                  <label for="nom_ing">Nombre</label> <!--NOMBRE-->
                  <input type="text" name="nom_ing" class="form-control" id="idIngNom" placeholder="Nombre del interno">
                </div>

                <div class="col col-lg-3">
                  <label for="fecha_ing">Fecha/Hora (de ingreso)</label><!--FECHA/HORA-->
                  <input type="datetime-local" name="fecha_ing" class="form-control" id="idIngFecha">
                </div>

              </div>
            </div>

            <div class="form-group">
              <div class="row justify-content-md-center">

                <div class="col col-lg-1">
                  <label for="edad_ing">Edad</label><!--EDAD-->
                  <input type="text" name="edad_ing" class="form-control" id="idIngEdad" placeholder="Edad del interno">
                </div>
                  
                <div class="col col-lg-2">
                  <label for="sexo_ing">Sexo</label> <!--SEXO-->
                  <select name="sexo_ing" class="form-control" id="idIngSexo">
                    <option></option>
                    <option>Masculino</option>
                    <option>Femenino</option>
                  </select>
                </div>

                <div class="col">
                  <label for="fecha_nac_ing">Fecha de Nacimiento</label><!--FECHA DE NACIMIENTO-->
                  <input type="date" name="fecha_nac_ing" class="form-control" id="idIngFechaNac">
                </div>

                <div class="col col-lg-2">
                  <label for="cond_sex_ing">Condicion Sexual</label> <!--CONDICION SEXUAL-->
                  <select name="cond_sex_ing" class="form-control" id="idCondSex">
                    <option></option>
                    <option>HETEROSEXUAL</option>
                    <option>HOMOSEXUAL</option>
                    <option>BISEXUAL</option>
                  </select>
                </div>

                <div class="col col-lg-2">
                  <label for="civil_ing">Estado Civil</label> <!--ESTADO CIVIL-->
                  <select name="civil_ing" class="form-control" id="idCivil">
                    <option></option>
                    <option>SOLTERO</option>
                    <option>CASADO</option>
                    <option>DIVORCIADO</option>
                    <option>VIUDO</option>
                  </select>
                </div>

                <div class="col col-lg-2">
                  <label for="naciona_ing">Pais de Origen</label> <!--NACIONALIDAD-->
                  <select name="naciona_ing" class="form-control" id="idNaciona">
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
                  <label for="tipo_ing">INGRESO/EGRESO</label> 
                  <select name="tipo_ing" class="form-control" id="idTipoIng">
                    <option></option>
                    <option>INGRESO</option>
                    <option>REINGRESO</option>
                    <option>TRANSITO</option>
                  </select>
                </div>

                <div class="col col-lg-4"> <!--LPU-->
                  <label for="lpu_ing">LPU</label> 
                  <input type="text" maxlength="6" name="lpu_ing" class="form-control" id="idIngLpu" placeholder="LPU del interno" onkeypress="return valida(event)">
                    
                    <!-- FUNCION PARA USAR NUMEROS EN CAMPO TIPO TEXTO -->
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
                  <label for="sit_ing">PROC/CON</label> 
                  <select name="sit_ing" class="form-control" id="idSitIng">
                    <option></option>
                    <option>PROCESADO</option>
                    <option>CONDENADO</option>
                  </select>
                </div>

                <div class="col col-lg-2"> <!--ORIGEN-->
                  <label for="org_ing">Origen</label> 
                  <select name="org_ing" class="form-control" id="idOrigen">
                    <option></option>
                    <option>U28</option>
                    <option>CPFIV</option>
                    <option>CPFCABA</option>
                    <option>OTRO</option>
                  </select>
                </div>

                <div class="col col-lg-2"> <!--MOTIVO EVALUACION-->
                  <label for="motivo_ing">Motivo Ing.</label> 
                  <select name="motivo_ing" class="form-control" id="idMotivo">
                    <option></option>
                    <option>EVALUACION</option>
                    <option>ORDEN JUDICIAL</option>
                    <option>SUPERIORIDAD</option>
                  </select>
                </div>

              </div>
            </div>
  <!-- /// FIN CAJA JUDICIAL /// --------------------------------------------------------------------->
  <hr />
  <!-- /// INICIO CAJA JUDICIAL 2 /// --------------------------------------------------------------------->
          <div class="form-group">
            <div class="row justify-content-md-center">

              <div class="col">
                <label for="juz_ing">Juzgado/Tribunal</label> <!--JUZGADO-->
                <input type="text" name="juz_ing" class="form-control" id="idIngJuz" placeholder="Juzgado/Tribunal a cargo">
              </div>

              <div class="col">
                <label for="delito_ing">Delito</label> <!--DELITO-->
                <input type="text" name="delito_ing" class="form-control" id="idIngDelito" placeholder="Delito">
              </div>

              <div class="col col-lg-2"> <!--ARTICULOS-->
                <label for="art_ing">Articulo</label> 
                <select name="art_ing" class="form-control" id="idArticulo">
                  <option></option>
                  <option>ART.34</option>
                  <option>ART.18</option>
                </select>
              </div>

            </div>
          </div>
  <!-- /// FIN CAJA JUDICIAL 2 /// --------------------------------------------------------------------->
  
          </div>

          <div class="modal-footer"> <!-- BOTON INGRESAR INTERNO -->
            <button type="submit" class="btn btn-primary" id="btn-ingresar">Ingresar</button>
          </div>

          </form>

        </div>
      </div>
    </div>
<!-- /// FIN MODAL /// --------------------------------------------------------->

<footer class="page-footer font-small blue" style="background-color:#F8F9FA; position: sticky; height: 100px; bottom: 0; width: 100%;">

  <div class="footer-copyright text-center py-3">© 2018 Copyright:
  Ayte. 3ra Juan G. MAGARINOS (Cred. 34.424)
  </div>

</footer>    

</body>
</html>