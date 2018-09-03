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

<div class="ultrainer" style="min-height: 100%; min-height: 100vh; display: flex; align-items: center;">
<div class="container">

    <div class="header" style="margin-left: 22%;"> <!-- HEADER -->
        <div class="row" style="margin-bottom: 50px;">

            <div class="col col-lg-1" style="align-items: center; padding-right: 1px;">
            <img src="src/logo-spf.png" class="rounded mx-auto d-block" style=" width: 36px;">
            </div>


            <div class="col" style="align-items: center; padding-left: 1px;">

            <h6>Servicio Penitenciario Federal<br>
            Complejo Penitenciario Federal I - Ezeiza<br>
            Servicio Psiquiatrico para Varones (PRISMA)</h6>

            </div>

        </div>
    </div>


    <div class="row justify-content-md-center">
       
        <div class="card col col-lg-3" style="align-items: center; padding-top: 20px; padding-bottom: 20px; margin-right: 10px">
        <i class="far fa-address-card fa-7x" style="color:#6cb6fb;"></i><br>
        <a href="index-2.php" class="btn btn-outline-primary">Ingresar Nuevo Interno</a>
        </div>
       
        <div class="card col col-lg-3" style="align-items: center; padding-top: 20px; padding-bottom: 20px; margin-left:10px">
        <i class="fas fa-search fa-7x" style="color:#6cb6fb;"></i><br>
        <button type="button" class="btn btn-outline-primary">Realizar Busqueda</button>
        </div>

    </div>
    

</div>
</div>
<footer class="page-footer font-small blue" style="position: fixed; height: 100px; bottom: 0; width: 100%;">

        <div class="footer-copyright text-center py-3">© 2018 Copyright:
        Ayte. 3ra Juan G. MAGARINOS (Cred. 34.424)
        </div>

</footer>
</body>
</html>

