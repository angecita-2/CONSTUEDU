<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro | ConstuEdu</title>
    <link rel="stylesheet" href="../assets/css/registro.css">
    <link rel="icon" href="assets/img/logo.ico">

</head>

<body>
    <header id="Barra-de-inicio">
        <div id="logo">
            <img src="assets/img/logo.png" alt="imagen ConstuEdu" id="cerebro" title="ConstuEdu">
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
    
    <h1 id="titulo-registro" title="REGISTRO">REGISTRO</h1>               
    <div class="login-form">
        <nav>
        <form>
            <label for="Nombre">Nombre:</label>
            <input type="text" id="nombre" required><br><br>
            <label for="username">Usuario:</label>
            <input type="text" id="username" required><br><br>
            <label for="password">Contraseña:</label>
            <input type="password" id="password" required><br><br>
            <a href="../vista/index.php"><button id="enviar">enviar</button></a>     
        </form>
    </nav>
    </div>
</body>
</html>