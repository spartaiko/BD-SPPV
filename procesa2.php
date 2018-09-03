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
    <!-- TOOLTIP - TEXTO LEYENDA -->
    <script>
      $(document).ready(function(){
          $('[data-toggle="tooltip"]').tooltip();   
      });
    </script>
    
</head>
<body class="bg-light" style="overflow: auto;">

<?php
error_reporting(E_ALL ^ E_NOTICE);
$servername = "127.0.0.1";
$database = "SPPV";
$username = "root";
$password = "";
// Crear conexion
$conn = mysqli_connect($servername, $username, $password, $database);
// Chequean conexion
if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
}


//Recuperando las variables
$nombre = $_POST['nom_ing'];
$apellido = $_POST['app_ing'];
$lpu = $_POST['lpu_ing'];
$origen = $_POST['org_ing'];
$fingreso = $_POST['fecha_ing'];
$edad = $_POST['edad_ing'];
$tipoing = $_POST['tipo_ing'];



$sexo_ing = $_POST['sexo_ing'];
$naciona_ing = $_POST['naciona_ing'];
$motivo_ing = $_POST['motivo_ing'];
$fecha_nac_ing = $_POST['fecha_nac_ing'];

$cond_sex_ing = $_POST['cond_sex_ing'];
$civil_ing = $_POST['civil_ing'];
$sit_ing = $_POST['sit_ing'];
$juz_ing = $_POST['juz_ing'];
$delito_ing = $_POST['delito_ing'];
$art_ing = $_POST['art_ing'];

?>


<div class="ultrainer" style="min-height: 100%; min-height: 100vh; display: flex; align-items: center;">
<div class="container">

<div class="row justify-content-md-center">
       
       <div class="card col col-lg-3" style="align-items: center; padding-top: 20px; padding-bottom: 20px; margin-right: 10px">
       <i class="fas fa-user-check fa-7x" style="color:#6cb6fb;"></i><br>

      <?php  //Insertando variables en la BD
            $sql = "INSERT INTO ingreso (id_ingreso, app_ing, nom_ing, edad_ing, sexo_ing, fecha_ing, lpu_ing, org_ing,
            naciona_ing, motivo_ing, tipo_ing, 
            fecha_nac_ing, cond_sex_ing, civil_ing, sit_ing, juz_ing, delito_ing, art_ing) 

            VALUES ('', '$apellido', '$nombre', '$edad', '$sexo_ing', '$fingreso', 
            '$lpu', '$origen', '$naciona_ing', '$motivo_ing', '$tipoing', '$fecha_nac_ing', '$cond_sex_ing', '$civil_ing', 
            '$sit_ing', '$juz_ing', '$delito_ing', '$art_ing')";

            if (mysqli_query($conn, $sql)) {
                  echo "<p style='text-align:center;'>El interno fue agregado correctamente</p>";
            } else {
                  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
            mysqli_close($conn);
      ?>

       <a href="index-2.php" class="btn btn-outline-primary">Volver</a>
       </div>

   </div>

</div>
</div>
<footer class="page-footer font-small blue" style="background-color:#F8F9FA; position: fixed; height: 100px; bottom: 0; width: 100%;">

  <div class="footer-copyright text-center py-3">© 2018 Copyright:
  Ayte. 3ra Juan G. MAGARINOS (Cred. 34.424)
  </div>

</footer>
</body>
</html>