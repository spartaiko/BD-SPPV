<!DOCTYPE <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>BS - SPPV</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- BOOSTRAP -- CSS  --> 
    <link rel="stylesheet" href="bootstrap-4.1.3-dist/css/bootstrap.min.css">
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" media="screen" href="css/style.css" />
    <!-- BOOSTRAP -- JS -->
    <script src="bootstrap-4.1.3-dist/js/bootstrap.min.js"></script>

    <script defer src="fontawesome-free-5.3.1-web/js/all.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>            
    <!-- CONECTAR CON EL SERVIDOR -->
    <?php
      include 'server.php';
    ?>

</head>
<body class="bg-light">
    <div class="container">
        <div class="jumbotron">
          <h1>Formulario de Ingreso</h1>      
          <p>Servicio Psiquiatrico para Varones (H.P.C.I / ALA NORTE)</p>
        </div>
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
                  <option>HETEROSEXUAL</option>
                  <option>HOMOSEXUAL</option>
                  <option>BISEXUAL</option>
                </select>
              </div>

              <div class="col col-lg-2">
                <label for="civil_ing">Estado Civil</label> <!--ESTADO CIVIL-->
                <select name="civil_ing" class="form-control" id="idCivil">
                  <option>SOLTERO</option>
                  <option>CASADO</option>
                  <option>DIVORCIADO</option>
                  <option>VIUDO</option>
                </select>
              </div>

              <div class="col col-lg-2">
                <label for="naciona_ing">Pais de Origen</label> <!--NACIONALIDAD-->
                <select name="naciona_ing" class="form-control" id="idNaciona">
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
            <div class="row">

              <div class="col">
                <label for="lpu_ing">LPU</label> <!--LPU-->
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

              <div class="col col-lg-2">
                <label for="org_ing">Origen</label> <!--ORIGEN-->
                <select name="org_ing" class="form-control" id="idOrigen">
                  <option>U28</option>
                  <option>CPFII</option>
                  <option>CPFIV</option>
                  <option>CPFCABA</option>
                  <option>OTRO</option>
                </select>
              </div>

            </div>
          </div>
<!-- /// FIN CAJA JUDICIAL /// --------------------------------------------------------------------->
          <button type="submit" class="btn btn-primary" id="btn-ingresar">Ingresar</button>
        </form> 
<hr />
<!-- /// INICIO CAJA TABLA DE INTERNOS /// --------------------------------------------------------->
        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
            <thead>
                <tr>
                    <th>Num</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>LPU</th>
                    <th>Edad</th>
                    <th>Sexo</th>
                    <th>Procedencia</th>
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
            <?php
              while ($row=$result->fetch_assoc()) 
              {
                echo "<tr>";
                  echo "<td>"; echo $row['id_ingreso']; echo"</td>";
                  echo "<td>"; echo $row['nom_ing'];  echo"</td>";
                  echo "<td>"; echo $row['app_ing'];  echo"</td>";
                  echo "<td>"; echo $row['lpu_ing'];  echo"</td>";
                  echo "<td>"; echo $row['edad_ing'];  echo"</td>";
                  echo "<td>"; echo $row['sexo_ing'];  echo"</td>";
                  echo "<td>"; echo $row['org_ing'];  echo"</td>";
                  echo "<td align='center'> <a href='modif_int.php?id_ingreso=".$row['id_ingreso']."'><i class='fas fa-edit'></i></a>
                  <a href='#'><i class='fas fa-trash-alt'></i></a></td>";
                echo "</tr>";
              }
            ?>

            </tbody>
        </table>
<!-- /// INICIO CAJA TABLA DE INTERNOS /// --------------------------------------------------------->
    </div>        
</body>
</html>

