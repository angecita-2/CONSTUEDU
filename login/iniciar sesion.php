<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio Sesión | ConstuEdu</title>
    <link rel="stylesheet" href="../assets/css/iniciar sesion.css">
    <link rel="icon" href="assets/img/logo.ico">
    <link rel="stylesheet" href="../assets/js/plugins/select2/select2.min.css">    

</head>

<body>
   
    <header id="Barra-de-inicio">
        <div id="logo">
            <img src="../assets/img/logo.png" alt="imagen ConstuEdu" id="cerebro" title="ConstuEdu">
        </div>
        <nav>
            <ul class="nav-links">
                <li><a href="../vista/index.php" id="index">principal</a></li>
                <li><a href="../vista/quienes somos.php" id="quienes-somos">quienes somos</a></li>
                <li><a href="../vista/contactanos.php" id="contactanos">contactanos</a></li>
                <li><a href="../vista/iniciar sesion.php" id="iniciar-sesion">iniciar sesion</a></li>
            </ul>
        </nav>
        <a href="../vista/registro.php"><button id="btn">registro</button></a>
    </header>
    
<h1 id="h1-inicio-sesion">INICIAR SESIÓN</h1> 


<div class="login-form">
    <nav>
        <div>
            <label for="username">Usuario:</label>
            <input type="text" id="username" ><br><br>
            <label for="password">Contraseña:</label>
            <input type="password" id="password" ><br><br>
            <a onclick="verificarusuario()"><button>enviar</button></a>        
        </div>
    </nav>
</div>
<script src="../assets/js/plugins/select2/select2.min.js"></script>
<script src="../assets/js/jquery/jquery.js"></script>
<script src="../assets/js/jquery-ui/jquery-ui.js"></script>
<script src="../js/usuario.js?rev=<?php echo times() ?>"></script>
</body> 

</html>