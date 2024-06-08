<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Topos FC - Página Oficial</title>
    <style>
        /* Styles for the navigation and logo section */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-image: url('fondo.png');
            background-size: cover;
            background-attachment: fixed;
            background-color: rgba(0, 0, 0, 0.7);
            background-blend-mode: overlay;
        }

        .navbar {
			display: none;
			justify-content: space-around;
			padding: 1em;
			position: fixed;
			width: 100%;
			top: 20px;
			background-color: transparent;
			z-index: 10;
		}

		.navbar a:hover {
			font-weight: bold;
			text-decoration: underline;
			transition: background-color 0.3s ease;
		}

		.navbar a,
		.navbar button {
			color: white;
			text-decoration: none;
			background: none;
			border: none;
			font-size: 1em;
			cursor: pointer;
		}
		
		.salir{
			position: relative;
			top: -20px;
			right: 20px;
			width:40px;
		}

		@media (max-width: 768px) {
			.navbar {
				flex-direction: column;
				align-items: center;
			}
		}
.navbarPublic {
  display: none;
  justify-content: space-around;
  padding: 1em;
  position: fixed;
  width: 100%;
  top: 20px;
  background-color: transparent;
  z-index: 10;
}

.navbarPublic a:hover {
  font-weight: bold;
  text-decoration: underline;
  transition: background-color 0.3s ease;
}

.navbarPublic a,
.navbarPublic button {
  color: white;
  text-decoration: none;
  background: none;
  border: none;
  font-size: 1em;
  cursor: pointer;
}

@media (max-width: 768px) {
  .navbarPublic {
    flex-direction: column;
    align-items: center;
  }
}


        .g1 {
            width: 100%;
            height: 270px;
            background: rgba(12, 45, 75, 1);
            opacity: 1;
            position: relative;
            top: 0px;
            left: 0px;
            overflow: hidden;
        }

        .g2 {
            width: 468px;
            color: rgba(255, 255, 255, 1);
            position: absolute;
            top: 178px;
            left: 762px;
            font-family: Poppins;
            font-weight: Medium;
            font-size: 17px;
            opacity: 1;
            text-align: right;
        }

        .g3 {
            width: 505px;
            color: rgba(255, 255, 255, 1);
            position: absolute;
            top: 47px;
            left: 10px;
            font-family: Poppins;
            font-weight: Bold;
            font-size: 24px;
            opacity: 1;
            text-align: center;
        }

        .g4 {
            width: 308px;
            color: rgba(255, 255, 255, 1);
            position: absolute;
            top: 103px;
            left: 59px;
            font-family: Poppins;
            font-weight: Regular;
            font-size: 20px;
            opacity: 1;
            text-align: left;
        }

        .g5 {
            width: 234px;
            height: 77px;
            background: url("../images/v344_3297.png");
            background-repeat: no-repeat;
            background-position: center center;
            background-size: cover;
            opacity: 1;
            position: absolute;
            top: 64px;
            left: 996px;
            overflow: hidden;
        }

        .g6 {
            width: 234px;
            color: rgba(255, 255, 255, 1);
            position: relative;
            top: -5px;
            left: 0px;
            right:40px;
            font-family: Poppins;
            font-weight: SemiBold;
            font-size: 17px;
            opacity: 1;
            text-align: center;
        }

        .name {
            color: #fff;
        }
        * {
            box-sizing: border-box;
        }
        .foot {
            font-size: 20px;
        }
        .footer {
            width: 100%;

            position: relative;
            padding: 20px 0;
            text-align: center;
        }
        button {
        background-color: #3D92B6;
        color: white;
        font-size: 40px;
        margin-top: 15px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
}


        .contenido {
            display: grid;
            grid-template-columns: repeat(4, 1fr); /* 4 columns, each taking up 1 fraction of available space */
            gap: 20px; /* Gap between grid items */
            margin: 7%;
        }

  .eventim{
            width: 300px;
            height: 200px;
            border-radius: 20px;
        }
  .table1{
            display: flex;
            width:100px;
            left: 50px;
            color: white;
            text-align:justify;
        }
        .persona{
            text-align: right;
        }
        
        .imj{
            text-align:center;
        }
	#agrega{
		display: none;
	}
    .container {
				background-color: white;
				border-radius: 10px;
				width: 700px;
		}

		.header {
				display: flex;
				color: black;
				padding: 15px;
			font-size:30px;
		}

		.back-button {
			position: relative;
			 width:20px;
				background: none;
				border: none;
				color: white;
				font-size: 20px;
				margin-right: 10px;
				cursor: pointer;
		}

		h1 {
				margin: 0;
				font-size: 20px;
		}
		.me{
			position: absolute; 
			left: 120px;
			top: 42px;
			font-size: 30px;
			color: #0D3B66;
		}
		.content{
			position: relative;
			top: -10px;
		}


		.content img {
			padding: 10px;
				position: absolute;
			top: 20px;
				left: 30px;
				width: 40%;
				height: auto;
				border-radius: 10px;
				margin-bottom: 20px;
		}
		.form{
			position: absolute; 
			left: 250px;
		}
		.form-group {
				margin-bottom: 15px;
		}

		.form-group label {
				display: block;
				margin-bottom: 5px;
				font-weight: bold;
			color: #0D3B66;
			font-size:17px;
		}

		.form-group input,
		.form-group textarea {
				width: 40%;
				padding: 7px;
				border: 1px solid #ccc;
				border-radius: 5px;
		}

		textarea {
				resize: vertical;
				height: 20px;
		}

		.save-button {
				position:relative;
				top: 20px;
				width: 100px;
				height: 40px;
				font-size: 16px;
				margin-top: 20px;
				margin: 0 auto;
				background-color: #3D92B6;
				color: white;
				font-size: 16px;
				padding: 10px;
				border: none;
				border-radius: 5px;
				cursor: pointer;
		}

		.save-button:hover {
				background-color: #0056b3;
		}
		.popup {
            display: none;
				position: fixed;
				z-index: 1;
				left: 0;
				top: 0;
				width: 100%;
				height: 100%;
				overflow: auto;
				background-color: rgba(0,0,0,0.5);
			text-align:center;
			font-family: Arial, sans-serif;
		}

		.popup-content {
				margin: 2% auto;
				padding: 20px;
				width: 80%;
				max-width: 800px;
				text-align: center;
				border-radius: 10px;
				position: relative;
		}
		.bbutton{
			width: 50px;
		}
		.f1{
			position: relative; 
			left: 160px;
		}
		.sb{
			position: relative; 
			top:-30px;
		}

		.edit-button {
			height:20px;
			font-size:12px;
				position:relative;
				top: 300px;
				left:-170px;
				background-color: rgba(0, 0, 0, 0.5);
				color: white;
				border-radius: 5px;
				padding: 5px;
				cursor: pointer;
		}
		.form{
			position: absolute; 
			left: 250px;
		}
		.form-group {
				margin-bottom: 15px;
                right: 10px;
		}

		.form-group label {
				display: block;
				margin-bottom: 5px;
				font-weight: bold;
			color: #0D3B66;
			font-size:17px;
		}

		.form-group input {
				width: 40%;
				padding: 7px;
				border: 1px solid #ccc;
				border-radius: 5px;
		}

        .salir{
			position: relative;
			top: -20px;
			right: 20px;
			width:40px;
		}

    </style>

</head>

<body>
<?php

    if ($_POST["isAdmin"]) {
        $isAdmin = true;
    }else {
        $isAdmin = false;
    }
	// $nombre = $_POST['nombre'] ?? '';
	// $contrasena = $_POST['contrasena'] ?? '';
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
	
	require 'database.php'; 
	
	$pdo = Database::connect();
	
	// $sql = "SELECT * FROM reto_admins WHERE nombre = '$nombre' AND contraseña = '$contrasena'";
	// $stmt = $pdo->query($sql);
	// if ($stmt->rowCount() === 1) {
	// 	$isAdmin = true;
	// } else {
		
	// 	$isAdmin = false;
	// }
	
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
        <button onclick="mostrarPopup()", id="agrega">Crear Evento</button>
    <?php
        $sql = 'SELECT * FROM reto_eventos';
        foreach ($pdo->query($sql) as $row) {        
        echo '<table class = "table1">';
        echo '<tr>';
        echo     '<td colspan="2" class="imj">';
        echo         '<img src="uploads/'.$row['imagen'].'" alt="'.$row['header'].'" class="eventim">';
        echo    ' </td>';
        echo  '</tr>';
        echo   '<tr>';
        echo     '<td colspan="2">'.$row['header'].'</td>';
        echo  '</tr>';
        echo   '<tr>';
        echo     '<td colspan="2"><p>'.$row['descrip'].'</p></td>';
        echo  '</tr>';
        echo   '<tr>';
        echo     '<td>'.$row['fecha_hora'].'</td>';
        echo     '<td class = "persona">'.$row['name_responsable'].'</td>';
        echo '</tr>';
        echo '</table>';
        }
    Database::disconnect();
    ?>

<div class="popup" id="popup">
			<div class="popup-content">
				<div class="container">
						<div class="header">
								<button class="back-button" onclick="atras()"><img class= "bbutton" src="atras.png" ></button>
								<h1 class="me">Agregar evento</h1>
						</div>

						<div class="content">
								<img id = "preview" src="preview.png" >
                                <form class = "f1" action="procesar_formulario.php" method="post" enctype="multipart/form-data">
                                    <input class="edit-button" type="file" id="imagen" name="imagen" onchange="previewImage()" required ><br><br>
                                <div class="form-group">
												<label >Título</label>
												<input type="text"  name="titulo" required>
										</div>
										<div class="form-group">
												<label ">Descripción</label>
												<textarea  name="descripcion"></textarea>
										</div>
                                        <div class="form-group">
                                            <label>fecha</label>
                                            <input type="date" id="fecha" name="fecha" required><br><br>
                                            </div>
										<div class="form-group">
												<label >hora</label>
                                                <input type="time" id="hora" name="hora" required><br><br>
                                                </div>
										<div class="form-group">
												<label >Responsable</label>
												<input type="text" id="responsable" name="responsable" required>
										</div>
									<br> <br><br>
                                <div class="sb">
                                    <button type="submit" class="save-button">Guardar</button>
                                </div>
                            </form>
						</div>
				</div>
			</div>
	</div>




    </div>
<script>
		var isAdmin = "<?php echo $isAdmin; ?>";
		if (isAdmin){
			const boton = document.querySelector("#agrega");
			boton.style.display = "block";
		}
		function mostrarPopup() {
        var popup = document.getElementById("popup");
        popup.style.display = "block";
    }

    function previewImage() {
        var preview = document.querySelector('#preview');
            var file = document.querySelector('input[type=file]').files[0];
            var reader = new FileReader();

            reader.onloadend = function () {
                preview.src = reader.result;
            }

            if (file) {
                reader.readAsDataURL(file);
            } else {
                preview.src = "";
            }
    }

    function atras() {
        document.querySelector(".popup").style.display = "none";
    }

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

	function toMain() {
		document.querySelector("#formMain").submit();
	}

    function toFotos() {
		document.querySelector("#formFotos").submit();
    }

    function adios() {
    alert("Cerrando sesión");
    console.log("hola");
    document.querySelector("#formEventos").innerHTML = '<input type="hidden" value= 0 name = "isAdmin">';
    document.querySelector("#formEventos").submit();
    }


</script>    
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
</body>

    

</html>