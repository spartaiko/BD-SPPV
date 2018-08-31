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
echo "Conexion establecida.<br>";

//Recuperando las variables
$nombre = $_POST['nom_ing'];
$apellido = $_POST['app_ing'];
$lpu = $_POST['lpu_ing'];
$edad = $_POST['edad_ing'];
$sexo = $_POST['sexo_ing'];
$origen = $_POST['org_ing'];

//Insertando variables en la BD
$sql = "INSERT INTO ingreso (id_ingreso, app_ing, nom_ing, edad_ing, sexo_ing, fecha_ing, lpu_ing, org_ing, naciona_ing, motivo_ing, tipo_ing, fecha_nac_ing, cond_sex_ing, civil_ing) 
VALUES ('', '$apellido', '$nombre', '$edad', '$sexo', '', '$lpu', '$origen', '', '', '', '', '', '')";
if (mysqli_query($conn, $sql)) {
      echo "El interno fue agregado correctamente";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
echo '
<form method="get" action="index.php">
    <button type="submit">Volver</button>
</form>
';
?>