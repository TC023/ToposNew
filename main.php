<!DOCTYPE html>
<html lang="es">
<head>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Topos FC - Página Oficial</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <?php
	$nombre = $_POST['nombre'] ?? '';
	$contrasena = $_POST['contrasena'] ?? '';
	
	
	require 'database.php'; 
	
	$pdo = Database::connect();
	
	$sql = "SELECT * FROM reto_admins WHERE nombre = '$nombre' AND contraseña = '$contrasena'";
	$stmt = $pdo->query($sql);
	if ($stmt->rowCount() === 1 OR $_POST["isAdmin"] ?? 0) {
		$isAdmin = TRUE;
    echo '<script>
    alert("Inicio de sesión exitoso");
    </script>';
	} else {
		
		$isAdmin = FALSE;
	}
  echo '
	<form action="anuncios.php" id = "formEventos" method = "POST">
	<input type="hidden" value= '.$isAdmin.' name = "isAdmin">
	</form>
	';

  echo '
	<form action="main.php" id = "formMain" method = "POST">
	<input type="hidden" value= '.$isAdmin.' name = "isAdmin">
	</form>
	';

  echo '
	<form action="diagrama_torneo.php" id = "formTorneo" method = "POST">
	<input type="hidden" value= '.$isAdmin.' name = "isAdmin">
	</form>
	';

  echo '
	<form action="galeria.php" id = "formFotos" method = "POST">
	<input type="hidden" value= '.$isAdmin.' name = "isAdmin">
	</form>
	';


  
  Database::disconnect();
?>
	<div class="navbar">
			<a onclick="toMain()">CALENDARIO</a>
			<a href="#">EQUIPOS</a>
			<a onclick="toTorneo()">TORNEOS</a>
			<a onclick="toEventos()">EVENTOS</a>
			<a onclick="toFotos()">FOTOS</a>
			<a href="#">ADMINISTRADORES</a>
			<a onclick="adios()"><img class="salir" alt="salir" src="salir.png"></a>
		</div>

    <div class="navbarPublic">
    <a onclick="toMain()">INICIO</a>
			<a href="#">EQUIPOS</a>
			<a onclick="toTorneo()">TORNEOS</a>
			<a onclick="toEventos()">EVENTOS</a>
			<a onclick="toFotos()">FOTOS</a>
			<a href="inicio.php">INICIAR SESIÓN</a>
		</div>

<div class="contenido">
<div class="background privacy">
  <a href="https://toposfc.org/">
    <img class="logo1" src="logo.png" alt="Logo de Topos FC">
  </a>
  <div class="logo">
    <h1>PÁGINA OFICIAL</h1>
  </div>
</div>
<!-- Field rental section with image -->
<div class="container">
  <h1 class="title">¿Sabías que puedes rentar la cancha de Topos F.C. para tus eventos?</h1>
  <div class="content">
    <div class="left-column">
      <img src="https://th.bing.com/th/id/OIP.DAAH2N6fs-C_Ub1vb6GzVgHaEL?rs=1&pid=ImgDetMain" alt="Soccer Field">
    </div>
    <div class="right-column">
      <p>La cancha de Topos F.C. tiene dimensiones de 20m por 7m, perfecta para eventos como fiestas corporativas, eventos deportivos, talleres al aire libre, ¡y mucho más!</p>
      <div class="data-text">
        <ul>
          <li>Dimensiones: 20m x 7m</li>
          <li>Capacidad: 50 personas</li>
          <li>Características: Cancha techada, espacio de asadores</li>
        </ul>
      </div>
    </div>
  </div>
</div>
<!-- Calendar booking section -->
<div class="calendarcontainer">
  <div class="contentcalendar"> 
  <div class="calendarheader">
  <h1>Calendario de disponibilidad</h1>
  <h4>CANCHA DE TOPOS F.C.</h4>
  <div class = "slot-div">
  <p id="slot_message" ></p> <!-- Message placeholder-->
</div>
<div class="verrev" style="display: none;">
  <button id="ver-button">Ver datos</button>
</div>
</div>
<!-- Calendar print section -->
  <div class="calendar-section">
    <h2>Seleccione la fecha de su evento</h2>
    <div class="calendar2"></div>
  </div>
  <div class="time-slots-section" >
    <h3 id = 'diaselect'></h3>
    <ul id="time-slots">
      <!-- Time slots go here -->
      <li>12:00</li>
      <li>13:00</li>
      <li>14:00</li>
      <li>15:00</li>
      <li>16:00</li>
      <li>17:00</li>
      <li>18:00</li>
      <li>19:00</li>
      <li>20:00</li>
      <li>21:00</li>
      <!-- ... -->
    </ul>
    <button id="select-button">Seleccionar</button>
  </div>
  </div>
</div>
<!-- Form section to display-->
<div class="form-section" style="display: none;">
<form id="reservation-form" class="form-container">
<a id="back-button" class="atras-button">
  <img class="atras" src="https://static.vecteezy.com/system/resources/previews/000/589/654/non_2x/vector-back-icon.jpg" alt="Atrás">
</a>
  <img class="icono" src="https://i.imgur.com/7qPMdhy.png">
  <div class="form-header">
    Datos del responsable de la reserva
  </div>
  <div class="form-field">
    <label for="name">Nombre:</label>
    <input type="text" id="name" name="name">
  </div>
  <div class="form-field">
    <label for="phone">Teléfono:</label>
    <input type="tel" id="phone" name="phone">
  </div>
  <div class="form-field">
    <label for="email">Correo:</label>
    <input type="email" id="email" name="email">
  </div>
  <div class="next-button">
  <a id="next-button">Siguiente</a>
</div>
</form>
</div>
<!-- Data confirm | Step 3 -->
<div class="contenedor-step3" style="display: none;">
  <button id="back2-button" class="atras-button">
      <img class="atras" src="https://static.vecteezy.com/system/resources/previews/000/589/654/non_2x/vector-back-icon.jpg" alt="Atrás">
  </button>
  <img class="icono-step3" src="https://i.imgur.com/7qPMdhy.png">
  <h2 class="titulo-step3">Tu reservación está siendo procesada</h2>
  <p class="texto-step3">Porfavor corrobora tu información antes de continuar</p>
  <div class="contenedor-info-step3">
    <div class="izquierda-step3">
      <p><b>Nombre:</b> {{nombre}}<br><b>Teléfono:</b> {{telefono}}<br>
        <b>Correo:</b> {{correo}}
      </p>
    </div>
    <div class="derecha-step3">
      <p><b id="confirmDate"></b><br></p>
      <p id="hoursSelected"></p>
    </div>
  </div>
  <button id="button-step3">Confirmar</button>
</div>

<!-- Step 4 idk the name -->
<div class="contenedor-step4" style="display: none;">
  <img class="icono-step4" src="https://i.imgur.com/7qPMdhy.png">
<h2 class="titulo-step4">En breve un administrador se comunicará contigo para realizar el pago de la reserva</h2>
<p class="texto-step4">En caso de dudas comunicarse al siguiente correo:<br> dudasreservaciones@gmail.com</p>
<button id="boton-step4">Listo</button>
</div>

<!-- Admin reservation management -->
<div class="adminContainer" style="display: none;">
    <button id="atras-button" class="atras-button">
      <img class="atras" src="https://static.vecteezy.com/system/resources/previews/000/589/654/non_2x/vector-back-icon.jpg" alt="Atrás">
    </button>
    <img class="icono" src="https://i.imgur.com/7qPMdhy.png">
    <h2 class="titulo">Confirmar o eliminar reservación</h2>
    <p class="texto">Porfavor corrobora la información antes de continuar</p>
    <div class="adminContainer-info">
    <div class="adminizquierda">
</div>

      <div class="adminderecha">
        <p><b id="savedDate"></b><br></p>
        <p id="savedHours"></p>
      </div>
    </div>

    <div class="adminContainer-botones">
        <div class="confirmar">
            <a id="payconfirm">Confirmar</a>     
        </div>
        
        <div class="eliminar">
            <a id="danger">Eliminar</a>     
        </div>      
    </div>
  </div>

<!-- Steps Bar Container -->
<div class="steps-bar-container">
  <div class="step-circle step-circle-1"><span class="checkmark">✓</span></div>
  <div class="step step-0"></div>
  <div class="step-circle step-circle-2"><span class="checkmark">✓</span></div>
  <div class="step step-1"></div>
  <div class="step-circle step-circle-3"><span class="checkmark">✓</span></div>
  <div class="step step-2"></div>
  <div class="step-circle step-circle-4"><span class="checkmark">✓</span></div>
</div>

<footer class="foot">
  <div class="g1">
    <a href="https://toposfc.org/wp-content/uploads/2023/09/aviso-de-privacidad-integral.pdf">
      <span class="g2">Topos F.C. 2024 | Consulta nuestro aviso de privacidad</span>
    </a>
    <span class="g3">¿Quieres más información? Contáctanos</span>
    <span class="g4">
      Correo: <a href="mailto:contacto@toposfc.org">contacto@toposfc.org</a><br>
      Whatsapp: <a href="https://wa.me/522222796186">2222796186</a>
    </span>
    <div class="g5">
      <span class="g6">Síguenos en redes sociales</span>
      <br>
      <a href="https://www.facebook.com/ToposFCPuebla/?locale=es_LA">
        <img class="name" src="fb.png" alt="Facebook">
      </a>
      <a href="https://www.instagram.com/toposfcpuebla/">
        <img class="name" src="insta.png" alt="Instagram">
      </a>
      <a href="https://x.com/ToposFCPuebla?mx=2">
        <img class="name" src="tw.png" alt="Twitter">
      </a>
    </div>
  </div>
</footer>
</div>
<script>
  var isAdmin = "<?php echo $isAdmin; ?>";

  if (isAdmin) {
    document.querySelector(".navbar").style.display = "flex";
  }else{
    document.querySelector(".navbarPublic").style.display = "flex";
  }

  function toEventos() {
		document.querySelector("#formEventos").submit();
	}

  function toTorneo() {
		document.querySelector("#formTorneo").submit();
	}

  function adios() {
    alert("Cerrando sesión");
    console.log("hola");
    document.querySelector("#formMain").innerHTML = '<input type="hidden" value= 0 name = "isAdmin">';
    document.querySelector("#formMain").submit();
  }

	function toMain() {
		document.querySelector("#formMain").submit();
	}

  function toFotos() {
		document.querySelector("#formFotos").submit();
  }

  document.addEventListener('DOMContentLoaded', function() {
    
    if (isAdmin == 1) {
        var adminScript0 = document.createElement('script');
        adminScript0.src = 'adminCalendarControls.js';
        document.body.appendChild(adminScript0);

        var adminScript1 = document.createElement('script');
        adminScript1.src = 'biggertext_script.js';
        document.body.appendChild(adminScript1);

        var adminScript2 = document.createElement('script');
        adminScript2.src = 'adminHours.js';
        document.body.appendChild(adminScript2);

        var adminScript3 = document.createElement('script');
        adminScript3.src = 'submit_script.js';
        document.body.appendChild(adminScript3);

        var adminScript4 = document.createElement('script');
        adminScript4.src = 'stepst_script.js';
        document.body.appendChild(adminScript4);

        var adminScript5 = document.createElement('script');
        adminScript5.src = 'calendar_script.js';
        document.body.appendChild(adminScript5);
    } else {
        var userScript1 = document.createElement('script');
        userScript1.src = 'biggertext_script.js';
        document.body.appendChild(userScript1);

        var userScript2 = document.createElement('script');
        userScript2.src = 'hours_script.js';
        document.body.appendChild(userScript2);

        var userScript3 = document.createElement('script');
        userScript3.src = 'submit_script.js';
        document.body.appendChild(userScript3);

        var userScript4 = document.createElement('script');
        userScript4.src = 'stepst_script.js';
        document.body.appendChild(userScript4);

        var userScript5 = document.createElement('script');
        userScript5.src = 'calendar_script.js';
        document.body.appendChild(userScript5);
    }
  })
</script>
</body>
</html>
