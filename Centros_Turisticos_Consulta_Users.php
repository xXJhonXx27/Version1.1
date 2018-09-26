<!DOCTYPE html>
<html lang="ES">
<head>
  <meta charset="UTF-8">
  <title>Bogota Turismo</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="estilos.css">
    <link rel="shortcut icon" type="image/x-icon" href="icono.png">
</head>
<body>
 <header>
 <div class="container">
   <div class="container row">
    <div class="logo col-sm-7 col-md-9 col-lg-9">
    <img src="logotipo.png" alt="">
    <h1 class="he col-sm-5 col-md-3 col-lg-3">Bogota Y Sus Centros Turisticos</h1>
  </div>
  </div>
  <nav class="menu">
    <ul>
      <li><a href="Centros_Turisticos_Consulta.html">Inicio</a></li>
      <li><a href="Lugares.html">Consulta Lugares</a></li>
      <li><a href="Sitios.html">Sitios Favoritos</a></li>
      <li><a href="Redes.html">Redes Sociales</a></li>
      <li><a href="Centros_Turisticos_Consulta_Users.php">Consulta De Usuarios</a></li>
      <li><a href="Contactos.html">Contactanos</a></li>
      <li><input class="ip" type="text" placeholder="Buscar"><button class="btn btn-primary">Buscar</button></li>
    </ul>
  </nav>
</div>
</header>
<?php 
  $servidor="localhost";
  $usuario="root";
  $passwd="";
  $baseDatos="bogota_turismo";
  $conexion=new mysqli ($servidor,$usuario,$passwd);
  $conexion->set_charset ("UTF8");
  $db=$conexion->select_db ("$baseDatos");
  //echo "esta instruccion se esta ejecutando si no hay errores de      conexion"
  $queryD="SELECT * FROM USUARIO";
  $resultadoC=mysqli_query($conexion,$queryD);
  $contadorR=1;
  while ($registroT=mysqli_fetch_row($resultadoC)){
    echo "<div class='container'><section class='main row'><div class='cold-md-1'>' Nombre Del Parque: ";
    echo $registroT [0]."</div><div class='cold-md-1'> ";
    echo $registroT [1]."</div><div class='cold-md-1'> ";
    echo $registroT [2]."</div><div class='cold-md-1'> ";
    echo $registroT [3]."</div><div class='cold-md-1'> ";
    echo $registroT [4]."</div><div class='cold-md-1'> ";
    echo $registroT [5]."</div><div class='cold-md-1'> ";
    echo $registroT [6]."</div><div class='cold-md-1'></div></div></section>";
  $contadorR++;
  }
?>
<div class="container">
  <section class="main row">
  <div class="col-md-8">
  <h3>Acceso A Notificaciones</h3>
  </div>
  <div class="col-md-4">
  <button class="btn btn-primary" onclick="window.location.href='http://localhost:8082/Prototipo/Centros_Turisticos_Consulta_Notificaciones.php'">Consultar</button>
  </div>
  </section>
</div>
<footer>
  <div class="container row">
    <div class="col-md-3">
        <h3>Bogota 2018</h3>
        </div>
        <div class="col-md-3">
        <h3>Copyright Grupo N2 Adsi</h3>
        </div>
        <div class="col-md-3">
        <h3>Bogota Y Sus Centros Turisticos</h3>
        </div>
        <div class="col-md-3">
        <h3>Parque y Museos</h3>
    </div>
  </div>
</footer> 
    <script src="js/jquery.js"></script>
    <script src="js/main.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>