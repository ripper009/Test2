<!DOCTYPE html>
<html lang='es'>

<head>
    <title>FORMULARIO DE REGISTRO</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="estilos.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet"  href="/Test1/css/stylescontacus.css"/>
</head>

<body>
    
  <header>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <nav class="navbar navbar-light" id="header">
    <div class="container-fluid">
    <a class="navbar-brand" href="http://localhost/Test1/index.html">
        <img src="/Test1/img/logo2.png"  alt="..." width="380" height="250" class="d-inline-block align-text-top" id="img">
      </a>
      <div>
          <h1 class="text-center">MOVIMIENTO EDUCACION VIAL</h1>
      </div>
      <form class="d-flex" id="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </nav>
  </header>
  <nav class="navbar navbar-expand-lg navbar-light" id="barra" >
    <div class="container-fluid">
      <a class="navbar-brand" href="http://localhost/Test1/index.html"><h6 class="title">INICIO</h6></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="http://localhost/Test1/who.blade.php" id="hola"><h6 class="title">¿QUIENES SOMOS?</h6></a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="http://localhost/Test1/proyecto.blade.php"><h6 class="title">SOBRE EL PROYECTO</h6></a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="http://localhost/Test1/redes.blade.php"><h6 class="title">REDES SOCIALES</h6></a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="http://localhost/Test1/contacus.blade.php"><h6 class="title">SUGERENCIAS</h6></a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="#"><h6 class="title">MAPA DEL SITIO</h6></a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="#"><h6 class="title">PATROCINADORES</h6></a>
          </li>
        </ul>
      </div>
    </div>
  </div>
  </nav>      
  <article id="main">
    <div class="container" id="form1">
      <form action="enviar.php" method="post" class="container">
        <h2>CONTÁCTANOS</h2>
    
        <input type="text" name="nombre" placeholder="Nombre" required>
        <br/>
        <br/>
        <input type="text" name="apellido" placeholder="Apellido" required>
        <br/>
        <br/>
        <input type="text" name="e-mail" placeholder="E-mail" required>
        <br/>
        <br/>
        <input type="text" name="telefono" placeholder="telefono" required>
        <br/>
        <br/>
        <textarea name="mensaje" placeholder="Escribe tu mensaje aqui..." required></textarea>
        <br/>
        <br/>
        <input type="checkbox" name="terminos">
        <label for="terminos">Acepto terminos y condiciones. Ver terminos y condiciones de uso</label>
        <br/>
        <br/>
        <input type="submit" value="Enviar" id="boton">
        <br/>
        <br/>
        <br/>
        <h4>Gracias por sus sugerencias!!.</h4>
        <?php
        
        ?>
    </form>
    </div>
     

  </article>
  
</body>

</html>